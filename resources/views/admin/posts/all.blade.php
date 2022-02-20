@extends('layouts.admin')
@section('content')
<h1 class="text-center">All Posts</h1>
<div class="container">
<table class="table text-center">
<thead>
<tr>
    <th scope="col">#</th>
    <th scope="col">image</th>
    <th scope="col">Title</th>
    <th scope="col">Descreption</th>
    <th scope="col">Controls</th>

</tr>
</thead>
<tbody>
@foreach ($posts as $post)
<tr>
    <td scope="row">{{$post->id}}</td>
    <td><img src="{{URL::asset('img')}}/{{$post->image}}" alt=""></td>
    <td>{{$post->author}}</td>
    <td>{{$post->title}}</td>
    <td>{{$post->discerption}}</td>

    <td>
        <a href="{{route('posts.show',$post->id)}}" class="btn btn-success">Show</a>
        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Edit</a>
        <form action="{{route('posts.destroy',$post->id)}}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete" />
        </form>

    </td>
</tr>
@endforeach
</tbody>
</table>
<a class="mt-3 btn btn-primary" href="{{route('posts.create')}}">

Add Post
</a>
</div>
@endsection
