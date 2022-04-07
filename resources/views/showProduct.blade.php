@include('header');

@foreach ($product as $key => $value)
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/products/'.$value->images) }}" alt="">
        </div>
        <div class="col-md-6">
            <h3>Name: {{ $value->productname }}</h3>
            <p>Price: {{ $value->price }}</p>
            <p>Size: {{ $value->size }}</p>
            <p>Color: {{ $value->color }}</p>
            <p>Category: {{ $value->category_id }}</p>
            <p>Description: {{ $value->description }}</p>
        </div>
    </div>
@endforeach