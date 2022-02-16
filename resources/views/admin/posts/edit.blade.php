@extends('layouts.admin')
@section('content')
<h1 class="text-center">Edit posts </h1>
<div class="container">
        <form method="post" action="{{route('posts.update',$post->id)}}">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description </label>
                <textarea style="width:800px;height:200px" type="text" class="form-control " name="discerption" >{{$post->discerption}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
