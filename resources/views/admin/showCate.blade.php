{{-- @include('header') --}}
{{-- @include('admin.navigationBar') --}}
@extends('admin.admin')
@section('listCategory')
<table style="width: 80%; margin: 10px auto" class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category name</th>
            <th scope="col">Description</th>
            <th scope="col" colspan="2" style="text-align: center">Function</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $key => $value )
            <tr>
                <td scope="row"> {{ $key+1 }}</td>
                <td>{{ $value -> categoryname }}</td>
                <td>{{ $value -> description }}</td>
                <td style="text-align: center">
                    <a href="{{ route('editCategoryForm', $value->id) }}" >Update</a>
                </td>
                <td style="text-align: center">
                    <a href="{{ route('deleteCategory', $value->id) }}" >Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection