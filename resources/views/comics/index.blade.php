@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Comics</h2>
        </div>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4 pb-4 w-25 h-25">
                    <div class="card" style="height: 100%;">
                        @if ($comic->thumb)
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        @else
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        @endif
                        <div class="card-body">
                            <p class="card-text">
                                Title: {{ $comic->title }}<br>
                            <p>{{ $comic->series }}</p>
                            </p>
                        </div>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Mostra Dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection




<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        margin: 3% 0;
    }

    img {
        width: 150px;
        height: 400px;
        margin-bottom: 60px
    }

    .card {
        border: 0px;
    }
</style>
