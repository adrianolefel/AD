@extends('layouts.app')

@section('title', 'Edit Computer')

@section('contents')
    <h1 class="mb-0">Edit Computer</h1>
    <hr />
    <form action="{{ route('computers.update', $computer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $computer->name }}">
            </div>
            <div class="col">
                <label class="form-label">User</label>
                <input type="text" name="user" class="form-control" placeholder="User" value="{{ $computer->user }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Status</label>
                <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $computer->status }}">
            </div>
            <div class="col">
                <label class="form-label">Site</label>
                <input type="text" name="site" class="form-control" placeholder="Site" value="{{ $computer->site }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Manufacturers</label>
                <input type="text" name="manufacturers" class="form-control" placeholder="Manufacturers" value="{{ $computer->manufacturers }}">
            </div>
            <div class="col">
                <label class="form-label">Model</label>
                <input type="text" name="model" class="form-control" placeholder="Model" value="{{ $computer->model }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">RAM</label>
                <input type="text" name="ram" class="form-control" placeholder="RAM" value="{{ $computer->ram }}">
            </div>
            <div class="col">
                <label class="form-label">Storage</label>
                <input type="text" name="storage" class="form-control" placeholder="Storage" value="{{ $computer->storage }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Processor</label>
                <input type="text" name="processor" class="form-control" placeholder="Processor" value="{{ $computer->processor }}">
            </div>
            <div class="col">
                <label class="form-label">Computer SN</label>
                <input type="text" name="computer_sn" class="form-control" placeholder="Computer SN" value="{{ $computer->computer_sn }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Operating_s</label>
                <input type="text" name="operating_s" class="form-control" placeholder="Operating_s">{{ $computer->operating_s }}
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
