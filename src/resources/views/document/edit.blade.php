@extends('layouts.app')

@section('content')

<h1>Assets bearbeiten Nr.{{ $data->id }}</h1>

<div class="col-sm-8 col-sm-offset-2">

<form action="{{ route('view', ['id'=>$data->id]) }}" method="POST">

{{ csrf_field() }}

<input type="hidden" name="_method" value="POST">

<div class="form-group">
<label for="title">Assetname </label>
<input name="title" type="text" class="form-control" value="{{ $data->title }}">
</div>

<div class="form-group">
<label for="description">Beschreibung</label>
<textarea name="body" id="" cols="30" rows="10" class="form-control">{{ $data->description}}</textarea>
</div>

<input type="hidden" name="editForm" value="editForm">


<button type="submit" class="btn btn-dark">Änderungen speichern</button>

<a href="{{ route ('view') }}" class="btn btn-dark">Zurück</a>
</form>

</div>



@endsection
