@extends('layouts.app')

@section('content')

<!-- Neues Profilbild hochladen -->

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
                <button type="submit" class="btn btn-dark" value="Updaten">Profilbild hochladen</button>
            </form>
        </div>
    </div>

<!-- Neuen Namen angeben -->  
    <form enctype="multipart/form-data" action="/profil" method="POST">
        @csrf
        <div class="form-group">
            <label for="name"><strong>Benutzername:</strong></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="{{ $user->name }}"
            value="{{ Auth::user()->name}}">
        </div>
        <div class="form-group">
            <label for="email"><strong>Deine E-Mail-Adresse:</strong></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="{{ $user->email }}"
            value="{{ Auth::user()->email}}">
        </div>

        <button type="submit" class="btn btn-dark" value="Updaten">Änderungen speichern</button>
    </form>

<!-- Neues Passswort vergeben -->

    <form enctype="multipart/form-data" action="/profil" method="POST">
        @csrf

        <div class="form-group">
            <label for="password"><strong>Aktuelles Passwort:</strong></label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="new_password"><strong>Neues Passwort:</strong></label>
            <input type="password" class="form-control" id="new_password" name="new_password">
        </div>
        <div class="form-group">
            <label for="new_password_confirmation"><strong>Neues Passwort bestätigen</strong></label>
            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">  
        </div>

        <button type="submit" class="btn btn-dark" value="Updaten">Passwort ändern</button>
    </form>
            
           
       

</div>



@endsection
