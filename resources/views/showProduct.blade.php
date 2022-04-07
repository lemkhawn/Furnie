@foreach ($product as $key => $value)
<div class="col-md-4">
    <h1>show product</h1>
    <div class="card mb-4 shadow-sm">
        <img class="card-img-top" src="{{ asset('public/images/'.$value->images) }}" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">{{ $value->productname }}</p>
            <div class="d-flex justify-content-between align-items-center">
                {{-- <div class="btn-group">
                    <a href="{{ route('product.show', $value->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                    <a href="{{ route('product.edit', $value->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div> --}}
                <small class="text-muted">{{ $value->created_at }}</small>
            </div>
        </div>
    </div>
@endforeach