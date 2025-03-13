@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Details</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            </div>
        </div>
        
        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to Users</a>
    </div>
@endsection
