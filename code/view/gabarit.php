<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?=$title;?></title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="view/content/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="view/css/style_homepage.css" rel="stylesheet">


        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            .bs-example{
                margin: 20px;
            }
        </style>




      <!-- Bootstrap core CSS -->


    </head>

    <body>
<!--
    <div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="#" class="navbar-brand">
            <img src="view/content/images/Logo.svg" height="28" alt="Adjuger">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <a href="#" class="nav-item nav-link">Messages</a>
                <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>
</div>
-->



<nav class="navbar navbar-expand-lg fixed-top " id="header">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
          <div class="col-logo">
            <a href="#" class="navbar-brand">
                <img src="view/content/images/Logo.svg" height="28" alt="Adjuger">
            </a>
          </div>
          <div col-btncoll>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <a href="#" class="nav-item nav-link">Messages</a>
                <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
              </div>
             
              <div class="navbar-nav ml-auto">
                <a href="index.php?action=login" class="nav-item nav-link">Login</a>
              </div>
              </div>
            </div>
        </nav>
    </div>
  </nav>

      <!-- Navigation 

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="home.php"> <img class="logo" src="view/content/images/Logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <div class="collapse navbar-collapse" id="navbarResponsive">

                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>

                <ul class="navbar-nav ml-auto">
                        <li class="nav-item active col-md-auto">
                          <a class="nav-link text-secondary" href="#">Home
                            <span class="sr-only">(current)</span>
                          </a>
                        </li>
                        <li class="nav-item col-md-auto">
                          <a class="nav-link text-secondary" href="#">About</a>
                        </li>
                        <li class="nav-item col-md-auto">
                          <a class="nav-link text-secondary" href="#">Services</a>
                        </li>
                        <li class="nav-item col-md-auto">
                          <a class="nav-link text-secondary" href="#">Contact</a>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
      </nav>
-->
<!--
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top " id="header">
  <div class="container">
      <div class ="row">
       <a href="#" class="">
            <img class="logo" src="view/content/images/Logo.svg" alt="">  
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <form>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <input class="" type="search" placeholder="Search">
            </li>
            <li class="nav-item active">
              <button class="" type="submit">Search</button>
            </li>
          </ul>
          </form>
      </div>
          
          
      </div>
      <div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
      </div>
    </div>
  </div>
</nav>
-->

      <?=$content; ?>
      <!-- 

<nav class="navbar navbar-expand-lg 
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="col-logo">
          <a href="home.php"> <img class="logo" src="view\\content\\images\\Logo.png" alt=""> 
        </div>

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            </svg>
          </button>
          <div class="navbar-collapse collapse" id="bdNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active col-md-auto">
              <a class="nav-link text-secondary" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item col-md-auto">
              <a class="nav-link text-secondary" href="#">About</a>
            </li>
            <li class="nav-item col-md-auto">
              <a class="nav-link text-secondary" href="#">Services</a>
            </li>
            <li class="nav-item col-md-auto">
              <a class="nav-link text-secondary" href="#">Contact</a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </nav>


      <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>


    <!-- Footer -->
      <footer class="py-5" id="footer">
          <div class="container" >
              <p class="m-0 text-center text-white">Copyright &copy; Adjuger 2021</p>
          </div>
        <!-- /.container -->
      </footer>

      <!-- Bootstrap core JavaScript -->
      <script src="view/content/vendor/jquery/jquery.min.js"></script>
      <script src="view/content/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>