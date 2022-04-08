
@yield('navBarAmdin')
<!-- Example single danger button -->

<div class="row" style="width:80%; margin:0px auto ">
    <div class="btn-group col-xl-4">
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          User
        </button>
        <ul class="dropdown-menu " style="width: 92%">
          <li><a class="dropdown-item" href="{{route('listUser')}}">List all user</a></li>
          <li><a class="dropdown-item" href="{{route('register')}}">Create a new account</a></li>
        </ul>
    </div>
    <div class="btn-group col-xl-4" >
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Product
        </button>
        <ul class="dropdown-menu  " style="width: 92%">
          <li><a class="dropdown-item" href="{{route('listProduct')}}">List all product</a></li>
          <li><a class="dropdown-item" href="{{route('addProduct')}}">Add a new product</a></li>
        </ul>
    </div>
    <div class="btn-group col-xl-4">
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </button>
        <ul class="dropdown-menu " style="width: 92%" >
          <li><a class="dropdown-item" href="{{route('category')}}">List all category</a></li>
          <li><a class="dropdown-item" href="{{route('addCategoryForm')}}">Add a new category</a></li>
        </ul>
    </div>
</div>
