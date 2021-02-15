@extends('layouts.app')

@section('content')


<h2>Suchergebnisse</h2>

<div class="row">
  <div class="col-6">
    <form id='suche' class="form-inline my-lg-0" type="get" action=" {{ url('suche') }} ">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Suche" style="width: 400px;">
      <button class="btn btn-dark my-sm-0" type="submit">Suchen</button>
    </form>
  </div>
  <div class="col-4 ">
    <div class="buttons float-right" style="transform: translateX(-60px);">
      <button onClick="einblenden()" class="btn-assets-format" value="List"><img src="img\list.svg" alt="" class="btn-assets-format-icon" /></button>
      <button onClick="ausblenden()" class="btn-assets-format" value="Grid"><img src="img\grid.svg" alt="" class="btn-assets-format-icon" /></button>
    </div>
  </div>
</div>

<div class="row mt-4 mb-5">
  <div class="col-5">
    <div name='filter' style="float: left;">
      <form class="form-inline" id='filter' method="GET" action=" {{ url('suche') }} ">
        <select class ="form-control filter-select" name="query" id="query" >
          <option value="" disabled selected>Nach Kategorien Filtern</option>
          @foreach ($kategorie as $kat)
              <option name='query' value={{ $kat }}>{{ $kat }}</option>
            @endforeach
        </select>
        <select class ="form-control filter-select" name="query" id="query" style="margin-left: 1em">
          <option value="" disabled selected >Nach Filetypen Filtern</option>
          @foreach ($filetype as $filet)
            <option name='query' value={{ $filet}}>{{ $filet }}</option>
          @endforeach
        </select>
        <button type="submit" class="btn btn-dark my-sm-0" style="margin-left: 1em">Filtern</button>
      </form>
    </div>
  </div>
</div>

<div class="list" id="liste">
  <table>
      <tr>
        {{-- <th>Nr.</th> --}}
        <th></th>
        <th>Titel</th>
        <th>Beschreibung</th>
        <th>Kategorie</th>
        <th>Filetype</th>
        <th>filesize</th>
        <th>Download-Optionen</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>

      {{-- Wieso zum Teufel funzt hier das ODER || Statement nicht? die arme foreach muss auch noch if-cases bearbeiten. --}}
      @foreach($file as $key=>$data)

      <tr>
        {{-- <td>{{++$key}}</td> --}}
        <td>
          @if($data->filetype == 'jpg')
            <img src="img\image.svg" alt="" class="assets-list__item" />
          @elseif($data->filetype == 'png')
          <img src="img\image.svg" alt="" class="assets-list__item" />
          @elseif($data->filetype == 'gif')
          <img src="img\image.svg" alt="" class="assets-list__item" />
          @elseif($data->filetype == 'mp4')
            <img src="img\video.svg" alt="" class="assets-list__item" />
          @elseif($data->filetype == 'wav')
            <img src="img\video.svg" alt="" class="assets-list__item" />
          @elseif($data->filetype == 'avi')
            <img src="img\video.svg" alt="" class="assets-list__item" />
          @else
            <img src="img\docs.svg" alt="" class="assets-list__item" />
          @endif
        </td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}} </td>
        <td>{{$data->kategorie}} </td>
        <td>{{$data->filetype}} </td>
        <td>{{$data->filesize/1000000}} mb</td>
        <td>
        @if($data->filetype == 'jpg')
            <a href="/file/download/{{$data->file}}" class="ml-2">🡻</a>
            <a href="/file/download-as-cmyk/{{$data->id}}" class="ml-2">🡣 CMYK</a>
            <a href="/file/download-as-png/{{$data->id}}" class="ml-2">🡣 PNG</a>
            <a href="/file/download-as-gif/{{$data->id}}" class="ml-2">🡣 GIF</a>
          @elseif($data->filetype == 'png')
            <a href="/file/download/{{$data->file}}" class="ml-2">🡻</a>
            <a href="/file/download-as-cmyk/{{$data->id}}" class="ml-2">🡣 CMYK</a>
            <a href="/file/download-as-jpeg/{{$data->id}}" class="ml-2">🡣 JPEG</a>
            <a href="/file/download-as-gif/{{$data->id}}" class="ml-2">🡣 GIF</a>
          @elseif($data->filetype == 'gif')
            <a href="/file/download/{{$data->file}}" class="ml-2">🡻</a>
            <a href="/file/download-as-cmyk/{{$data->id}}" class="ml-2">🡣 CMYK</a>
            <a href="/file/download-as-jpeg/{{$data->id}}" class="ml-2">🡣 JPEG</a>
            <a href="/file/download-as-png/{{$data->id}}" class="ml-2">🡣 PNG</a>
          @else
            <a href="/file/download/{{$data->file}}" class="ml-2">🡻</a>
          @endif
        </td>
        <td><a href="/files/{{$data->id}}"><img src="img\eye.svg" alt="" class="assets-list__interaction" /></a></td>
        <td><a href="/file/edit/{{$data->id}}"><img src="img\edit.svg" alt="" class="assets-list__interaction" /></a></td>
        <td><a href="/file/delete/{{$data->id}}"><img src="img\delete.svg" alt="" class="assets-list__interaction" /></a></td>
      </tr>
      @endforeach

  </table>
