@extends('layouts.app')

@section('content')

<h2>Asset bearbeiten Nr.{{ $data->id }}</h2>

<div class="col-sm-8 col-sm-offset-2">

<form action="{{ route('update', ['id'=>$data->id]) }}" method="post">

{{ csrf_field() }}
@method('PUT')
<p>
<iframe class="center" src="{{url('storage/' .$data->file)}}" style="width: 320px; height: 320px; position: center; margin-top: 3em;"></iframe>
    </p>
<input type="hidden" name="_method" value="PUT">

<div class="form-group">
<label for="title">Assetname </label>
<input name="title" type="text" class="form-control" value="{{ $data->title }}">
</div>

<div class="form-group">
<label for="description">Beschreibung</label>
<textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $data->description}}</textarea>
</div>

<select name="kategorie" id="kategorie" placeholder="Kategorie auswählen">
        <option value="" disabled selected>"{{ $data->kategorie }}"</option>
        <option value="Architektur">Arschitektur</option>
        <option value="Landschaft">Landschaft</option>
        <option value="Menschen">Menschen & Gesellschaft</option>
        <option value="Tiere">Tiere</option>
        <option value="Meme">Meme</option>
        <option value="Sonstige">Sonstige</option>
        </select>

<input type="hidden" name="editForm" value="editForm">


<button type="submit" class="btn btn-dark">Änderungen speichern</button>
<button class="btn btn-dark back-button"><a href="{{ route ('view') }}">Zurück</a></button>

</form>

</div>



@endsection
