<!doctype html>
<html lang="es">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="../_images/navbaricon_fp.jpg">
		<title>Movie showcaser - Login</title>
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
		
    <main>
      <section>
        <form class="form-signin" action="../_php/authenticate.php" method="POST">
          <img class="icon" src="../_images/navbaricon_fp.jpg" alt="Logo Movie Showcase" >
          <h1 class="h3 mb-3 font-weight-normal">Movie Showcase Inc.</h1>
          <label for="inputEmail" class="sr-only">E-mail address </label>
          <input type="email" name="username" id="inputEmail" class="form-control" placeholder="E-mail address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <div class="back">
              <a href="./register.php">Don't have an account?</a>
          </div>
          <!-- <button class="btn btn-lg btn-block" type="submit">Register</button>-->
          <p class="mt-5 mb-3 text-muted">&copy; 2019-2020 by Movie Showcaser</p>
        </form>
      </section>
    </main>
	
		<script src="../_scripts/validateform.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>