</div>

  <div class="row" id="grid">
    <div class="col-12">
      <div id="column1" class="assets-grid">
          @foreach($file as $key=>$data)


            @if($data->filetype == 'jpg')
              <a href="/files/{{$data->id}}">
                <div class="assets-grid__item-wrapper">
                    <div class="assets-grid__item-info">
                      {{$data->filetype}}, {{$data->filesize/1000000}} mb
                    </div>
                    <img src="{{url('storage/' .$data->file)}}" alt="" class="assets-grid__item"/>
                  <div class="assets-grid__item-title">{{$data->title}}</div>
                </div>
              </a>
            @elseif($data->filetype == 'png')
              <a href="/files/{{$data->id}}">
                <div class="assets-grid__item-wrapper">
                    <div class="assets-grid__item-info">
                      {{$data->filetype}}, {{$data->filesize/1000000}} mb
                    </div>
                    <img src="{{url('storage/' .$data->file)}}" alt="" class="assets-grid__item"/>
                  <div class="assets-grid__item-title">{{$data->title}}</div>
                </div>
              </a>
            @elseif($data->filetype == 'gif')
              <a href="/files/{{$data->id}}">
                <div class="assets-grid__item-wrapper">
                    <div class="assets-grid__item-info">
                      {{$data->filetype}}, {{$data->filesize/1000000}} mb
                    </div>
                    <img src="{{url('storage/' .$data->file)}}" alt="" class="assets-grid__item"/>
                  <div class="assets-grid__item-title">{{$data->title}}</div>
                </div>
              </a>
            @elseif($data->filetype == 'mp4')
              <a href="/files/{{$data->id}}">
                <div class="assets-grid__item-wrapper">
                  <div class="assets-grid__item-info">
                    {{$data->filetype}}, {{$data->filesize/1000000}} mb
                  </div>
                    <img src="img\video.svg" alt="" class="assets-grid__item" style="height: 200px; padding: 25px;"/>
                  <div class="assets-grid__item-title">{{$data->title}}</div>
                </div>
              </a>
            @elseif($data->filetype == 'wav')
              <a href="/files/{{$data->id}}">
                <div class="assets-grid__item-wrapper">
                  <div class="assets-grid__item-info">
                    {{$data->filetype}}, {{$data->filesize/1000000}} mb
                  </div>
                    <img src="img\video.svg" alt="" class="assets-grid__item" style="height: 200px; padding: 25px;"/>
                  <div class="assets-grid__item-title">{{$data->title}}</div>
                </div>
              </a>
            @elseif($data->filetype == 'avi')
              <a href="/files/{{$data->id}}">
                <div class="assets-grid__item-wrapper">
                  <div class="assets-grid__item-info">
                    {{$data->filetype}}, {{$data->filesize/1000000}} mb
                  </div>
                    <img src="img\video.svg" alt="" class="assets-grid__item" style="height: 200px; padding: 25px;"/>
                  <div class="assets-grid__item-title">{{$data->title}}</div>
                </div>
              </a>
            @else
              <a href="/files/{{$data->id}}">
                <div class="assets-grid__item-wrapper">
                  <div class="assets-grid__item-info">
                    {{$data->filetype}}, {{$data->filesize/1000000}} mb
                  </div>
                    <img src="img\docs.svg" alt="" class="assets-grid__item" style="height: 200px; padding: 25px;"/>
                  <div class="assets-grid__item-title">{{$data->title}}</div>
                </div>
              </a>
            @endif
          @endforeach
        </div>
      </div>
    </div>


    <div class="mt-4">
        {{ $file->links()}}
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
