<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documents;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $file=Documents::all();
        $file=Documents::paginate(10);
        return view('document.view',compact('file'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Documents;

        if($request->file('file')){
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file= $filename;
            $data->filesize=$file->getSize();
        }

        // $request->file('file')->getSize();

        $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        $data->filetype=$filetype;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->kategorie=$request->kategorie;
        $data->save();
        return redirect()->route('view');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $data=Documents::find($id);
        return view('document.details',compact('data'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function download($file)
    {
        return response()->download('storage/' .$file);
    }

    public function delete($id)
    {
        $data=Documents::find($id);
        $data->delete();
        return redirect('files');
    }

    public function edit($id)
    {
        $data=Documents::find($id);
        return view ('document.edit',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        /*
        $data=Documents::find($request->id);
        $data->title=$request->title;
        $data->description=$request->description;
        $data->save();
        return redirect('files');

        */
        $data = Documents::find($id);

        $data->title = $request->input('title');
        $data->description = $request->input('description');

        $data->save();
        session()->flash('message', 'Asset erfolgreich bearbeitet');
        if (isset($request->editForm)){
            return redirect()->route('view');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function suche(){

        $search_text =$_GET['query'];

        $file = Documents::where('title', 'LIKE', '%'.$search_text.'%')
                            ->orwhere('description', 'LIKE', '%'.$search_text.'%')
                            ->orwhere('kategorie', 'LIKE', '%'.$search_text.'%')
                            ->orwhere('filetype', 'LIKE', '%'.$search_text.'%')->get();

        return view('document.search', compact('file'));

    }


    public function downloadAsCMYK($id){
        $data=Documents::find($id);
        $image = new \Imagick('storage/'.$data->file);
        $image->transformImageColorspace(\Imagick::COLORSPACE_CMYK);
        // $image->writeImage('storage/'.$filename);
        return response((string)$image, 200)
            ->header('Content-Disposition', 'attachment; filename='.$data->file);
    }

    public function filtern(){
        $file = Documents::all();
        $filetype = $file->sortBy('filetype')->pluck('filetype')->unique();
        $kategorie = $file->sortBy('kategorie')->pluck('kategorie')->unique();

        return view('document.search', compact('filetype', 'kategorie'));
}

}
