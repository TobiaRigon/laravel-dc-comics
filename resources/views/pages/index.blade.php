@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics: {{count($comics)}}</h1>

    <ul>
        @foreach ($comics as  $comic)

        <li>
            {{$comic -> title}}
            {{$comic -> author}}

        </li>

        @endforeach
    </ul>
@endsection
