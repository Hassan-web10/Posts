<div class="form-group">
    <label for="">Title</label>
<input type="text" value="{{old('title',$post->title ?? null)}}" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
    <small id="helpId" class="text-muted">Help text</small>
  </div>
  <div class="form-group">
      <label for="">Content</label>
      <input type="text" value="{{old('content',$post->content ?? null)}}" name="content" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>
      
       @if ($errors->any())
  @foreach ($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    <strong>{{$error}}</strong>
  </div>
    
  @endforeach
  @endif
