
<form action="" method="post" enctype="multipart/form-data" style="width: 80%; margin: 10px auto" >
    @csrf
    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ $article->title }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" value="{{ $article->description }}"></textarea>
    </div>
    <div class="form-group">
        <label for="price">Content</label>
        <input type="text" class="form-control" id="content" name="content" placeholder="" value="{{ $article->content }}">
    </div>
    <div class="form-group col-xl-8" >
            <label for="images">Images</label>
            <input type="file" class="form-control" id="images" name="images" value="{{ asset('images/article'.$article->image)  }}">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
