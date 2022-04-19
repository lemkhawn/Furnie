@include('header')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="product_img text-center">
                <img src="{{asset('/images/article/'.$article->image)}}" alt="" >
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product_content">
                <div class="rating_box">
                <!-- <img src="{{asset('/images/article/'.$article->image)}}" alt="" style="height: 400px , center"> -->
            </div>
                    <h2>Title: {{$article->title}}</h2>
                
                <h4>
                    Descrition: {{$article->description}}
                </h2>
                <h5>
                    Content: {{$article->content}}
                </h5>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .rating_box ul li a {
        color: #ffc107;
    }

    .product_content{
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: space-around;
        text-align: center;
    }
</style>

@include('footer')