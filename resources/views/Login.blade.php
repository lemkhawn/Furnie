@include('header')
@yield('Login')
<body>


  <div class="container-r">
      <div class="title">Login</div>
      <div class="content-r">
        <form action="#" method="post" role="form">
          @csrf
          <div class="user-details-r">
            <div class="input-box-r">
              <span class="details">Username</span>
              <input type="text" placeholder="Enter your username" required name="username">
            </div>
            <div class="input-box-r">
              <span class="details">Password</span>
              <input type="text" placeholder="Enter your password" required name="password">
            </div>
          </div>
          <div class="button">
            <input type="submit">
          </div>
          <a href="register">Don't have an account?</a>
        </form>
      </div>
    </div>

  
