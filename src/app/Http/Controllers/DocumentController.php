<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documents;

class DocumentController extends Controller
{

    public function index()
    {

        $file=Documents::all();
        $filetype = $file->sortBy('filetype')->pluck('filetype')->unique();
        $kategorie = $file->sortBy('kategorie')->pluck('kategorie')->unique();
        $file=Documents::paginate(10);
        return view('document.view',compact('file', 'filetype', 'kategorie'));
    }


    public function create()
    {
        return view('document.create');
    }


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


    public function show($id)
    {
        $data=Documents::find($id);
        return view('document.details',compact('data'));
    }


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


         $filetype = $file->sortBy('filetype')->pluck('filetype')->unique();
         $kategorie = $file->sortBy('kategorie')->pluck('kategorie')->unique();

        return view('document.search', compact('file', 'kategorie', 'filetype'));

    }


    public function downloadAsCMYK($id){
        $data=Documents::find($id);
        $image = new \Imagick('storage/'.$data->file);
        $image->transformImageColorspace(\Imagick::COLORSPACE_CMYK);
        // $image->writeImage('storage/'.$filename);
        return response((string)$image, 200)
            ->header('Content-Disposition', 'attachment; filename='.$data->file);
    }


    public function downloadAsPNG($id){
        $data=Documents::find($id);
        $image = new \Imagick('storage/'.$data->file);
        $image->setImageFormat("png");
        header("Content-type: image/png");
        return response((string)$image, 200)
            ->header('Content-Disposition', 'attachment; filename='.$data->title.'.png');
    }

    public function downloadAsGIF($id){
        $data=Documents::find($id);
        $image = new \Imagick('storage/'.$data->file);
        $image->setImageFormat("gif");
        header("Content-type: image/gif");
        return response((string)$image, 200)
            ->header('Content-Disposition', 'attachment; filename='.$data->title.'.gif');
    }


    public function downloadAsJPEG($id){
        $data=Documents::find($id);
        $image = new \Imagick('storage/'.$data->file);
        $image->setImageFormat("jpg");
        header("Content-type: image/jpg");
        return response((string)$image, 200)
            ->header('Content-Disposition', 'attachment; filename='.$data->title.'.jpg');
    }

    public function filtern(){
        $file = Documents::all();
        $filetype = $file->sortBy('filetype')->pluck('filetype')->unique();
        $kategorie = $file->sortBy('kategorie')->pluck('kategorie')->unique();

        return view('document.search', compact('filetype', 'kategorie'));
    }

    public function metaexport(){

        $table = Documents::all();
        $filename = "meta.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('title', 'description', 'filetype', 'filesize', 'created at'));

        foreach($table as $row) {
            fputcsv($handle, array($row['title'], $row['description'], $row['filetype'],$row['filesize'], $row['created_at']));
        }

        fclose($handle);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return Response::download($filename, 'meta.csv', $headers);
    }
}

