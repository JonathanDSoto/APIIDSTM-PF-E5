@extends('layouts.auth') @section('title') Categories @endsection
@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('layouts.menu')
        <div class="layout-page">
            @include('layouts.navbar')

            <div class="container-xxl container-p-y">
                <h1>Categories</h1>
                @include('category.categories-table')
            </div>
        </div>
    </div>

    {{-- Modal  delete --}}
    @include('client.delete-user')
    {{-- Modal  delete --}}

    {{-- Modal  edit --}}
    @include('client.edit-user')
    {{-- Modal  edit --}}

    {{-- Modal create --}}
    @include('client.add-user')
    {{-- Modal create --}}
</div>
@endsection @section('scripts') @endsection
