@include('header')
@yield('Register')
<body>
  <div class="container-r">
    <div class="title">Registration</div>
    <div class="content-r">
      <form action="#" method="POST">
        @csrf
        <div class="user-details-r">
          <div class="input-box-r">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required name="user_fullname">
          </div>
          <div class="input-box-r">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required name="username">
          </div>
          <div class="input-box-r">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name="user_email">
          </div>
          <div class="input-box-r">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required name="user_phonenumber">
          </div>
          <div class="input-box-r">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" required name="user_password">
          </div>
          <div class="input-box-r">
            <span class="details">Gender</span>
            <input type="text" name="user_gender" id="" placeholder="Male/Female" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <a href="login">Already have an account?</a>
      </form>
    </div>
  </div>
  

