<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VC - @yield('title', 'website')</title>
    {{-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('style')
</head>

<body>
    <header>
        @include('layouts.header')
    </header>
    <main>
        <div class="container">
            @hasSection('content')
                @yield('content')
            @else
                <h1>No content here!</h1>
            @endif
            {{-- @hasSection('sidebar')
                @yield('sidebar')
            @else
                @include('layouts.sidebar')
            @endif --}}
        </div>
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
    @stack('scripts')
</body>

</html>
