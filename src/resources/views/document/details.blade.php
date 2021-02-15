@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-9">
        <a href="/files" class="btn-link mb-3" style="color: white">❮ Zurück</a>
        <h2>{{$data->title}}</h2>
        <p>{{$data->description}}</p>
    </div>

</div>


<script type="text/javascript">
    function iframeLoaded() {
        var iFrameID = document.getElementById('iframe-asset');
        if(iFrameID) {
              // here you can make the height, I delete it first, then I make it again
              iFrameID.height = "";
              iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
        }
    }
</script>

<div class="row">
    <div class="col-8 asset-vorschau">
        <iframe id="iframe-asset" src="{{url('storage/' .$data->file)}}" onload="iframeLoaded()" class="asset-vorschau-item" frameborder="0" overflow="hidden"></iframe>
    </div>
</div>

<div class="row">
    <div class="col-md-9 col-lg-9 pull-right mt-3">
        <a href="/file/edit/{{$data->id}}" class="btn-link mr-3"><img src="{{url('img/edit.svg')}}" alt="" class="assets-list__interaction mr-2" />Bearbeiten</a>
        <a href="/file/delete/{{$data->id}}" class="btn-link mr-3"><img src="{{url('img/delete.svg')}}" alt="" class="assets-list__interaction mr-2" />Löschen</a>
        <a href="/file/metaexport/{{$data}}" class="btn-link" style="color: white"> ↝ Metaexport</a>
    </div>
    <div class="col-9 mt-5">
        <h3>Download-Optionen</h3>
        @if($data->filetype == 'jpg')
            <a href="/file/download/{{$data->file}}" class="ml-2"><button class="btn btn-dark">🡻 Original</button></a>
            <a href="/file/download-as-cmyk/{{$data->id}}" class="ml-2"><button class="btn btn-dark">🡣 CMYK</button></a>
            <a href="/file/download-as-png/{{$data->id}}" class="ml-2"><button class="btn btn-dark">🡣 PNG</button></a>
            <a href="/file/download-as-gif/{{$data->id}}" class="ml-2"><button class="btn btn-dark">🡣 GIF</button></a>
          @elseif($data->filetype == 'png')
            <a href="/file/download/{{$data->file}}" class="ml-2"><button class="btn btn-dark">🡻 Original</button></a>
            <a href="/file/download-as-cmyk/{{$data->id}}" class="ml-2"><button class="btn btn-dark">🡣 CMYK</button></a>
            <a href="/file/download-as-jpeg/{{$data->id}}" class="ml-2"><button class="btn btn-dark">🡣 JPEG</button></a>
            <a href="/file/download-as-gif/{{$data->id}}" class="ml-2"><button class="btn btn-dark">🡣 GIF</button></a>
          @elseif($data->filetype == 'gif')
            <a href="/file/download/{{$data->file}}" class="ml-2"><button class="btn btn-dark">🡻 Original</button></a>
            <a href="/file/download-as-cmyk/{{$data->id}}" class="ml-2"><button class="btn btn-dark">🡣 CMYK</button></a>
            <a href="/file/download-as-jpeg/{{$data->id}}" class="ml-2"><button class="btn btn-dark">🡣 JPEG</button></a>
            <a href="/file/download-as-png/{{$data->id}}" class="ml-2"><button class="btn btn-dark">🡣 PNG</button></a>
          @else
            <a href="/file/download/{{$data->file}}" class="ml-2"><button class="btn btn-dark">🡻 Original</button></a>
        @endif
    </div>
</div>

<style>
    .asset-vorschau {
        /* width: 800px;
        height: auto; */
    }

    .asset-vorschau-item {
        width: 100%;
        min-height: 600px;
    }
</style>

@endsection

