@extends('layouts.auth')

@section('title')
    Categories
@endsection

@section('content')
    <h1>Categories</h1>
    @include('category.categories-table')

    {{-- Modal  delete --}}
    @include('client.delete-user')
    {{-- Modal  delete --}}

    {{-- Modal  edit --}}
    @include('client.edit-user')
    {{-- Modal  edit --}}

    {{-- Modal create --}}
    @include('client.add-user')
    {{-- Modal create --}}
@endsection
