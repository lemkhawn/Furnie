@include('header')
<<<<<<< HEAD

<div class="container py-5">
    <form action="" method="post" >
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="product_img text-center">
                    <img src="{{asset('../images/products/'.$product->images)}}" alt="" style="height: 400px">
=======
<form action="" method="post" >
    @csrf
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="product_img text-center">
                    <img src="{{asset('/images/products/'.$product->images)}}" alt="" style="height: 400px">
>>>>>>> KienNg
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product_content">
                    <div class="rating_box">
                        <h3>Name: {{$product->productname}}</h3>
                        <ul style="list-style: none; display: flex; padding: 0px">
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="far fa-star"></i></a></li>
                        </ul>
                    </div>
                    <h5>
                        Descrition: {{$product->description}}
                    </h5>
<<<<<<< HEAD
=======
                    <input type="number" name="quantity" id="" value="1">
>>>>>>> KienNg
                    <div class="price_box">
                        <h5 class="price_heading">
                            Price: <span>$</span>{{$product->price}}
                        </h5>
<<<<<<< HEAD
                        <a href="" class="btn btn-outline-success " type="button">
                            Buy Now
                        </a>
                        {{-- <button type="submit"> --}}
                        <button class="btn btn-outline-danger" type="submit">
                            Add to Cart
                        </button>
                        {{-- </button> --}}
=======
                        <button class="btn btn-outline-danger " type="submit">
                            Add to cart
                        </button>
>>>>>>> KienNg
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD

    </form>
</div>
=======
    </div>
    
</form>
>>>>>>> KienNg


<style>
    .rating_box ul li a {
        color: #ffc107;
    }

    .product_content{
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: space-around
    }
</style>

@include('footer')