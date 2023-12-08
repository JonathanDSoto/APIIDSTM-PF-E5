@extends('layouts.auth')

@section('title')
    Detalles del servicio
@endsection

@section('content')
    @include('layouts.service-details')
    <div class="content-backdrop fade"></div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
@endsection
