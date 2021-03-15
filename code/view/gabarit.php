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
<nav class="navbar navbar-expand-lg fixed-top navbar-expand-md navbar-light " id="header">
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
      <div class=" col-3 col-sm-2 col-md-1 col-lg-1">
        <a href="/index.php?action=home" class="navbar-brand">
          <img src="view/content/images/Logo.svg" height="28" alt="Adjuger">
        </a>
      </div>



      <div class=" col-sm-2 col-3 col-btncoll">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>


      <div class="collapse navbar-collapse" id="navbarCollapse">

        <form class="form-inline my-2 my-lg-0 col-8 col-sm-10 col-md-6 col-lg-7">
          <input class="form-control col-7 col-sm-7 col-md-8 col-lg-7" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 col-5 col-sm-2 col-md-4  col-lg-3" type="submit">Search</button>
        </form>
        <div class="navbar-nav col-sm-5 col-md-2 col-lg-4">
        <table class="container">
        <td><a href="/index.php?action=home" class="nav-item nav-link active">Accueil</a></td>
        <td><a href="#" class="nav-item nav-link ">Contacter</a></td>
        <?php if (isset($_SESSION['userLog'])) :?>
            <td><a href="/index.php?action=user"><img src="/view/content/images/user_icon.png" class="img-fluid"></a></td>
        <?php else :?>
            <td><a href="/index.php?action=login" class="nav-item nav-link ">Connexion</a></td>
        <?php endif; ?>
        </table>
          
        </div>
      
      </div>


    </div>
  </nav>

  <?= $content; ?>


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