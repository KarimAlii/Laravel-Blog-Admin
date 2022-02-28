@extends('layouts.admin')
@section('content')
<div class="container">
    <h1 class="text-center">{{__('admin.dashboard')}}</h1>
<img src="{{URL::asset('img')}}/{{'../../img/landing-image.png'}}" alt="">
</div>
@endsection
