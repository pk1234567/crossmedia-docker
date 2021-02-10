<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.profil');
    }

    public function store(Request $request){
        dd($request);
    }
}
