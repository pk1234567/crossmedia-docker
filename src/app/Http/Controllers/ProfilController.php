<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use Hash;
use Session;


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

    public function changePassword(Request $request){

        if(!(Hash::check($request->get('password'), Auth::user()->password))){
            return back()->with('error', 'Die beiden Passwörter stimmen nicht überein');
        }

        if(strcmp($request->get('password'), $request->get('new_password')) == 0){
            return back()->with('error', 'Dein aktuelles Passwort darf nicht mit deinem neuen übereinstimmen');
        }
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|string|min:8|confirmed'
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('message', 'Dein Passwort wurde geändert.');
        
        
    }

    public function profileUpdate(Request $request){

        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return view('profil.profil', array('user' =>Auth::user()));

    
    }
    
   
}



