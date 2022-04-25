{{-- @include('header') --}}
{{-- @include('admin.navigationBar') --}}

@extends('admin.admin')
@section('editBrands')
<form action="" method="post" style="width: 80%; margin: 10px auto">
    @csrf
    <div class="form-group">
        <label for="name">Name Brand</label>
        <input type="text" class="form-control" id="name" name="brand_name" placeholder="Enter name"value="{{$brand->brand_name }}">
    </div>
    <div class="form-group">
        <label for="description">Brand description</label>
        <input type="text" class="form-control" id="description" name="brand_description" rows="3"value="{{$brand->brand_description }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection