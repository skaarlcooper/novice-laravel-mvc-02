@extends('layouts.base')
@section('content')
    @if ($id)
        <h1 class="text-success">User id: {{ $id }}</h1>
        @if ($user)
            <h1 class="text-primary">User name: {{ $user['name'] }}</h1>
            <h1 class="text-primary">User phone: {{ $user['phone'] }}</h1>
            <h1 class="text-primary">User city: {{ $user['city'] }}</h1>
        @else
            <h1 class="text-danger">No one found yet!</h1>
        @endif
    @else
        <h1 class="text-danger">No one found yet!</h1>
    @endif
@endsection
