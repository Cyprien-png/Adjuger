<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title><?=$title;?></title>

  <!-- Bootstrap core CSS -->
  <link href="view/content/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="view/content/css/shop-homepage.css" rel="stylesheet">

</head>

    <body>

      <!-- Navigation -->

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


      <!-- ----- CONTENT ----- -->
      <?=$content; ?>
      <!-- ----- END CONTENT ----- -->
<!--
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <button id = "bouton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="col-logo">
          <a href="home.php"> <img class="logo" src="content\\images\\Logo.png" alt=""> 
        </div>

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            </svg>
          </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
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
            <form class="form-inline my-2 my-lg-0">
            </form>
      </div>
  </div>
</nav>


<nav class="navbar navbar-expand-lg fixed-top " id="header">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="col-logo">
          <a href="home.php"> <img class="logo" src="content\\images\\Logo.png" alt=""> 
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
-->

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
      <script src="content/vendor/jquery/jquery.min.js"></script>
      <script src="content/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>