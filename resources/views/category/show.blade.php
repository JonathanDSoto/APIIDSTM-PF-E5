@extends('layouts.auth') @section('title') Services @endsection
@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('layouts.menu')
        <div class="layout-page">
            @include('layouts.navbar')
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div
                        class="container container-p-y d-flex align-items-center gap-2"
                    >
                        <h1>{{ $category->name }} / Services</h1>
                        <button
                            class="dt-button create-new btn btn-primary h-75 ms-1"
                            data-bs-target="#addNewService"
                            data-bs-toggle="modal"
                            tabindex="0"
                            type="button"
                            style="margin-bottom: 1rem"
                        >
                            <i class="ti ti-plus"></i>
                        </button>
                    </div>
                    <div class="container">
                        <x-validation-errors />
                        <div class="row row-cols-3 gap-3">
                            @foreach ($category->services as $service)
                            <x-generic-card
                                title="{{ $service->name }}"
                                description="{{ $service->resume }}"
                                price="{{ $service->adultPrice }}"
                                imagePath=""
                                route="{{ route('service.show', $service->id) }}"
                            />
                            @endforeach @if(count($category->services) === 0)
                            <p>No hay servicios disponibles</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="content-backdrop fade"></div>
                @include('services.add-service')
            </div>
        </div>
    </div>
    @endsection
</div>
