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
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="col-logo">
          <a href="action=home" class="navbar-brand">
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