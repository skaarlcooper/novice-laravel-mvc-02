@extends('layouts.base')

@section('sidebar')
    @parent
    <h1>This is appended to the sidebar.</h1>
@endsection

@section('content')
    @php
        $users = ['haiquayxe', 'quangcu', 'vc', 'sc'];
    @endphp

    @foreach ($users as $u)
        @if ($loop->first)
            <li class="text-danger">{{ $u }}</li>
        @elseif ($loop->last)
            <li class="text-success">{{ $u }}</li>
        @else
            <li class="">{{ $u }}</li>
        @endif
    @endforeach

    <h1>Products</h1>
@endsection

@section('title')
    Products
@endsection
