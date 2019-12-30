@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{route ('update')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group d-flex" >
        <label class="mr-5">Title</label class="mr-5">
        <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" placeholder="Enter title" value="{{old('title',$post->title)}}">
        {!! $errors->first('title','<span class="invalid-feedback ">:message</span>') !!}
    </div>
    <div class="form-group d-flex">
        <label class="mr-5">Description</label class="mr-5">
        <textarea name="excerpt" class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : ''}}" placeholder="Enter Excerpt">{{old('excerpt',$post->excerpt)}}</textarea>
        {!! $errors->first('excerpt','<span class="invalid-feedback ">:message</span>') !!}
    </div>
    <div class="form-group d-flex">
        <label class="mr-5" class="control-label class="mr-5"" for="inputError">Body</label class="mr-5">
        <textarea rows="5" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}" placeholder="Enter Body">{{old('body',$post->body)}}</textarea>
        {!! $errors->first('body','<span class="invalid-feedback ">:message</span>') !!}
    </div>
    <div class="form-group d-flex">
        <label class="mr-5">Category</label class="mr-5">
        <select name="category" class="form-control {{ $errors->has('category') ? 'is-invalid' : ''}}">
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" {{ old('category',$post->category_id) == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
            @endforeach
        </select>
        {!! $errors->first('category','<span class="invalid-feedback ">:message</span>') !!}
    </div>
    <div class="form-group d-flex">
        <label class="mr-5">Image</label class="mr-5">
        <input type="file" name="img" class="form-control {{ $errors->has('img') ? ' is-invalid' : '' }}">
        {!! $errors->first('img','<span class="invalid-feedback "><strong>:message</strong></span>') !!}

    </div>

    <input type="hidden" name="post_id" value="{{old('title',$post->id)}}" >

    <button type="submit" class="btn btn-secondary">{{$btnText}}</button>

  </form>
</div>
@endsection
