@extends('layouts.app')

@section('content')

</body>

<h2>Alle Dateien</h2>
<p class="sub">Hier sehen Sie alle Ihre Dateien.</p>

<div class="header">
  <p> Klicke auf die Buttons, um die Ansicht zu ändern.</p>
  <div class="buttons">
    <button onClick="gridopen2()" class="btn btn-dark" value="List">Listenansicht </button>
    <button onClick="gridopen()" class="btn btn-dark" value="Grid">Kachelansicht</button>
  </div>
<div>

<table ip="list">
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
<div class="row" id="grid">
<div class="col-12">
<div id="column1"
    @foreach($file as $key=>$data)
    <iframe src="{{url('storage/' .$data->file)}}" style="width: 320px; height: 320px; margin-top: 3em; padding: 5%;"></iframe>
    @endforeach
    </div>


</div>
    

<script> 
  function gridopen2(){
    document.getElementById("column1").style.width="50%";
    document.getElementById("column2").style.width="50%";
    document.getElementById("column3").style.width="50%";
    document.getElementById("column4").style.width="50%";
  

  }

  function gridopen(){
    document.getElementById("column1").style.width="100%";
    document.getElementById("column2").style.width="100%";
    document.getElementById("column3").style.width="100%";
    document.getElementById("column4").style.width="100%";
  
  }





</script>

</body>


@endsection
