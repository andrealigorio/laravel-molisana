@extends('layouts.app')

@section('title', 'Dettagli')

@section('content')
    <div class="details_container">
        <h1>{{$formato['titolo']}}</h1>
        <img src="{{ $formato['src-h']}}" alt="{{ $formato['titolo']}}">
        <img src="{{ $formato['src-p']}}" alt="{{ $formato['titolo']}}">
        <div class="details_description">
            <p>{!! $formato['descrizione'] !!}</p>
        </div>
    </div>
@endsection