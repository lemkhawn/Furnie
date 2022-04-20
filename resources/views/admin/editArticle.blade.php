@extends('admin.admin')
@section('editArticle')
<form action="" method="post" enctype="multipart/form-data" style="width: 80%; margin: 10px auto" >
    @csrf
    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ $article->title }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" value=""> {{ $article->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Content</label>
        <textarea type="text" class="form-control" id="content" name="content" rows="3" placeholder="" value=""> {{ $article->content }} </textarea>
    </div>
    <div class="form-group col-xl-8" >
        <label for="images">Images</label>
        <input type="file" class="form-control" id="images" name="images" >
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>

</form>    
@endsection