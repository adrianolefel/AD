@extends('layouts.app')

@section('title', 'Create Computer')

@section('contents')
    <h1 class="mb-0">Add Computer</h1>
    <hr />
    <form action="{{ route('computers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="user" class="form-control" placeholder="User">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
            <div class="col">
                <input type="text" name="site" class="form-control" placeholder="Site">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="manufacturers" class="form-control" placeholder="Manufacturers">
            </div>
            <div class="col">
                <input type="text" name="model" class="form-control" placeholder="Model">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="ram" class="form-control" placeholder="RAM">
            </div>
            <div class="col">
                <input type="text" name="storage" class="form-control" placeholder="Storage">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="processor" class="form-control" placeholder="Processor">
            </div>
            <div class="col">
                <input type="text" name="computer_sn" class="form-control" placeholder="Computer SN">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="operating_s"  class="form-control" placeholder="Operating_s">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
