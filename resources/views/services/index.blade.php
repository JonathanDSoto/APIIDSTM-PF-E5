@extends('layouts.auth')
@section('title')
    Servicios
@endsection
@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.menu')
            <div class="layout-page">
                @include('layouts.navbar')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h1>Service/Test</h1>
                        <div class="container">
                            <div class="row row-cols-3 gap-3">
                                <x-service-card
                                    title="Change the engine oil"
                                    description="Replacing engine oil is crucial to maintaining high performance."
                                    price="350"
                                />
                                <x-service-card
                                    title="Change the engine oil"
                                    description="Replacing engine oil is crucial to maintaining high performance."
                                    price="350"
                                />
                                <x-service-card
                                    title="Change the engine oil"
                                    description="Replacing engine oil is crucial to maintaining high performance."
                                    price="350"
                                />
                                <x-service-card
                                    title="Change the engine oil"
                                    description="Replacing engine oil is crucial to maintaining high performance."
                                    price="350"
                                />
                                <x-service-card
                                    title="Change the engine oil"
                                    description="Replacing engine oil is crucial to maintaining high performance."
                                    price="350"
                                />
                                <x-service-card
                                    title="Change the engine oil"
                                    description="Replacing engine oil is crucial to maintaining high performance."
                                    price="350"
                                />
                                <x-service-card
                                    title="Change the engine oil"
                                    description="Replacing engine oil is crucial to maintaining high performance."
                                    price="350"
                                />
                                <x-service-card
                                    title="Change the engine oil"
                                    description="Replacing engine oil is crucial to maintaining high performance."
                                    price="350"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>
        </div>
    </div>
@endsection
