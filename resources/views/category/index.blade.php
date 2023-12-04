@extends('layouts.auth')

@section('title')
    Categories
@endsection

@section('content')
<div class="container container-p-y d-flex align-items-center gap-2">
    <h1>Categories</h1>
    <button
        class="dt-button create-new btn btn-primary h-75 ms-1"
        data-bs-target="#addNewCategory"
        data-bs-toggle="modal"
        data-type="Category"
        tabindex="0"
        type="button"
        style="margin-bottom: 1rem"
    >
        <i class="ti ti-plus"></i>
    </button>
</div>

<div class="content-backdrop fade"></div>

<x-validation-errors />

@include('category.categories-table')

<div class="layout-overlay layout-menu-toggle"></div>

<div class="drag-target"></div>

<x-delete-modal message="Are you sure to delete this category?" />

@include('category.add-category')
@include('category.edit-category')
@endsection

@section('scripts')
<script src="{{ asset('assets/js/add-button.js') }}"></script>
<script>
    $("#modalDelete").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var elementId = button.data("elementId");
        var elementDeleteRoute = button.data("element-delete-route");
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
