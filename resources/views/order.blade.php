@include('header')

<div class="container">
    <h2>Fullname: {{$data -> user_fullname}}</h2>
    <h3>Phonenumber: {{$data -> user_phonenumber}}</h3>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Color</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{$data->productname}}</td>
            <td>{{$data->color}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price}}</td>
        </tr>
        @endforeach
    </table>
    <input type="text" name="" id="" placeholder="Enter your location">
</div>