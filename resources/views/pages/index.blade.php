
@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="alert alert-primary" role="alert">
    <strong>{{session('success')}}</strong>
    </div>
@endif
    @foreach ($posts as $item)
    <ul class="list-group my-2">
        <li class="list-group-item active">{{$item->title}}</li>
        <li class="list-group-item">{{$item->content}}</li>
        <li class="list-group-item disabled">@if ($item->comment_count)
            <span class="badge badge-success">{{ $item->comment_count}}</span>
        @else
        <span class="badge badge-dark">no comments yet !</span>

            
        @endif
    </li>



        <li class="list-group-item ">
    <a  class="btn btn-success" href="{{route('postsC.show',$item->id)}}" 
        role="button">Show Post</a>
                <a  class="btn btn-warning" href="{{route('postsC.edit',$item->id)}}" role="button">Update</a>
            <form action="{{route('postsC.destroy',$item->id)}}" method="post" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </li>

    </ul>
  
    @endforeach
<div>
    {{$posts->links()}}
</div>
@endsection