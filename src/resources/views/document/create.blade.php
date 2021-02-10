@extends('layouts.app')

@section('content')

<div class= "col-md-9 col-lg-9 pull-right">
    <h2>Neue Datei hochladen</h2>
    <p class="sub">Laden Sie hier eine neue Datei mit Dateiname und Beschreibung hoch.</p>
    <form action="/files" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" name="title" placeholder="Dateiname">
        <input type="text" name="description" placeholder="Beschreibung" size="55">
        <input type="file" name="file" style="padding: 2em 1em;">
        <br>
        <button type="submit" class="btn btn-dark" value="Hochladen">Hochladen</button>
    </form>
</div>
@endsection


