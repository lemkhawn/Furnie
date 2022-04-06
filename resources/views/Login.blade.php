@include('header')
@yield('Login')
<body>
<div class="container-r">
    <div class="title">Login</div>
    <div class="content-r">
      <form action="#">
        <div class="user-details-r">
          <div class="input-box-r">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box-r">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Login">
        </div>
        <a href="register.html">Don't have an account?</a>
      </form>
    </div>
  </div>
  @include('footer')
