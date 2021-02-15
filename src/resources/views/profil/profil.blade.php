@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" 
            style="width:150px; height: 150px; float:left; 
            border-radius: 50%; margin-right: 25px;">
            <h2>{{ $user->name }}'s Profilbereich</h2>
            <form enctype="multipart/form-data" action="/profil" method="POST">
                <label>Hier kannst du deinen Profilbereich anpassen</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-dark" value="Hochladen">Profilbild hochladen</button>
        </div>
    </div>
</div>




@endsection
