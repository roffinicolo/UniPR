<?php
  require_once("database.php");
  require_once("functions.php");
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
                <li class="nav-item"><a class="nav-link" href="contatti.php">Contatti</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- Car information -->
        <?php
          $car_id = isset($_GET["listing_id"]) ? $_GET["listing_id"] : 1;
          $car_info = sqlCommandExecuteSingle("SELECT idcar, car_brand.bname, car_model.mname, car_fuel.fname, car_shift.sname, km, cc, hp, price, years, shift_id, fuel_id, last_revision_km, last_revision, info FROM car_list INNER JOIN car_brand ON car_brand.id=car_list.brand_id INNER JOIN car_model ON car_model.id=car_list.model_id INNER JOIN car_shift ON car_list.shift_id=car_shift.id INNER JOIN car_fuel ON car_list.fuel_id=car_fuel.id WHERE car_list.idcar=$car_id");
          $car_images = sqlCommandExecuteSingle("SELECT wide FROM car_list WHERE id = $car_id ORDER BY id ASC");

          foreach($car_info as $key => $value)
            $car_info->$key = $car_info->$key == "" ? NULL : $car_info->$key; //Null values for empty strings
        ?>
      </header>



    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-color: #b8b1b0;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4 class=""><?php if (!is_null($car_info->price)) //Price
                            echo "" . number_format($car_info->price, 0, '.', ' ') . " €" ?></h4>
              <h2><?php if (!is_null($car_info->bname)) //Brand
                            echo "" . $car_info->bname . "" ?>
                  <?php if (!is_null($car_info->mname)) //Model
                            echo "" . $car_info->mname . "" ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div>
              <?php
              $database = mysqli_connect($host, $user, $password, $db);
              $idcar = isset($_GET["listing_id"]) ? $_GET["listing_id"] : 1;
              $sqldetails = "SELECT wide FROM car_list WHERE idcar = $idcar";
              $mq = $database->query($sqldetails) or die ("Error query");
              $row = mysqli_fetch_array($mq) or die("Error query");
              $s=$row['wide'];
              echo $row[''];
              echo '<img src="'.$s.'"" style="width:100%;height:100%">';
              ?>
            </div>
          </div>
          <div class="col-md-6">
            <form action="#" method="post" class="form">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Km</span>
                         <strong class="pull-right">
                          <?php if (!is_null($car_info->km)) //Km
                            echo "" . number_format($car_info->km, 0, '.', ' ') . " km" ?> </strong>
                    </div>
               </li>
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Anno</span>
                         <strong class="pull-right">
                           <?php if (!is_null($car_info->years)) //Years
                            echo "" . $car_info->years . "" ?> </strong>
                    </div>
               </li>
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Alimentazione</span>
                         <strong class="pull-right">
                           <?php if (!is_null($car_info->fname)) //Fuel
                            echo "" . $car_info->fname . "" ?> </strong>
                    </div>
               </li>
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Cambio</span>
                         <strong class="pull-right">
                           <?php if (!is_null($car_info->sname)) //Shift
                            echo "" . $car_info->sname . "" ?> </strong>
                    </div>
               </li>
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Cilindrata e Cavalli</span>
                         <strong class="pull-right">
                           <?php if (!is_null($car_info->cc)) //CC
                            echo "" . number_format($car_info->cc, 0, '.', '') . " cc / " ?> 
                            <?php if (!is_null($car_info->hp)) //HP
                            echo "" . number_format($car_info->hp, 0, '.', '') . " cv" ?> </strong>
                    </div>
               </li>
               <li class="list-group-item">  
                    <div class="clearfix">
                         <span class="pull-left">Revisione e KM</span>
                         <strong class="pull-right">
                           <?php if (!is_null($car_info->last_revision)) //Last revision Km
                            echo "" . $car_info->last_revision . " / " ?>
                           <?php if (!is_null($car_info->last_revision_km)) //Last revision Km
                            echo "" . number_format($car_info->last_revision_km, 0, '.', '') . " km" ?> </strong></p>     
                    </div>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-heading">
              <h2>Descrizione</h2>
            </div>
            <div class="left-content">
              <p align="justify"> Informazioni: <strong class="">
                  <?php if (!is_null($car_info->info)) //Car Info
                  echo "" . $car_info->info . "" ?> </strong>
              </p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="section-heading">
              <h2>Contatti Referente</h2>
            </div>
            <div class="left-content">
              <p>
                <span>Nome: </span>
                <strong><?php echo $COMPANY_REFERENT; ?></strong>
              </p>
              <p>
                <span>Telefono: </span>
                <strong>
                <?php echo $COMPANY_LAND_PHONE; ?></strong>
              </p>
              <p>
                <span>Cellulare: </span>
                <strong><?php echo $COMPANY_MOBILE_PHONE; ?></strong>
              </p>
              <p>
                <span>Email: </span>
                <strong><?php echo $COMPANY_EMAIL; ?></strong>
              </p>
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
