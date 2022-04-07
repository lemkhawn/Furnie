@include('header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<table class="table" style="margin-top: 20px">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Username</th>
        <th scope="col">Fullname</th>
        <th scope="col">Email</th>
        <th scope="col">Phonenumber</th>
        <th scope="col">Gender</th>
        <th scope="col">Role</th>
        <th scope="col" colspan="2" style="text-align: center">Function</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $key => $value )
            <tr>
                {{-- <td scope="row"> {{ $key+1 }}</td> --}}
                <td>{{ $value -> username }}</td>
                <td>{{ $value -> user_fullname }}</td>
                <td>{{ $value -> user_email }}</td>
                <td>{{ $value -> user_phonenumber }}</td>
                <td>{{ $value -> user_gender }}</td>
                <td>{{ $value -> user_role }}</td>
                <td>
                    <a href="{{ route('editUser', $value->id) }}">Update</a>
                </td>
                <td>
                    <a href="{{ route('deleteUser', $value->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>