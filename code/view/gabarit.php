<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <link rel="shortcut icon" href="#">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="view/content/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="view/css/style_homepage.css" rel="stylesheet">

  <style>
    .bs-example {
      margin: 20px;
    }
  </style>




  <!-- Bootstrap core CSS -->


</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top " id="header">
<<<<<<< Updated upstream
    <!-- <div class="container row">



      <div class="col">
        <a href="action=home" class="navbar-brand">
          <img src="view/content/images/Logo.svg" height="28" alt="Adjuger">
        </a>
      </div>



      <div class="col-md-auto col-auto">
      <div class=" col-2 col-btncoll">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="form-inline my-2 my-lg-0 ">
              <input class="form-control " type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="navbar-nav">
              <a href="#" class="nav-item nav-link active">Accueil</a>
              <a href="#" class="nav-item nav-link">Contacter</a>
            </div>
          </div>
          
          </div>
        </div>



      <div class="col-2  col-lg-2 >
        <div class="navbar-nav">
          <a href="index.php?action=login" class="nav-item nav-link">Login</a>
        </div>
      </div>
    </div> -->
    <div class="container row">
      <nav class="navbar navbar-expand-md navbar-light col-12">
        <div class="col-auto">
          <a href="action=home" class="navbar-brand">
            <img src="view/content/images/Logo.svg" height="28" alt="Adjuger">
          </a>
        </div>

        <form class="form-inline my-2 my-lg-0 col-sm-6 col-8">
          <input class="form-control col-8" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 col-5" type="submit">Search</button>
        </form>


        <div class=" col-sm-5 col-auto col-btncoll">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarCollapse">



            <div class="navbar-nav">
              <a href="#" class="nav-item nav-link active">Accueil</a>
              <a href="#" class="nav-item nav-link">Contacter</a>
              <a href="#" class="nav-item nav-link">login</a>
            </div>
          </div>


=======
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="row">
          <table>
            <td>
              <div class="col col-logo">
                <a href="action=home" class="navbar-brand">
                  <img src="view/content/images/Logo.svg" height="28" alt="Adjuger">
                </a>
              </div></td>
            <td></td>
            <div class="col col-btncoll ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarCollapse">
                <form class="form-inline my-2 my-lg-0">
                  <table>
                    <td> <input class="col form-control mr-sm-2" type="search" placeholder="Search"></td>
                    <td><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></td>
                  </table>
                </form>
                <div class="navbar-nav nav-flex-elements">
                  <a href="#" class="nav-item nav-link Active">Acceuil</a>
                  <a href="#" class="nav-item nav-link Active">Contacter</a>
                  <a href="index.php?action=login" class="nav-item nav-link">Login</a>
                </div>
              </div>
            </div>

          </table>
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
>>>>>>> Stashed changes
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

  <?= $content; ?>
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
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Adjuger 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="view/content/vendor/jquery/jquery.min.js"></script>
  <script src="view/content/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>