@extends('layouts.admin')
@section('content')
<h1 class="text-center mb-3">Showen User</h1>
<div class="container">
<table class="table table-success table-striped text-center rounded-3 ">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Registeration Time</th>

</tr>
</thead>
<tbody>
<tr>
<th scope="row">{{$user->id}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->created_at}}</td>

</tr>
</tbody>
</table>
<a href="{{route('users.index')}}" class="btn btn-primary">Users Dashboard</a>
</div>
@endsection
