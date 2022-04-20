
@extends('admin.admin')
@section('listProduct')
</nav>

    <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Product Name</th>
              <th scope="col">Price</th>
              <th scope="col">Size</th>
              <th scope="col" style="text-align: center">Image</th>
              <th scope="col">Category</th>
              <th scope="col">Description</th>
              <th colspan="2" style="text-align: center">Function</th>
            </tr>
          </thead>
          @foreach ($product as $key => $value)
          <tbody>
            <tr>
              <th scope="row">{{ $key+1 }}</th>
                <td>{{$value->productname}}</td>
                <td>{{$value->price}}</td>
                <td>{{$value->size}}</td>
                <td><img src=" {{ asset('images/products/'.$value->images)}} " alt="" style="width: 200px; height:200px; object-fit:contain"></td>
                

                <td>{{$value->category_id}}</td>
                <td>{{$value->description}}</td>
                <td style="text-align: center">
                    <a href="{{route('editProduct',$value->id)}}">Update</a>
                </td>
                <td style="text-align: center">
                    <a href="{{route('deleteProduct',$value->id)}}">Delete</a>
                </td>
            </tr>
          </tbody>
          @endforeach
    </table>
    @endsection