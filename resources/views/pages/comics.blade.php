@extends('layouts.app')

@section('title', 'comics')

@section('main-content')
  <section>
    <div class="container">
      <div class="row">
      @foreach($comics as $comic)
      <div class="col-2">
        <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
        <h2>{{$comic['series']}}</h2>
      </div>

      @endforeach
      </div>
    </div>
  </section>
@endsection
