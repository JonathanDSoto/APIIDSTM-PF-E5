<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-wide customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="vertical-menu-template"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
            rel="stylesheet"
        />

        {{-- Icons --}}
        <link
            rel="stylesheet"
            href="{{asset('assets/vendor/fonts/fontawesome.css')}}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendor/fonts/flag-icons.css') }}"
        />

        {{-- Core CSS --}}
        <link
        rel="stylesheet"
        href="{{asset('assets/vendor/css/rtl/core.css')}}"
        class="template-customizer-core-css"
        />

        {{-- Page Styles --}}
        <link
            rel="stylesheet"
            href="{{asset('assets/vendor/css/pages/page-auth.css')}}"
        />

        {{-- <Helpers --}}
        <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
        <script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script>
        <script src="{{asset('assets/js/config.js')}}"></script>

        {{-- Extras CSS --}}
        @yield('css')

        <!-- Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                @include('layouts.menu')
                <div class="layout-page">
                    @include('layouts.navbar')
                    <div class="content-wrapper">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
    @include('layouts.scripts')
    @yield('scripts')
    <script>
        document.getElementById('hamburger-button').addEventListener('click', function() {
            document.getElementById('layout-menu').classList.toggle('show-menu');
        });
    </script>
</html>
