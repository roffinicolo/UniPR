<?php

///Insert cars
include_once 'database.php';
	if(isset($_POST['submit']))
	{    
		$idcar = $_REQUEST['idcar'];
		$license_plate = $_REQUEST['license_plate'];
		$brand_id = $_REQUEST['brand_id'];
		$model_id = $_REQUEST['model_id'];
		$fuel_id = $_REQUEST['fuel_id'];
		$shift_id = $_REQUEST['shift_id'];
		$cc = $_REQUEST['cc'];
		$hp = $_REQUEST['hp'];
		$years = $_REQUEST['years'];
		$km = $_REQUEST['km'];
		$last_revision = $_REQUEST['last_revision'];
		$last_revision_km = $_REQUEST['last_revision_km'];
		$info = $_REQUEST['info'];
		$price = $_REQUEST['price'];
		$square = $_REQUEST['square'];
		$wide = $_REQUEST['wide'];

		$sql = "INSERT INTO car_list (idcar, license_plate, brand_id, model_id, fuel_id, shift_id, cc, hp, years, km, last_revision, last_revision_km, info, price, square, wide)
		VALUES ('$idcar','$license_plate','$brand_id','$model_id','$fuel_id','$shift_id','$cc','$hp','$years','$km','$last_revision','$last_revision_km','$info','$price','$square','$wide')";
		if (mysqli_query($connect, $sql)) {
			echo '<html>
			<head>
			<title>Redirecting</title>
			<meta http-equiv="refresh" content="10;URL=insert-images.php">
			</head>
			<body>
			<p>
			Caricamento effettuato correttamente!<br>
			Tra 5 secondi avverrà un redirect automatico alla nuova pagina per caricare le immagini.<br>
			Se non vuoi aspettare <a href="insert-images.php">clicca qui</a>.
			</p>
			</body>
		</html>';

     	} 
		 
		 else {
        	echo "Error: " . $sql . ":-" . mysqli_error($conn);
    	 }
     		mysqli_close($conn);
	}

?>