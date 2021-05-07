@extends('layouts.app')

@section('title', 'I prodotti')

@section('content')
    <div class="content_text">
        <h1>Le nostre paste</h1>
    </div>
    <div class="container">
        @foreach ($formati as $tipo => $formato)
        <h1>{{$tipo}}</h1>
            <div class="container_card">
                @foreach ($formato as $key => $pasta)    
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                        <div class="layover">
                        </div>
                        <a href="{{ route('details-page', ['id' => $key] )}}">
                            {{$pasta['titolo']}}
                        </a>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection