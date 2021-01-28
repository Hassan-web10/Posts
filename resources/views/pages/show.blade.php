@extends('layouts.app')

@section('content')
<a name="" id="" class="btn btn-primary" href="{{url()->previous()}}
" role="button">Backk</a>
<h2>Show Post </h2>     
<ul class="list-group my-2">
        <li class="list-group-item active">{{$post->title}}</li>
        <li class="list-group-item">{{$post->content}}</li>
        <li class="list-group-item disabled">@if ($post->comment_count)
            <span class="badge badge-success">{{ $post->comment_count}}</span>
        @else
        <span class="badge badge-success">no comments yet !</span>

            
        @endif
    </li>
    </ul>
@endsection
