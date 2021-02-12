@extends('layouts.app')

@section('content')
</body>
<h2>Alle Dateien</h2>
<p class="sub">Hier sehen Sie alle Ihre Dateien.</p>
<table>
    <tr>
    <th>Nr.</th>
    <th>Titel</th>
    <th>Beschreibung</th>
    <th>Vorschau</th>
    <th>Download</th>
    <th>Bearbeiten </th>
    <th>Löschen</th>
    </tr>
    @foreach($file as $key=>$data)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}} </td>
        <td><a href="/files/{{$data->id}}">Vorschau</a></td>
        <td><a href="/file/download/{{$data->file}}">Download</a></td>
        <td><a href="/file/edit{{$data->id}}">Bearbeiten</a></td>
        <td><a href="/file/delete{{$data->id}}">Löschen</a></td>
    </tr>
    @endforeach
</table>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Dashboard</h1>
            @foreach($file as $key=>$data)
            <p>
        <iframe src="{{url('storage/' .$data->file)}}" style="width: 320px; height: 320px; margin-top: 3em;"></iframe>
    </p>
    @endforeach

        </div>
    </div>
</div>

</body>
@endsection
