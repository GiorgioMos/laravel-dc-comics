@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $detail->title }}</h2>
        </div>
        <div class="row">
            <p>{{ $detail->description }}</p>
            <p>{{ $detail->price }}</p>
            <p>{{ $detail->sale_date }}</p>
        </div>
    </div>
@endsection
