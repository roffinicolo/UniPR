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


    <!-- Insert Cars -->
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Inserimento Auto - Controllare nel DB: <b>Brand, Modello, Carburante e Cambio</b>.</h4>
                        <form action="upload-cars.php" method="post">
                            <div class="form-group">
                                <label>ID Auto</label>
                                <input type="number" name="idcar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Targa</label>
                                <input type="text" name="license_plate" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ID Brand</label>
                                <input type="number" name="brand_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ID Modello</label>
                                <input type="number" name="model_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ID Carburante</label>
                                <input type="number" name="fuel_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>ID Cambio</label>
                                <input type="number" name="shift_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Cilindrata</label>
                                <input type="number" name="cc" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Cavalli</label>
                                <input type="number" name="hp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Anno</label>
                                <input type="number" name="years" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>KM</label>
                                <input type="number" name="km" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Data ultima revisione</label>
                                <input type="date" name="last_revision" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>KM ultima revisione</label>
                                <input type="number" name="last_revision_km" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Breve descrizione</label>
                                <input type="text" name="info" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Prezzo</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Immagine quadrata</label>
                                <input type="text" name="square" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Immagine grande</label>
                                <input type="text" name="wide" class="form-control">
                            </div>
                            <div class="form-group">
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
                                <input type="submit" class="filled-button" name="submit" value="Carica">
                            </div> 
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </body>
</html>