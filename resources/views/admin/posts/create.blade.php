@extends('layouts.admin')
@section('content')
    <div class="container">
        <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
        @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input style="width:25vw" type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Descreption</label>
                <textarea type="password " style="width:800px;height:200px" class="form-control @error('discerption') is-invalid @enderror" name="discerption"></textarea>
                @error('discerption')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label class="form-label">Add Image</label>
            <input style="width:25vw" type="file" name="image" class="form-control @error('title') is-invalid @enderror">
            @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
