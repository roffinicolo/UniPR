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

                <li class="nav-item"><a class="nav-link" href="auto.php">Auto</a></li>

                <li class="nav-item"><a class="nav-link" href="chi-siamo.html">Chi siamo</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contatti.php">Contatti</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/hero-auto.jpg);">
      <div class="container">
        <div class="row">
         <div class="col-md-12">
          <div class="text-content">
            <h4>Le nostre</h4>
            <h2>Auto</h2>
          </div>
        </div>
      </div>
    </div>
    </div>


      <!-- Cars -->
      <div class="products"; align="center">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
            <label for="search"></label>
              <section class="tiles">

                <?php
                    if ($search_query = sqlCommandExecute("SELECT * FROM car_list INNER JOIN car_brand ON car_brand.id=car_list.brand_id INNER JOIN car_model ON car_model.id=car_list.model_id ORDER BY car_list.idcar DESC;"))
                      foreach ($search_query as $query)
                      echo htmlGetVehicleTile($query);

                     $get_obj = (object) $_GET; //Transforming it in an object makes it possible to use -> syntax and access variables inside string
                      
                      
                      $search_query .= isset($get_obj->bname) && $get_obj->bname != "any" ? " AND LOWER(bname) LIKE '%" . strtolower($get_obj->bname) . "%'" : ""; //Brand
                      $search_query .= isset($get_obj->mname) && $get_obj->mname != "any" ? " AND LOWER(mname) LIKE '%" . strtolower($get_obj->mname) . "%'" : ""; //Model
                      $search_query .= isset($get_obj->price) && $get_obj->price != "any" ? " AND price <= $get_obj->price" : ""; //Price
                      $search_query .= isset($get_obj->cc) && $get_obj->cc != "any" ? " AND km >= $get_obj->cc" : ""; //Cc
                      $search_query .= isset($get_obj->hp) && $get_obj->hp != "any" ? " AND km >= $get_obj->hp" : ""; //Hp
                      $search_query .= isset($get_obj->km) && $get_obj->km != "any" ? " AND km >= $get_obj->km" : ""; //Km
                      $search_query .= isset($get_obj->dir) && $get_obj->dir != "any" ? " AND km >= $get_obj->dir" : ""; //Img

                  ?>
              </section>     
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
