<?php
  require_once("constants.php");
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
                <li class="nav-item"><a class="nav-link" href="auto.php">Auto</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="chi-siamo.html">Chi siamo</a>
                </li>
                <li class="nav-item"><a class="nav-link active" href="contatti.php">Contatti</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/hero-contatti.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Domande?</h4>
              <h2>Contattaci</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Find us -->
    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Dove puoi trovarci</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45310.71460083505!2d10.253776082056678!3d44.78244315059197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47806bbc95ca1e2f%3A0x2eb97a32c0305752!2sSS62%2C%2043125%20Parma%20PR!5e0!3m2!1sit!2sit!4v1646929623848!5m2!1sit!2sit" width="100%" height="343px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>I nostri uffici</h4>
              <p><?php echo $COMPANY_ADDRESS; ?>
                <br><br><strong>Orari</strong>:
                <br>Lunedì - Venerdi 9:00 - 13:00 e 15:00 - 19:30
                <br><br><strong>Telefono</strong>: <?php echo $COMPANY_LAND_PHONE; ?>
                <br><strong>Cellulare</strong>: <?php echo $COMPANY_MOBILE_PHONE; ?>
                <br><strong>Mail</strong>: <?php echo $COMPANY_EMAIL; ?></p>
              <ul class="social-icons">
                <li><a href="https://www.facebook.com/roffinicolo98"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/nicolo_roffi/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/nicolò-roffi-aa2b57156/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/roffi_nicolo"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Invia un messaggio</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="mail.php" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Nome" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Oggetto" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Messaggio" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Invia Messaggio</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/form-contatti.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;"></h5>
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
