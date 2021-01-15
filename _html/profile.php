<!-- PONEMOS SUS DATOS AQUI POR SI QUIERE CAMBIARLOS -->


<!doctype html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="../_images/navbaricon_fp.jpg">
		<title>Movie showcaser - Profile</title>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
		<link rel="stylesheet" href="../_css/profile.css"> 
    </head>
    <body class="text-center">
        <!-- NAVBAR -->
        <?php
    	    if (session_status() == 0) {
        	   session_start();
      		}
      		include("../_php/navbar.php") 
		?>
		<div class="content">
			<h2>Personal Information Page</h2>
			<p style="text-align: left">Welcome back,<strong> <?=$_SESSION['name']?> </strong>!</p>
			<div>
				<p>Your account details are below: <br><br></p>
				<hr>
				<table>
					<tr>
						<td>Name:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Surnames:</td>
						<td><?=$_SESSION['surnames']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$_SESSION['email']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$_SESSION['password']?></td>
					</tr>
				</table>
			</div>

			<div>
				<p>GUAP@ <strong> <?=$_SESSION['name']?></strong> !</p>
				<img style="width:auto;height:450px;" src="https://marvin.com.mx/wp-content/uploads/2020/01/hide-the-pain-harold-meme-decada-encuesta-imgur-2020.jpg">
			</div>
		</div>
			


    </body>
</html>