@extends('layouts.admin')
@section('content')
<h1 class="text-center">All Roles</h1>
 <div class="container">
 <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Controls</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($roles as $role)
  <tr>
      <td scope="row">1</td>
      <td>{{$role->name}}</td>
      <td>
          <a href="{{route('roles.show',$role->id)}}" class="btn btn-success">Show</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
<a class="mt-3 btn btn-primary" href="{{route('roles.create')}}">
    Add Users
</a>
 </div>
@endsection
