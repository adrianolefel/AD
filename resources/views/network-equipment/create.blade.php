@extends('layouts.app')

@section('title', 'Create Network Equipment')

@section('contents')
    <h1 class="mb-0">Add Network Equipment</h1>
    <hr />
    <form action="{{ route('network-equipments.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="type" class="form-control" placeholder="Type">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="serial_number" class="form-control" placeholder="Serial Number">
            </div>
            <div class="col">
                <input type="text" name="model" class="form-control" placeholder="Model">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="manufacturer" class="form-control" placeholder="Manufacturer">
            </div>
            <div class="col">
                <input type="text" name="ip_address" class="form-control" placeholder="IP Address">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="mac_address" class="form-control" placeholder="MAC Address">
            </div>
            <div class="col">
                <input type="text" name="site" class="form-control" placeholder="Site">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Description">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection