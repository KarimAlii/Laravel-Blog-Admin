@extends('layouts.admin')
@section('content')
    <div class="container">
        <form method="post" action="{{route('users.store')}}">
        @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Roles</label>
                <select class="form-select" aria-label="Default select example" name="role_id">
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                  </select>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
