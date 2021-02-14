@extends('layouts.app')

@section('content')


</body>

<style>
  #suche {
    position: absolute;
    top: 10em;
    right: 9em;
  }
</style>

<h2>Alle Dateien</h2>
<p class="sub">Hier sehen Sie alle Ihre Dateien.</p>

<form id='suche' class="form-inline my-2 my-lg-0" type="get" action=" {{ url('suche') }} ">
<input class="form-control mr-sm-2" name="query" type="search" placeholder="Suche">
<button class="btn btn-dark my-2 my-sm-0" type="submit">Suchen</button>
</form>

<div class="header">
  <div class="buttons">
    <button onClick="einblenden()" class="btn btn-dark" value="List" style="margin-bottom: 2em;">Listenansicht</button>
    <button onClick="ausblenden()" class="btn2 btn btn-dark" value="Grid" style="margin-bottom: 2em;">Kachelansicht</button>
  </div>
<div>

<div class="list" id="liste">
<table>
    <tr>
    <th>Nr.</th>
    <th>Titel</th>
    <th>Beschreibung</th>
    <th>Kategorie</th>
    <th>Filetype</th>
    <th>Vorschau</th>
    <th>Download</th>
    <th>Bearbeiten</th>
    <th>Löschen</th>
    <th>cmyk</th>
    <th>filesize</th>
    </tr>
    @foreach($file as $key=>$data)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}} </td>
        <td>{{$data->kategorie}} </td>
        <td>{{$data->filetype}} </td>
        <td><a href="/files/{{$data->id}}">Vorschau</a></td>
        <td><a href="/file/download/{{$data->file}}">Download</a></td>
        <td><a href="/file/edit/{{$data->id}}">Bearbeiten</a></td>
        <td><a href="/file/delete/{{$data->id}}">Löschen</a></td>
        <td><a href="/file/download-as-cmyk/{{$data->id}}">CMYK</a></td>
        <td>{{$data->filesize/1000000}} mb</td>
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

{{ $file->links()}}

<div class="container" name='filter'>
<form class="form-inline" id='filter' method="GET" action=" {{ url('suche') }} ">
<select class ="form-control filter-select" name="query" id="query" >
        <option value="" disabled selected>Nach Kategorien Filtern</option>
       @foreach ($file as $key=>$data)
        <option name='query' value={{ $data->kategorie }}>{{ $data->kategorie }}</option>
        @endforeach
        </select>
        <select class ="form-control filter-select" name="query" id="query" >
        <option value="" disabled selected>Nach Filetypen Filtern</option>
       @foreach ($file as $key=>$data)
        <option name='query' value={{ $data->filetype }}>{{ $data->filetype }}</option>
        @endforeach
        </select>
        <button type="submit" class="btn btn-dark mb-2">Filtern</button>
        </form>
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

<style>
  .btn2 {
    background-color: #393a41 !important;
    color: #eccfe3 !important;
  }
</style>

</body>


@endsection
