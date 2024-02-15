@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">{{$comic->title}}</h1>
                    <h3 class="card-subtitle mb-3 text-muted">by {{$comic->author}}</h3>
                    <p class="card-text">{{$comic->description}}</p>
                    <div class="card-text">Price: €{{$comic->price}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection