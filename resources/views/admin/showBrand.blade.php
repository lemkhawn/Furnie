{{-- @include('header') --}}
{{-- @include('admin.navigationBar') --}}
@extends('admin.admin')
@section('listBrand')
<table style="width: 80%; margin: 10px auto" class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Brand name</th>
            <th scope="col">Brand description</th>
            <th scope="col" colspan="2" style="text-align: center">Function</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($brand as $key => $value )
            <tr>
                <td scope="row"> {{ $key+1 }}</td>
                <td>{{ $value -> brand_name }}</td>
                <td>{{ $value -> brand_description }}</td>
                <td style="text-align: center">
                    <a href="{{ route('editBrand', $value->id) }}" >Update</a>
                </td>
                <td style="text-align: center">
                    <a href="{{ route('deleteBrand', $value->id) }}" >Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection