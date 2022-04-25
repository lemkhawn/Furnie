{{-- @include('header') --}}
{{-- @include('admin.navigationBar') --}}

@extends('admin.admin')
@section('editBlogs')
<form action="" method="post" style="width: 80%; margin: 10px auto">
    @csrf
    <div class="form-group">
        <label for="name">Name Blog</label>
        <input type="text" class="form-control" id="name" name="blog_name" placeholder="Enter name"value="{{$blog->blog_name }}">
    </div>
    <div class="form-group">
        <label for="description">Blog description</label>
        <input type="text" class="form-control" id="description" name="blog_description" rows="3"value="{{$blog->blog_description }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection