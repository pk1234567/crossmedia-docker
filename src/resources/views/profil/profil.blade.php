@extends('layouts.app')

@section('content')


<div class= "col-md-9 col-lg-9 pull-right"></div>
<h2>Neue Datei hochladen</h2>
<p class="sub">Nenn mich Osama</p>

<div class="card mb-2">
<div class="card-header">Profileinstellungen</div>
<div class="card-body">
    <form action="/store" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="file" style="padding: 2em 1em;">
    <br>
    <button type="submit" class="btn btn-dark" value="Hochladen">Hochladen</button>
</form></div>
</div>

</div>
@endsection
