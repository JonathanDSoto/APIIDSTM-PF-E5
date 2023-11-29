@extends('layouts.auth') @section('title') Clients @endsection
@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('layouts.menu')
        <div class="layout-page">
            @include('layouts.navbar')

            <div class="container-xxl flex-grow-1 container-p-y">
                <h1>Clients</h1>

                <div class="card container table-data my-5 p-3">
                    <div
                        class="container container-p-y d-flex justify-content-between gap-2"
                    >
                        <div>
                            <select
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected value="5">5</option>
                                <option value="15">15</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                            />
                        </div>
                        <button
                            class="dt-button create-new btn btn-primary"
                            aria-controls="DataTables_Table_0"
                            tabindex="0"
                            type="button"
                        >
                            <i class="ti ti-plus"></i>
                        </button>
                    </div>
                    <div class="card-datatable overflow-auto">
                        <table class="table table-hover">
                            <thead class="table-border-bottom-0">
                                <tr>
                                    <th>
                                        <input
                                            type="checkbox"
                                            name="all"
                                            id="all"
                                        />
                                    </th>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input
                                            type="checkbox"
                                            name="all"
                                            id="all"
                                        />
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <a href="{{ route('client.show', 1) }}">
                                            Angel Daniel
                                        </a>
                                    </td>
                                    <td>Almanza Trejo</td>
                                    <td>trejo@gmail.com</td>
                                    <td>
                                        <div class="actions d-flex gap-2">
                                            <button
                                                type="button"
                                                class="btn btn-danger p-2"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalDelete"
                                            >
                                                <i class="ti ti-trash"></i>
                                            </button>
                                            <button
                                                type="button"
                                                class="btn btn-primary p-2"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalEdit"
                                            >
                                                <i class="ti ti-pencil"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal  delete -->
    @include('client.delete-user')

    <!-- /Modal delete -->

    <!-- Modal  edit -->
    @include('client.edit-user')

    <!-- /Modal edit -->

    <!-- Create new user -->
    @include('client.add-user')

    <!-- /Create new user -->
</div>
<script src="{{ asset('assets/js/table-clients.js') }}"></script>
@endsection
