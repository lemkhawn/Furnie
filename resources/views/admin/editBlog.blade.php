{{-- @include('header') --}}
{{-- @include('admin.navigationBar') --}}

@extends('admin.admin')
@section('editBlog')
<form action="" method="post" style="width: 80%; margin: 10px auto">
    @csrf
    <div class="form-group">
        <label for="name">Name Blog</label>
        <input type="text" class="form-control" id="name" name="categoryname" placeholder="Enter name" value="{{$blog->categoryname }}">
    </div>
    <div class="form-group">
        <label for="description">Blog description</label>
        <input class="form-control" id="description" name="description" rows="3" value="{{$blog->description}}"></ì>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection