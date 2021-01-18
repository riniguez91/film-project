<!doctype html>
<html lang="es">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="../_images/navbaricon_fp.jpg">
		<title>Movie showcaser - Mymovies</title>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
		<link rel="stylesheet" href="../_css/mymovies.css">

    </head>
    <body class="text-center">
        <!-- NAVBAR -->
        <?php
			#if(session_status() !== PHP_SESSION_ACTIVE) session_start();
      		include("../_php/navbar.php"); 
    	?>

		<br>
        <h1 class="display-4 fp-heading text-center" >My movies!</h1>
        <hr class="featurette-divider" style="width:1200px;">
        <br>
		
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>	
	<script src="/film-project/_scripts/mymovies.js"></script>

    </body>

</html>