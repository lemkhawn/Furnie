
@extends('admin.admin')
@section('addBlog')
<form action="" method="post" style="width: 80%; margin: 10px auto">
    @csrf
    <div class="form-group">
        <label for="name">Name Blog</label>
        <input type="text" class="form-control" id="name" name="blog_name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="description">Blog Description</label>
        <input class="form-control" id="description" name="blog_description" rows="3"></ì>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection