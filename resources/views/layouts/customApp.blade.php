<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/file.css') }}" rel="stylesheet">

</head>

<body>

  <div id="app">

    <!---------- Navigation ---------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container ">
        <router-link to="/" class="navbar-brand"> Laravel Blog </router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              {{-- <a class="nav-link" href="{{ url("/") }}">Home
                <span class="sr-only">(current)</span>
              </a> --}}
              <router-link to="/" class="nav-link"> Home </router-link>
              <span class="sr-only">(current)</span>
            </li>
            
            <li class="nav-item">
              <router-link to="/contact" class="nav-link"> Contact </router-link>
              {{-- <a class="nav-link" href="{{ url("contact") }}">Contact</a> --}}
            </li>
            <li class="nav-item register-btn reg-login-btn">
              <a class="btn btn-info nav-link switch-tologin-modal" href="#">login</a>
            </li>
            <li class="nav-item reg-login-btn switch-toregister-modal">
              <a class="btn btn-primary text-weight nav-link" href="#">logOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!---------- Page Content ---------->
    <div class="container">

      <div class="row">
          @yield('content')
      </div>

    </div>

    <!----------------- Footer ----------------->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
      </div>
    </footer>

    <!-----------------register----------------->
    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="login-form">
            <form action="/examples/actions/confirmation.php" method="post">
                <h2 class="text-center">Create New Account</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="firstname" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="lastname" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                </div>
                <div class="clearfix">
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>        
            </form>
            <p class="text-center">having account ? 
              <strong class="switch-tologin-modal" ><a href="#">Login</a></strong>
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>

    <!-----------------login---------------->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="login-form">
            <form action="/examples/actions/confirmation.php" method="post">
                <h2 class="text-center">Log in</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <div class="clearfix">
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>        
            </form>
            <p class="text-center"><a class="switch-toregister-modal" href="#">Create an Account</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>



  </div>
  
 <!-- Bootstrap core JavaScript -->
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('js/file.js') }}"></script>

 

</body>

</html>
