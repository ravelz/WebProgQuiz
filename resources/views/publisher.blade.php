@extends('layouts.app')

@section('content')

<div class="container d-flex flex-column">
    <p class="h1 bg-secondary text-white">Publisher List</p>
    <div class="container d-flex flex-row flex-wrap justify-content-center">

        @foreach ($datas as $data)
          <div class="card" style="width: 18rem;">
            <img src="{{ $data->imgurl }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $data->name }}</h5>
              <p class="card-text">Address: </p>
              <p class="card-text">{{ $data->address }}</p>
              <a href="{{ route('detailpublisher', ['publisher' => $data->id]) }}" class="btn btn-primary">Detail</a>
            </div>
          </div>
        @endforeach
        
    </div>
</div>

@endsection