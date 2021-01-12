<!doctype html>
<html lang="es">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="../_images/navbaricon_fp.jpg">
		<title>Movie showcaser - Register</title>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
		<link rel="stylesheet" href="../_css/login.css">
    </head>
    <body class="text-center">
        <!-- NAVBAR -->
        <?php
    	    if (session_status() == 0) {
        	   session_start();
      		}
      		include("../_php/navbar.php") 
    	?>
        <div>
            <h1>NO MOVIES :)</h1>
            <img src="https://marvin.com.mx/wp-content/uploads/2020/01/hide-the-pain-harold-meme-decada-encuesta-imgur-2020.jpg" alt="">
        </div>

    </body>
</html>