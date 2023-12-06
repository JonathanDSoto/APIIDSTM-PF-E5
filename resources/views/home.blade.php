@extends('layouts.auth') @section('title') Home @endsection @section('content')

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h1>Dashboard</h1>
                    <div class="container">@include('layouts.dashboard')</div>
                </div>
            </div>
        </div>
    </div>
    @endsection @section('scripts') @endsection
</div>
