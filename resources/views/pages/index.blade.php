@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="mb-4">Comics: {{ count($comics) }}</h1>
            <a href="{{ route('comics.create') }}" class="my-3 btn btn-primary">Create</a>
            <ul class="list-group">
                @foreach ($comics as $comic)
                <li class="list-group-item">
                    <a class="btn my-3 btn-outline-dark btn-lg" href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                    <br>
                    <a
                    href="{{route('comics.edit', $comic -> id)}}"
                    class="btn btn-success"
                    > EDIT</a>
                    <form
                    class="d-inline-block "
                    action="{{route ('comics.destroy', $comic -> id)}}"
                    method="POST"
                    >
                    @csrf
                    @method('DELETE')


                        <input class="btn btn-danger" type="submit" value="X">
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
