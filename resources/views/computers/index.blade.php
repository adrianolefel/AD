@extends('layouts.app')

@section('title', '')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Computers</h1>
        <a href="{{ route('computers.create') }}" class="btn btn-primary">Add Computer</a>
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
                <th>User</th>
                <th>Status</th>
                <th>Site</th>
                <th>Manufacturers</th>
                <th>Model</th>
                <th>RAM</th>
                <th>Storage</th>
                <th>Processor</th>
                <th>Computer SN</th>
                <th>Operating_s</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($computer->count() > 0)
                @foreach($computer as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->user }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">{{ $rs->site }}</td>
                        <td class="align-middle">{{ $rs->manufacturers }}</td>
                        <td class="align-middle">{{ $rs->model }}</td>
                        <td class="align-middle">{{ $rs->ram }}</td>
                        <td class="align-middle">{{ $rs->storage }}</td>
                        <td class="align-middle">{{ $rs->processor }}</td>
                        <td class="align-middle">{{ $rs->computer_sn }}</td>
                        <td class="align-middle">{{ $rs->operating_s }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group">
                                <a href="{{ route('computers.show', $rs->id) }}" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('computers.edit', $rs->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('computers.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="12">Computer not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
