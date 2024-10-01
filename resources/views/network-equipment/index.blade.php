@extends('layouts.app')

@section('title', '')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Network Equipment</h1>
        <a href="{{ route('network-equipments.create') }}" class="btn btn-primary">Add Network Equipment</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Serial Number</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>IP Address</th>
                <th>MAC Address</th>
                <th>Site</th>
                <th>Status</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody><tbody>
    @if($networkEquipments->count() > 0)
        @foreach($networkEquipments as $rs)
           
                    <tr>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->type }}</td>
                        <td class="align-middle">{{ $rs->serial_number }}</td>
                        <td class="align-middle">{{ $rs->model }}</td>
                        <td class="align-middle">{{ $rs->manufacturer }}</td>
                        <td class="align-middle">{{ $rs->ip_address }}</td>
                        <td class="align-middle">{{ $rs->mac_address }}</td>
                        <td class="align-middle">{{ $rs->site }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group">
                                <a href="{{ route('network-equipments.show', $rs->id) }}" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('network-equipments.edit', $rs->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('network-equipments.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="11">Network Equipment not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection