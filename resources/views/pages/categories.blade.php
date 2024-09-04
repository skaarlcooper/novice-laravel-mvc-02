@extends('layouts.base')
@hasSection ('name')
    @section('content')
        <h1>Categories</h1>
    @endsection
@else
    <h1>Content not found</h1>
@endif
@section('title')
    Categories
@endsection
