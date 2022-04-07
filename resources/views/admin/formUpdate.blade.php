@include('header');

<form action="" method="post" style="width: 80%; margin:10px auto; background-color:#FFFFFF; border-radius: 8px ">
    @csrf
    <div class="row">
        <div class="form-group col-xl-6">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name" name="username" value="{{ $user->username }}">
        </div>
        <div class="form-group col-xl-6">
            <label for="user_fullname">Fullname</label>
            <input type="text" class="form-control" id="user_fullname" name="user_fullname" value="{{ $user->user_fullname }}">
        </div>
    </div>
    <div class="form-group col-xl-12">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}">
    </div>
    <div class="row">
        <div class="form-group col-xl-6">
            <label for="user_email">Email</label>
            <input type="user_email" class="form-control" id="user_email" name="user_email" value="{{ $user->user_email }}">
        </div>
        <div class="form-group col-xl-6">
            <label for="user_phonenumber">Phonenumber</label>
            <input type="text" class="form-control" id="user_phonenumber" name="user_phonenumber" value="{{ $user->user_phonenumber }}">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-xl-6">
            <label for="user_gender">Gender</label>
            <input type="tetx" class="form-control" id="user_gender" name="user_gender" value="{{ $user->user_gender }}">
        </div>
        <div class="form-group col-xl-6">
            <label for="user_role">Role</label>
            <input type="text" class="form-control" id="user_role" name="user_role" value="{{ $user->user_role }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin:10px 0px; width:100%">Submit</button>
</form>