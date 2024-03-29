@extends('layouts/mainLayout')

@section('content')
    <div class="container">
        @foreach ($movies as $singleMovie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$singleMovie->title}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$singleMovie->original_title}}</h6>
              <p class="card-text">Nationality: {{$singleMovie->nationality}}</p>
              <p>Date: {{$singleMovie->date}}</p>
              <p>Vote: {{$singleMovie->vote}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection