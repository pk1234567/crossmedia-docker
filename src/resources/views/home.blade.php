@extends('layouts.app')

@section('content')
<div class= "col-md-9 col-lg-9 pull-right">

<h2>{{ __('Dashboard') }}</h2>

<p>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged in!') }}
</p>
<button class="btn btn-dark"><a href="/files" style="color:white">Zur Datei-Übersicht</a></button>
    <button class="btn btn-dark"><a href="/files/create" style="color:white">Datei hochladen</a></button>
</div>

    

@endsection
