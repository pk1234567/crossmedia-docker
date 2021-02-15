<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;


class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.profil', array('user' =>Auth::user()));
    }

    public function store(Request $request){
        dd($request);
    }

    public function update_avatar(Request $request){

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('uploads/avatars/' . $filename ));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profil.profil', array('user' =>Auth::user()));
    }

   
        
}



