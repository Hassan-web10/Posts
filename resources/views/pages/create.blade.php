@extends('layouts.app')

    
@section('content')
<div class="inline">
<h2 class="text-center p-3 ">Create New Post</h2>
<a  class="btn btn-dark" href="{{route('postsC.index')}}" role="button">Routeur</a>
</div>
<form action="{{route('postsC.store')}}" method="post">
    @csrf
    
@include('layout.form')
<button type="submit" class="btn btn-success btn-block">ADD Post</button>
</form>

@endsection