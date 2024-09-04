@extends('layouts.base')
@section('content')
    <h2>Test invokable</h2>
@endsection
{{-- @section('content')
    <h2>aloha</h2>
    @if (isset($context) && !empty($context))
        <h1 class="text-success">{{ $context }}</h1>
    @else
        <h3 class="text-danger">nothing happend!</h3>
    @endif
@endsection
@php
    $id = 123;
@endphp

@section('sidebar')
    @parent
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('blog') }}">Blog</a>
    <a href="{{ route('user', compact('id')) }}">User</a>
@endsection --}}

{{-- @extends('layouts.base')
@section('content')
    @forelse ($names as $id => $item)
        <a href="{{ route('user', $id) }}">
            <div class="wrap">
                <h1 class="text-warning">
                    Name:
                    <code>{{ $item['name'] }}</code>
                </h1>
                <h1 class="text-success">
                    Phone:
                    <code>{{ $item['phone'] }}</code>
                </h1>
                <h1 class="text-primary">
                    City:
                    <code>{{ $item['city'] }}</code>
                </h1>

            </div>
        </a>
    @empty
        <h1 class="text-danger">No thing here! Please comeback!</h1>
    @endforelse
@endsection

@php
    $user = 'hello Hai';
    $fruits = [
        'apple 1',
        'apple 2',
        'apple 3',
        'apple 4',
        'apple 5',
        'apple 6',
        'apple 7',
        'apple 8',
        'apple 9',
        'apple 10',
        'apple 11',
        'apple 12',
        'apple 13',
        'apple 14',
        'apple 15',
        'apple 16',
        'apple 17',
        'apple 18',
        'apple 19',
        'apple 20',
        'apple 21',
        'apple 22',
        'apple 23',
        'apple 24',
        'apple 25',
        'apple 26',
        'apple 27',
        'apple 28',
        'apple 29',
        'apple 30',
        'apple 31',
        'apple 32',
        'apple 33',
        'apple 34',
        'apple 35',
        'apple 36',
        'apple 37',
        'apple 38',
        'apple 39',
        'apple 40',
        'apple 41',
        'apple 42',
        'apple 43',
        'apple 44',
        'apple 45',
        'apple 46',
        'apple 47',
        'apple 48',
        'apple 49',
        'apple 50',
    ];
@endphp

@push('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        const fruits = @json($fruits);
        fruits.forEach(e => console.log(e));
    </script>
@endpush

@push('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@prepend('style')
    <style>
        .container {
            background: "red !important";
        }
    </style>
@endprepend --}}
