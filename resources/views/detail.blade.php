@extends('layouts.app')

@section('content')
@foreach ($book as $data)
    <div class="container d-flex flex-column">
        <p class="h1 bg-secondary text-white">Book List</p>
        <div class="container d-flex flex-row justify-content-center">
            <div class="card">
                <img src="{{ $data->imgurl }}" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-title">Title : {{ $data->title }}</p>
                <p class="card-title">Author : {{ $data->author }}</p>
                <p class="card-title">Publisher : {{ $data->name }}</p>
                <p class="card-title">Year : {{ $data->title }}</p>
                <p class="card-title">Synopsis :</p>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                
                </div>
            </div>
        </div>
    </div>
@endforeach


@endsection