<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    {{-- style --}}
    @include('layouts.style')

    @livewireStyles
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        {{-- navbar --}}
        @include('layouts.navbar')

        {{-- sidebar --}}
        @include('layouts.sidebar')

        {{-- load content livewire from views --}}
        @yield('content')

        {{-- footer --}}
        @include('layouts.footer')
    </div>
    <!-- ./wrapper -->

    {{-- script --}}
    @include('layouts.script')

    @livewireScripts
</body>

</html>
