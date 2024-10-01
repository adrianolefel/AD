@extends('layouts.app')

@section('title', 'Computer Details')

@section('contents')
    <h1 class="mb-0">{{ $computer->name }} Details</h1>
    <hr />
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $computer->name }}</td>
        </tr>
        <tr>
            <th>User</th>
            <td>{{ $computer->user }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $computer->status }}</td>
        </tr>
        <tr>
            <th>Site</th>
            <td>{{ $computer->site }}</td>
        </tr>
        <tr>
            <th>Manufacturers</th>
            <td>{{ $computer->manufacturers }}</td>
        </tr>
        <tr>
            <th>Model</th>
            <td>{{ $computer->model }}</td>
        </tr>
        <tr>
            <th>RAM</th>
            <td>{{ $computer->ram }}</td>
        </tr>
        <tr>
            <th>Storage</th>
            <td>{{ $computer->storage }}</td>
        </tr>
        <tr>
            <th>Processor</th>
            <td>{{ $computer->processor }}</td>
        </tr>
        <tr>
            <th>Computer SN</th>
            <td>{{ $computer->computer_sn }}</td>
        </tr>
        <tr>
            <th>Operating_s</th>
            <td>{{ $computer->operating_s }}</td>
        </tr>
    </table>
    <a href="{{ route('computers.edit', $computer->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('computers.destroy', $computer->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete?');">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>
    </form>
@endsection
