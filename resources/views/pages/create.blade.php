@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')

@if ( $errors->any())
<div class="alert alert-danger">
 <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
 </ul>

</div>
@endif



<div class="card my-3">

    <form
    action="{{route('comics.store')}}"
    method="POST"
    class="container"
    >

        @csrf
        @method('POST')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>

        <button type="submit" class="btn btn-primary">CREATE</button>

        <div>
            <a href="{{ route('comics.index') }}" class="btn btn-primary my-3">Back to Index</a>
        </div>

    </form>

</div>



@endsection
