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
                        <div class="container container-p-y d-flex align-items-center gap-2">
                            <h1>Categories</h1>
                            <button class="dt-button create-new btn btn-primary h-75 ms-1" data-bs-target="#addNewCategory"
                                data-bs-toggle="modal" tabindex="0" type="button" style="margin-bottom: 1rem">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                        @include('category.categories-table')
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>

        <div class="drag-target"></div>
        @include('category.add-category')
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/app-academy-course.js') }}"></script>
@endsection
