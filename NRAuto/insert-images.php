<?php
    // Initialize the session
    session_start();
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
                    <a class="nav-link" href="controlpanel.php">Pannello di controllo
                    </a>
                </li>  
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page content -->
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Carica l'immagine, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h4>

                  <?php
                    if(isset($_POST['submit'])){
                      $countfiles = count($_FILES['file']['name']);
                      for($i=0;$i<$countfiles;$i++){
                          $filename = $_FILES['file']['name'][$i];
                          move_uploaded_file($_FILES['file']['tmp_name'][$i],'assets/images/cars/'.$filename);
                      }
                    }
                  ?>

                  <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <input class="form-group" type="file" name="file[]" id="file" multiple="multiple" required="required">
                      </div>
                        <style> input[type=submit] {
                          background-color: #f33f3f;
                          color: #ffffff;
                          font-size: 14px;
                          text-transform: capitalize;
                          font-weight: 300;
                          padding: 10px 20px;
                          border-radius: 5px;
                          border: none;
                          display: inline-block;
                          transition: all 0.3s;
                          }
                          a.filled-button:hover {
                          background-color: #121212;
                          color: #ffffff;
                          border: none;
                          }
                        </style>
                    <input class="filled-button" type="submit" value="Carica" name="submit">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>                
  </body>
</html>