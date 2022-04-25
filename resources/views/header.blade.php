<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Furnie | Home page</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/R-L.css">
  <link rel="stylesheet" href="css/PD.css">
</head>

<body>

  <div class="hero_area">
    <!-- header section stravbar-nats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{route('index')}}">
          <span>
            FURNIE
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav ">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about"> About</a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" href="furniture.html">Furniture </a>
                    <div class="dropdown">
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Chair</a></li>
                        <li><a class="dropdown-item" href="#">Table</a></li>
                        <li><a class="dropdown-item" href="#">Chandeliers</a></li>
                      </ul>  
                    </div>  -->
                <div class="nav-drop">
                    <div class="dropdown" style="padding:0; margin:0;">
                      <a class="nav-link" href="#" role="" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                      </a>
                    
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="chair">Chair</a></li>
                        <li><a class="dropdown-item" href="table">Table</a></li>
                        <li><a class="dropdown-item" href="chandeliers">Chandeliers</a></li>
                      </ul>
                    </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
          <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-dark btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
          <form class="form-inline">
            <!-- <a href="">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </a> -->
            <a href="cart">
            <i class="fa-solid fa-cart-shopping"aria-hidden="true"></i>
            </a>
            <!-- <a href="login">
              <span>
                Login
              </span> 
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <a href="{{route('register')}}">
              <span>
                Sign up
              </span> 
              <i class="fa-solid fa-arrow-right-to-bracket" aria-hidden="true"></i>
            </a> -->
            <div class="btn-group">
                <div  class="btn btn-light btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
