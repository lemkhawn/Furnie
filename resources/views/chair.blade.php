@include('header')
@yield('chair')
  <!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Furniture
        </h2>
      </div>
      <div class="row">
        @foreach ($products as $value )
          
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('images/products/'.$value->images)}}" alt="">
            </div>
            <div class="detail-box">
              <a href="{{route('detail', $value -> id)}}">
                <h5>  {{$value->productname}}</h5>  
              </a>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> {{$value->price}}
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

        <!-- {{-- <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Double Bed Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                House Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f4.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                brown Table Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 100.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f5.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Blue Chair Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/f6.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Brown Table Design
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>$</span> 200.00
                </h6>
                <a href="">
                  Buy Now
                </a>
              </div>
            </div>
          </div>
        </div>  -->
      </div>
    </div>
  </section>

  <!-- end furniture section -->



</body>

</html>
@include('footer')