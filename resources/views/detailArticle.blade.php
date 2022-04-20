@include('header')
<div class="container py-5">
    <div class="row">

            <div class="product_img text-center">
                <img src="{{asset('/images/article/'.$article->image)}}" alt="" >
            </div>
            </div>
                <h2 class="text-center mt-3">Title: {{$article->title}}</h2>
            
                <h4 style="font-style:italic">Descrition: {{$article->description}}</h4>
                <h5 >
                    <br>{{$article->content}}
                </h5>
                <br>
            <div class="text-center" style="font-size:20px; font-weight:900">Thanks for reading</div>
            </div>

    </div>
</div>


<style>
    h5{
        font-weight: 400;
        font-size: 18px;
        line-height: 30px;
    }

</style>

@include('footer')