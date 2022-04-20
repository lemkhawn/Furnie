@extends('admin.admin')

@section('addArticle')
<form action="" method="post" enctype="multipart/form-data" style="width: 80%; margin: 10px auto" >
    @csrf
    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter name" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" value="{{ old('description') }}"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Content</label>
        <textarea type="text" class="form-control" id="content" name="content" rows="3" placeholder="" value="{{ old('content') }}"> </textarea>
    </div>
    <div class="form-group col-xl-8" >
        <label for="images" style="margin-right: 10px">Images</label>
        <input type="file" class="form-control" id="images" name="images" value="{{ old('images') }}">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

