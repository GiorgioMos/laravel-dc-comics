@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($comic->thumb)
            <img class="fumetto-img show-img" src="{{ $comic->thumb }}" alt="">
        @else
            <img class="fumetto-img show-img" src="https://i.pinimg.com/736x/e6/af/83/e6af836df0ca29f3bd0b3384c48a0b9e.jpg"
                alt="">
        @endif
        <div class="row">
            <h2>{{ $detail->title }}</h2>
        </div>
        <div class="row">
            <p>{{ $detail->description }}</p>
            <p>{{ $detail->price }}</p>
            <p>{{ $detail->sale_date }}</p>
        </div>
        <div>
            {{-- edit --}}
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-info text-white">Edit</a>

            {{-- delete --}}
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline-block">
                {{-- token anti-forgery --}}
                @csrf
                {{-- passiamo il metodo --}}
                @method('DELETE')

                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>
@endsection
