@extends('layouts.app')

@section('content')


<div class= "col-md-9 col-lg-9 pull-right"></div>
<form action="/files" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Dateiname">
    <input type="text" name="description" placeholder="Beschreibung">
    <input type="file" name="file">
    <button type="submit" class="btn btn-dark" value="Hochladen">Hochladen</button>
</form>
</div>
@endsection
