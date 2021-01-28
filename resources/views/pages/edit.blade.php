@extends('layouts.app')

@section('content')
<form action="{{route('postsC.update',$post->id)}}" method="post">
    @csrf
    @method('PUT')
    
    @include('layout.form')

     <button type="submit" class="btn btn-success btn-block">Update</button>
</form>
@endsection