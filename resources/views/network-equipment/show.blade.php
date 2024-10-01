@extends('layouts.app')

@section('title', 'Network Equipment Details')

@section('contents')
    <h1 class="mb-0">{{ $networkEquipment->name }} Details</h1>
    <hr />
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $networkEquipment->name }}</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>{{ $networkEquipment->type }}</td>
        </tr>
        <tr>
            <th>Serial Number</th>
            <td>{{ $networkEquipment->serial_number }}</td>
        </tr>
        <tr>
            <th>Model</th>
            <td>{{ $networkEquipment->model }}</td>
        </tr>
        <tr>
            <th>Manufacturer</th>
            <td>{{ $networkEquipment->manufacturer }}</td>
        </tr>
        <tr>
            <th>IP Address</th>
            <td>{{ $networkEquipment->ip_address }}</td>
        </tr>
        <tr>
            <th>MAC Address</th>
            <td>{{ $networkEquipment->mac_address }}</td>
        </tr>
        <tr>
            <th>Site</th>
            <td>{{ $networkEquipment->site }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $networkEquipment->status }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $networkEquipment->description }}</td>
        </tr>
    </table>
    <a href="{{ route('network-equipments.edit