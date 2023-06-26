@extends('layout')

@section('content')

<h1>{{$heading}}</h1>

@if(!$listing)
    <p>Listing not found</p>
@else
    <h2>
        {{$listing['title']}}
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endif

@endsection