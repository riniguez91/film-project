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
        <form class="form-signin" method="POST">
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
          
          <p class="mt-5 mb-3 text-muted">&copy; 2019-2020 by Movie Showcaser</p>
        </form>

        <?php
#include('../_php/dbconnection.php');
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'movie_showcase';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
  exit();
  #exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT user_id, email, password, name, surnames FROM users WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $email, $password, $name, $surnames);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (MD5($_POST['password']) === $password) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $name; // $_POST['username']
            $_SESSION['id'] = $user_id;
            $_SESSION['password'] = $password;
            $_SESSION['surnames'] = $surnames;
            $_SESSION['email'] = $email;
            header('Location: ../_html/profile.php');
        } else {
            // Incorrect password
            echo "<div class=\"alert alert-warning\" role=\"alert\"><strong>Incorrect username and/or password!</strong></div>";
			      exit();
            #echo 'Incorrect username and/or password!';
        } 
    } else {
        // Incorrect username
        echo "<div class=\"alert alert-warning\" role=\"alert\"><strong>Incorrect username and/or password!</strong></div>";
			  exit();
        #echo 'Incorrect username and/or password!';
    } 
    
	$stmt->close();
}
?>


      </section>
    </main>
	
		<script src="../_scripts/validateform.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>