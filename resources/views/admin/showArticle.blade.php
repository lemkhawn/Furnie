
@extends('admin.admin')
@section('All-Articles')
<style>
  .lineclamp{
    -webkit-line-clamp: 5;
    overflow: hidden;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    text-overflow: ellipsis;
    padding-bottom: 0 !important;
  }
</style>

</nav>

    <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col"  style="">Content</th>
              <th scope="col" style="text-align: center">Image</th>
              <th scope="col" colspan="2" style="text-align: center">Action</th>
            </tr>
          </thead>
          @foreach ($article as $key => $value)
          <tbody>
            <tr>
              <th scope="row">{{ $key+1 }}</th>
                <td>{{$value->title}}</td>
                <td>{{$value->description}}</td>
                <td class="lineclamp">{{$value->content}}</td>
                <td><img src=" {{ asset('images/article/'.$value->image)}} " alt="" style="width: 200px; height:200px; object-fit:contain"></td>
                

                
                <td style="text-align: center">
                    <a href="{{route('editArticle',$value->id)}}">Update</a>
                </td>
                <td style="text-align: center">
                    <a href="{{route('deleteArticle',$value->id)}}">Delete</a>
                </td>
            </tr>
          </tbody>
          @endforeach
    </table>
    @endsection

