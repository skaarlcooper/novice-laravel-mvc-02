@extends('layouts.base')
@section('content')
    <h1>aloha</h1>
    @verbatim
        <div id="app">{{ message }}</div>
    @endverbatim
@endsection
@section('title')
    Home
@endsection

@push('scripts')
    <script>
        console.log(aloha);
    </script>
@endpush

@prepend('scripts')
    <script>
        let message = "Voila";
        let aloha = "Aloha";
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        < /link> <
        script src = "https://unpkg.com/vue@3/dist/vue.global.js" >
    </script>


    <script>
        const {
            createApp,
            ref
        } = Vue

        createApp({
            setup() {
                const message = ref('Euruka!')
                return {
                    message
                }
            }
        }).mount('#app')
    </script>
@endprepend

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush --}}

@push('style')
    <style>
        .container {
            color: blue;
        }
    </style>
@endpush

@prepend('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
@endprepend
