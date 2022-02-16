@extends('layouts.admin')
@section('content')
<h1 class="text-center">Edit {{$user->name}}'s Name </h1>
<div class="container">
        <form method="post" action="{{route('users.update',$user->id)}}">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control " name="email" value="{{$user->email}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
