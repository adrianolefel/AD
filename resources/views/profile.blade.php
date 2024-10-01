<!-- resources/views/profile.blade.php -->

@extends('layouts.app')

@section('title', 'Profile')

@section('contents')
<div class="container">
    <h1 class="mb-0">Profile</h1>
    <hr />

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('profile.update') }}">
        @csrf

        <div class="row">
            <div class="col-md-12 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row" id="res"></div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="First name" value="{{ old('name', auth()->user()->name) }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Phone</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" value="{{ old('phone', auth()->user()->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Address</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', auth()->user()->address) }}" placeholder="Address">
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button id="btn" class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection