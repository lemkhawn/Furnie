@include('header')
@yield('blog')
  <!-- blog section -->
  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest Blog
        </h2>
      </div>
      <div class="row">
        @foreach ($article as $item )
          
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box" style="">
            <div class="img-box">
              <img src="{{asset('images/article/'.$item->image)}}" alt="" style="height: 240px">
            </div>
            <div class="detail-box" style="height: 190px; position:relative; ">
              <h5>
                {{$item->title}}
              </h5>
              <p class="lineclamp">
                {{$item->description}}
              </p>
              <a href="{{route('detailArticle', $item->id)}}" style="    position: absolute; bottom: 20px;">
                Read More
              </a>
            </div>
          </div>
        </div>
        @endforeach
<style>
    .lineclamp{
      -webkit-line-clamp: 2;
      overflow: hidden;
      -webkit-box-orient: vertical;
      display: -webkit-box;
      text-overflow: ellipsis;
      padding-bottom: 0 !important;
  }
</style>
        {{-- <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Anything embarrassing hidden in the middle
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Molestias magni natus dolores odio commodi. Quaerat!
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
@include('footer')