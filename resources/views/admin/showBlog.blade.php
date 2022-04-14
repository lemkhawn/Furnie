{{-- @include('header') --}}
{{-- @include('admin.navigationBar') --}}
@extends('admin.admin')
@section('listBlog')
<table style="width: 80%; margin: 10px auto" class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Blog name</th>
            <th scope="col">Blog description</th>
            <th scope="col" colspan="2" style="text-align: center">Function</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blog as $key => $value )
            <tr>
                <td scope="row"> {{ $key+1 }}</td>
                <td>{{ $value -> blog_name }}</td>
                <td>{{ $value -> blog_description }}</td>
                <td style="text-align: center">
                    <a href="{{ route('editBlogForm', $value->id) }}" >Update</a>
                </td>
                <td style="text-align: center">
                    <a href="{{ route('deleteBlog', $value->id) }}" >Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection