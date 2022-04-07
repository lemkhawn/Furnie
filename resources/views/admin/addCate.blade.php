@include('header')

<form action="" method="POST" style="width: 80%; margin: 10px auto" >
    @csrf
    <div class="form-group">
        <label for="categoryname">Category name</label>
        <input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Enter category name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>