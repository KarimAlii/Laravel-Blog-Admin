@extends('layouts.admin')
@section('content')
<h1 class="text-center mb-3">Showen Post</h1>
<div class="container">
<table class="table table-success table-striped text-center rounded-3 ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Author</th>
      <th scope="col">Title</th>
      <th scope="col">Description </th>

    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row">{{$post->id}}</th>
      <td>{{$post->author}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->discerption}}</td>

    </tr>
  </tbody>
</table>
<a href="{{route('posts.index')}}" class="btn btn-primary">Posts Page</a>
</div>
@endsection
