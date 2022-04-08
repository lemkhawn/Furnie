@include('header')
@include('admin.navigationBar')

<form action="" method="post" enctype="multipart/form-data" style="width: 80%; margin: 10px auto" >
    @csrf
    <div class="form-group">
        <label for="name">Name product</label>
        <input type="text" class="form-control" id="productname" name="productname" placeholder="Enter name" value="{{ $product->productname }}">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ $product->price }}">
    </div>
    <div class="row">
        <div class="form-group col-xl-6">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="size" name="size" rows="3" value="{{ $product->size }}">
        </div>
        <div class="form-group col-xl-6">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" rows="3" value="{{ $product->color }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xl-4">
            <label for="category_id">Category</label>
            <select name='category_id' id="category_id" style="width: 75%" class="form-select">
                @foreach ($category as $key => $value)
                    <option  value="{{ $value->id }}" >{{ $value->categoryname }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-xl-8" >
            <label for="images" style="margin-right: 10px">Images</label>
            <input type="file" class="form-control" id="images" name="images" value="{{ asset('images/product'.$product->images)  }}">
        </div>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" value="">{{ $product->description }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

</form>