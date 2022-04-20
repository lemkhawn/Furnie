@include('header')

<section class="furniture_section layout_padding">
    <div class="container">
        <div class="heading_container">
          <h2>
            Our Furniture
          </h2>
        </div>
      <div class="row">
        {{-- <div class="row-xl-4"> --}}

          @foreach ($products as $value )
          <div class="col-md-6 col-lg-4">
            <form action="" method="post">
              
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
                            <a href="">Buy Now</a>
                          </div>
                      </div>
                  </div>
                  
                </form>
                
              </div>
              @endforeach

        {{-- </div> --}}

      </div>
    </div>
</section>