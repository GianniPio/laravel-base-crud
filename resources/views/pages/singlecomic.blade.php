@extends('layouts/main')

@section('content')
    <h1>{{$comic -> title}} ({{$comic -> pages}} pages)</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis odit deleniti beatae amet facere numquam explicabo libero exercitationem necessitatibus porro, eaque nemo eos repudiandae tempore suscipit aliquid! Ipsam, aliquid molestiae.</p>
    <h6>The author is {{$comic -> author}} in {{$comic -> release_date}} </h6>

    <a href="{{route('home')}}">Back</a>
@endsection