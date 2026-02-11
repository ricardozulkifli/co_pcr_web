<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials.home.head')
    @stack('styles')
</head>
<body>

    @include('partials.home.spinner')
    @include('partials.home.navbar')

    <main class="wrap">
        @yield('content')
    </main>

    @include('partials.home.footer')
    @include('partials.home.scripts')
    @stack('scripts')

</body>
</html>
