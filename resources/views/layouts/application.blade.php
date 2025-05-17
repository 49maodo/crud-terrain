@include('layouts.navbar')

<main class="flex-shrink-0">
    <div class="container">
        @yield('content')   
    </div>
</main>

@include('layouts.footer')