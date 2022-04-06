@include('header')
@yield('product_detail')
<div class="product-card">
    <div class="badge">Hot</div>
    <div class="product-tumb">
      <img src="" alt="">
    </div>
    <div class="product-details">
      <span class="product-catagory">*product type*</span>
      <h4><a href="">*Product name*</a></h4>
      <p>*Product Description*</p>
      <div class="product-bottom-details">
        <div class="product-price">*product pricte$*</div>
        <div class="product-links">
          <a href=""><i class="fa fa-heart"></i></a>
          <a href=""><i class="fa fa-shopping-cart"></i></a>
        </div>
      </div>
      <button>add to cart</button>
    </div>
  </div>
  @include('footer')