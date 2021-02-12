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

</body>
@endsection
