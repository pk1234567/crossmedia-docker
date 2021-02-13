@extends('layouts.app')

@section('content')

</body>

<h2>Ihre Suchergebnisse</h2>
<p class="sub">Hier sehen Sie alle Ergebnisse</p>

<form class="form-inline my-2 my-lg-0" type="get" action=" {{ url('suche') }} ">
<input class="form-control mr-sm-2" name="query" type="search" placeholder="Suche">
<button class="btn btn-dark my-2 my-sm-0" type="submit">Suchen</button>
</form>

<div class="header">
  <p> Klicke auf die Buttons, um die Ansicht zu ändern.</p>
  <div class="buttons">
    <button onClick="einblenden()" class="btn btn-dark" value="List">Listenansicht </button>
    <button onClick="ausblenden()" class="btn btn-dark" value="Grid">Kachelansicht</button>
  </div>
<div>

<div class="list" id="liste">
<table>
    <tr>
    <th>Nr.</th>
    <th>Titel</th>
    <th>Beschreibung</th>
    <th>Kategory</th>
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
        <td>{{$data->kategorie}} </td>
        <td><a href="/files/{{$data->id}}">Vorschau</a></td>
        <td><a href="/file/download/{{$data->file}}">Download</a></td>
        <td><a href="/file/edit{{$data->id}}">Bearbeiten</a></td>
        <td><a href="/file/delete{{$data->id}}">Löschen</a></td>
    </tr>
    @endforeach
</table>
</div>

<div class="container">
<div class="row" id="grid">
<div class="col-12">
<div id="column1">
    @foreach($file as $key=>$data)
    <iframe src="{{url('storage/' .$data->file)}}" style="width: 320px; height: 320px; margin-top: 3em; padding: 5%;"></iframe>
    @endforeach
    </div>
    </div>
    </div>
</div>


<script type="text/javascript">

document.getElementById('grid').style.display='none';

  function einblenden() {
    document.getElementById('liste').style.display='block';
    document.getElementById('grid').style.display='none';
  }

  function ausblenden() {
    document.getElementById('liste').style.display='none';
    document.getElementById('grid').style.display='block';
  }

</script>

</body>


@endsection
