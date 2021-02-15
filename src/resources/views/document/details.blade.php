@extends('layouts.app')

@section('content')
<div class= "col-md-9 col-lg-9 pull-right">
    <h2>Asset-Titel: {{$data->title}}</h2>
    <p>Asset-Beschreibung: <br> {{$data->description}}</p>
    <p>
<iframe class="center" src="{{url('storage/' .$data->file)}}" style="width: 320px; height: 320px; position: center; margin-top: 3em;"></iframe>
    </p>
    <button class="btn btn-dark"><a href="/files" style="color: white">Zurück</a></button>
    <button class="btn btn-dark"><a href="/file/edit/{{$data->id}}" style="color: white">Asset bearbeiten</a></button>
    <button class="btn btn-dark"><a href="/file/download/{{$data->file}}" style="color: white">Donwload Original</a></button>
    <button class="btn btn-dark"><a href="/file/metaexport/{{$data}}" style="color: white">Metaexport</a></button>
    <button class="btn btn-dark"><a href="/file/delete/{{$data->id}}" style="color: white">Asset löschen</a></button>
</div>



@endsection

