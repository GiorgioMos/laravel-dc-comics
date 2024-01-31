@extends('layouts.app')

@section('content')

    <body>
        <div class="content">
            <div class="container position-relative">
                <div class="pb-5">
                    <a class="series">CURRENT SERIES</a>
                </div>
                <!-- cards -->
                <div class="d-flex flex-wrap">
                    @foreach ($comics as $comic)
                        <div class="col-2 my-3">
                            <div class="d-flex flex-column">
                                <img class="fumetto-img" src="{{ $comic->thumb }}" alt="">
                                <a class="pt-2 text">{{ strtoupper($comic->title) }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- footer --}}
        <div class="footer-top text-light">
            <div class="container d-flex justify-content-between align-items-center px-4">
                @foreach ($cards as $card)
                    <div class="my-5">
                        <img class="img-ft" src="{{ $card['img'] }}" alt="">
                        <a class="mx-2 a-ft">{{ strtoupper($card['text']) }}</a>
                    </div>
                @endforeach

            </div>
        </div>
    </body>
@endsection
