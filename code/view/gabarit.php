<?php?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="content/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="content/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->

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

    <?php require "home.php" ?>

<!-- Footer -->
  <footer class="py-5" id="footer">
      <div class="container" >
          <p class="m-0 text-center text-white">Copyright &copy; Adjuger 2021</p>
      </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>