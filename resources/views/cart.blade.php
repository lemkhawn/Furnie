@include('header')

<section class="vh-100" style="background-color: #fdccbc;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <p><span class="h2">Shopping Cart </span><span class="h4">(1 item in your cart)</span></p>
        
          <div class="card mb-4">
            <div class="card-body p-4">
<<<<<<< HEAD

              @foreach ($cart as $item)
              
              {{-- <form action="{{route('deleteProductOnCart/'.$item->'cart.id')}}" method="post"> --}}

=======
              {{-- start loop --}}
              @foreach ($cart as $item)
              
>>>>>>> KienNg
                <div class="row align-items-center justify-content-between">
                  <div class="col-md-2">
                    <img src="{{asset('../images/products/'.$item->images)}}" class="img-fluid" alt="Generic placeholder image">
                  </div>
                  <div class="col-md-2 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Name</p>
                      <p class="lead fw-normal mb-0">{{$item->productname}}</p>
                    </div>
                  </div>
                  <div class="col-md-2 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Color</p>
                      <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2" style="color: #fdd8d2;"></i>{{$item->color}}</p>
                    </div>
                  </div>
                  <div class="col-md-1 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Quantity</p>
                      <input type="number" style="width: 50%" value="1" class="lead fw-normal mb-0" onkeyup="mult(this.value)"></input>
                    </div>
                  </div>
                  <div class="col-md-1 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Price</p>
                      <p class="lead fw-normal mb-0" onkeyup="this.price">${{$item->price}}</p>
                    </div>
                  </div>
                  <div class="col-md-2 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Delete</p>
<<<<<<< HEAD
                      <a type="submit" href="{{route('deleteProductOnCart',$item->id)}}" class="btn btn-danger">
=======
                      <a type="submit" href="{{route('deleteCart',$item->id)}}" class="btn btn-danger">
>>>>>>> KienNg
                          Delete
                      </a>
                    </div>
                  </div>
                </div>

<<<<<<< HEAD
              {{-- </form> --}}


              @endforeach
  
=======
              @endforeach
                {{-- end loop --}}
>>>>>>> KienNg
            </div>
          </div>
  
          <div class="card mb-5">
            <div class="card-body p-4">
  
              <div class="float-end">           
                <p class="mb-0 me-5 d-flex align-items-center">
                  <span class="small text-muted me-2">Order total:</span> <span class="lead fw-normal">
                    ${{$cart->sum('price')}}
                  </span>
                </p>
              </div>
  
            </div>
          </div>

<<<<<<< HEAD
          <form action="" method="post">
            @csrf
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>
              <button type="submit" class="btn btn-primary btn-lg">Checkout and get Bill</button>
            </div>

          </form>
  
=======
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>
              <a href="{{route('getOrder')}}" class="btn btn-primary btn-lg">Checkout and get Bill</a>
            </div>

>>>>>>> KienNg
        </div>
      </div>
    </div>
  </section>
@include('footer')
<<<<<<< HEAD

<script>
  function mult(value)
  {
    var x;
    x = price * value;
    document.getElementById("subTotal").value = x;
  }
</script>
=======
>>>>>>> KienNg
