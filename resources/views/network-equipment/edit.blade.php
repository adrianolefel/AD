@extends('layouts.app')

@section('title', 'Edit Network Equipment')

@section('contents')
    <h1 class="mb-0">Edit Network Equipment</h1>
    <hr />
    <form action="{{ route('network-equipments.update', $networkEquipment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $networkEquipment->name }}">
            </div>
            <div class="col">
                <label class="form-label">Type</label>
                <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $networkEquipment->type }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Serial Number</label>
                <input type="text" name="serial_number" class="form-control" placeholder="Serial Number" value="{{ $networkEquipment->serial_number }}">
            </div>
            <div class="col">
                <label class="form-label">Model</label>
                <input type="text" name="model" class="form-control" placeholder="Model" value="{{ $networkEquipment->model }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Manufacturer</label>
                <input type="text" name="manufacturer" class="form-control" placeholder="Manufacturer" value="{{ $networkEquipment->manufacturer }}">
            </div>
            <div class="col">
                <label class="form-label">IP Address</label>
                <input type="text" name="ip_address" class="form-control" placeholder="IP Address" value="{{ $networkEquipment->ip_address }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">MAC Address</label>
                <input type="text" name="mac_address" class="form-control" placeholder="MAC Address" value="{{ $networkEquipment->mac_address }}">
            </div>
            <div class="col">
                <label class="form-label">Site</label>
                <input type="text" name="site" class="form-control" placeholder="Site" value="{{ $networkEquipment->site }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $networkEquipment->status }}">
            </div>
            <div class="col">
                <label class="form-label">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $networkEquipment->description }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection