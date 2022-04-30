<?php
  require_once("database.php");
  require_once("functions.php");
?>

<!DOCTYPE html>
<html lang="it">
  
  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="assets/images/favicon.png">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

      <title>NR Auto</title>

      <!-- Bootstrap CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Additional CSS Files -->
      <link rel="stylesheet" href="assets/css/fontawesome.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="assets/images/nrauto-logo.svg"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item"><a class="nav-link" href="auto.php">Auto</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="chi-siamo.html">Chi siamo</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="contatti.php">Contatti</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Il portale n.1</h4>
            <h2>Per le auto di lusso</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Il portale n.1</h4>
            <h2>Per le hypercar</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Il portale n.1</h4>
            <h2>Per i collezionisti</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="latest-products"; align="center" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>I nostri ultimi arrivi</h2>
              <a href="auto.php"> scopri altro <i class="fa fa-angle-right"></i></a>
            </div>

            <!-- Cars -->
							<section class="tiles">
                <?php
                  if ($car_list = sqlCommandExecute("SELECT * FROM car_list INNER JOIN car_brand ON car_brand.id=car_list.brand_id INNER JOIN car_model ON car_model.id=car_list.model_id ORDER BY idcar DESC LIMIT 6"))
                    foreach ($car_list as $car)
                      echo htmlGetVehicleTile($car);
                ?>
              </section>
          </div>
        </div>
      </div>
    </div>

    <!-- Informations -->
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Su di Noi</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Nati dalla passione per tutto ciò che ha quattro ruote, abbiamo deciso<br> 
                di evolvere il nostro core business verso il mercato dell'auto di lusso.<br> 
                In un mercato in forte crescita siamo leader nella compravendita di<br> 
                auto di lusso da collezione, da track day e dailycars.<br>
              Cosa ci contraddistingue:</p>
              <ul class="featured-list">
                <li><a>Pagamento immediato alla consegna</a></li>
                <li><a>Compravendita su commissione</a></li>
                <li><a>Agenti per aste di automobili</a></li>
                <li><a>Importazione e dogana</a></li>
              </ul>
              <a href="chi-siamo.html" class="filled-button">Scopri chi siamo</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/su-di-noi-home.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Hai domande? Hai trovato quel che fa per te all'interno del nostro parco auto?</h4>
                  <p>Contattaci e fisseremo insieme un appuntamento per scoprire assieme la soluzione perfetta per te.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contatti.php" class="filled-button">Contatti</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> NR Auto by: <a href="https://www.nicoloroffi.it/">Nicolò Roffi</a> e Matteo Lupica Cordazzaro.</p>
              <a href="login.php"><img src="assets/images/lock.png"width="22" height="22"></a>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>