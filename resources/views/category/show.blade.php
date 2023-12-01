@extends('layouts.auth')

@section('title')
    Services
@endsection

@section('content')
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
        <div class="row row-cols-3 gap-3 justify-content-center">
            @foreach ($category->services as $service)
                <x-generic-card
                    title="{{ $service->name }}"
                    description="{{ $service->resume }}"
                    price="{{ $service->adultPrice }}"
                    imagePath=""
                    route="{{ route('service.show', $service->id) }}"
                    idElement="{{ $service->id }}"
                    routeDelete="service.destroy"
                    routeEdit="service.update"
                />
            @endforeach
            @if(count($category->services) === 0)
                <p>No hay servicios disponibles</p>
            @endif
        </div>
    </div>
    <div class="content-backdrop fade"></div>
    <x-delete-modal
        message="Are you sure to delete this service?"
    />
    @include('services.add-service')
    @include('services.edit-service')
@endsection

@section('scripts')
    <script>
        $("#modalDelete").on("show.bs.modal", function (event) {
            var button = $(event.relatedTarget);
            var elementId = button.data('elementId');
            var elementDeleteRoute = button.data('element-delete-route');
            $("#modalDelete").attr("action", elementDeleteRoute);
        });
    </script>
    <script>
        $("#modalEdit").on("show.bs.modal", function (event) {
            var button = $(event.relatedTarget);
            var elementId = button.data("elementId");
            var elementEditRoute = button.data("element-edit-route");
            $("#modalEdit").attr("action", elementEditRoute);
        });
    </script>
@endsection
