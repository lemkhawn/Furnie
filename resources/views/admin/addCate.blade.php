
@extends('admin.admin')
@section('addCategory')
<form action="" method="post" style="width: 80%; margin: 10px auto">
    @csrf
    <div class="form-group">
        <label for="name">Name Category</label>
        <input type="text" class="form-control" id="name" name="categoryname" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input class="form-control" id="description" name="description" rows="3"></ì>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection