@extends('layouts/main')

@section('content')
    <ul>
        @foreach ($comics as $comic)
            <li> <a href="{{route('single', $comic -> id)}}"> {{$comic -> title}}</a> {{$comic -> release_date}}</li>
        @endforeach
    </ul>
@endsection