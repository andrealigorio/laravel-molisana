@extends('layouts.app')

@section('title', 'I prodotti')

@section('content')
    <div class="content_text">
        <h1>Le nostre paste</h1>
    </div>
    <div class="container">
        @foreach ($paste as $pasta)
            <div class="card">
                <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                <div class="layover">
                </div>
                <span>
                    {{$pasta['titolo']}}
                </span>
            </div>
        @endforeach
    </div>
@endsection