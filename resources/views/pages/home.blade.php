@extends('layouts/main')

@section('content')
    <h3>List of comics</h3>
    <ul>
        @foreach ($comics as $comic)
            <li> <a href="{{route('single', $comic -> id)}}"> {{$comic -> title}}</a> {{$comic -> release_date}}</li>
        @endforeach
    </ul>
@endsection