@extends('layouts.app')

@section('title', 'comics')

@section('main-content')
  <section>
  
    <div class="container">
      <h1>Comics page</h1>
      <div class="row">
      @foreach($comics as $comic)
      <div class="col-2">
        <img class="img-fluid comic-thumb" src="{{$comic['thumb']}}" alt="">
        <h3>{{$comic['series']}}</h3>
      </div>

      @endforeach
      </div>
    </div>
    
  </section>
@endsection
