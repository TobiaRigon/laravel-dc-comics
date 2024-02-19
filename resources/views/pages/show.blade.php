@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="my-5 card">
                <div class="card-body">
                    <h1 class="card-title">{{$comic->title}}</h1>
                    <h3 class="card-subtitle mb-3 text-muted">by {{$comic->author}}</h3>
                    <p class="card-text">{{$comic->description}}</p>
                    <div class="card-text">Price: €{{$comic->price}}</div>
                    <a
                    href="{{route('comics.edit', $comic -> id)}}"
                    class="btn my-3 btn-success"
                    > EDIT</a> <br>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary ">Back to Index</a>
                </div>
            </div>
        </div>
    </div>

@endsection
