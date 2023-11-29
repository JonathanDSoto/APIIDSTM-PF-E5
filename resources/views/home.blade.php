@extends('layouts.auth')
@section('title')
    Home
@endsection
@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.menu')
            <div class="layout-page">
                @include('layouts.navbar')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @include('layouts.table')
                        <x-widget-card />
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>

        <div class="drag-target"></div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/app-academy-course.js') }}"></script>
@endsection
