@extends('layouts.app')

@section('content')
<div class= "col-md-9 col-lg-9 pull-right">
<h2>{{$data->title}}</h2>
<p>{{$data->description}}</p>
<p>
    <iframe src="{{url('storage/' .$data->file)}}" style="width: 600px;
    height: 500px;"></iframe>
</p>
<button class="btn btn-dark"><a href="/files" style="color: white">Zurück</a></button>
</div>
@endsection

