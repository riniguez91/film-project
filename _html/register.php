<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="../_images/navbaricon_fp.jpg">
		<title>Movie showcaser - Register</title>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
		<link rel="stylesheet" href="../_css/register.css">
    </head>
	<body>
	<!-- NAVBAR -->
    <?php
      if (session_status() == 0) {
        session_start();
      }
      include("../_php/navbar.php") 
    ?>

    <div class="text-center">
		<form class="form-signin" method="post" target="blank.html" autocomplete="off">
				<img class="icon" src="../_images/navbaricon_fp.jpg" alt="Logo Movie Showcase" >
				<h1 class="h3 mb-3 font-weight-normal">Movie Showcase Inc.</h1>

				<label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" style="margin=10px;" name="name" placeholder="Name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" required autofocus>

				<label for="surnames" class="sr-only">Surnames </label>
                <input type="text" class="form-control" name="surnames" placeholder="Surnames" value="<?php if(isset($_POST['surnames'])){echo $_POST['surnames'];}?>" required>
                
				<label for="password" class="sr-only">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                
				<label for="email" class="sr-only">E-mail address </label>
				<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" required>
				
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>

				<div class="back">
              		<a href="./login.php">Back</a>
		        </div>

				<p class="mt-5 mb-3 text-muted">&copy; 2019-2020 by Movie Showcaser</p>
            </form>
        

				
                    
        <?php
    // Change this to your connection info.
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'movie_showcase';
    // Try and connect using the info above.
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_errno()) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // Now we check if the data was submitted, isset() function will check if the data exists.
    if (!isset($_POST['name'], $_POST['surnames'], $_POST['password'], $_POST['email'])) {
        // Could not get the data that should have been sent.
        exit(''); //Please complete the registration form!
    }
    // Make sure the submitted registration values are not empty.
    if (empty($_POST['name'] || $_POST['surnames'] || $_POST['password'] || $_POST['email'])) {
        // One or more values are empty.
        exit('Please complete the registration form');
    }

    // We need to check if the account with that email exists.
    if ($stmt = $con->prepare('SELECT user_id, password FROM users WHERE email = ?')) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			echo "<p style='color:red'><strong>Not a valid Email!</strong><p> ";
			exit(); #exit('Not valid Email!');
        } 
        if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['name']) == 0) {
			echo "<p style='color:red'><strong>Not a valid Name!</strong><p> ";
			exit(); #exit('Not valid Name!');
        }
        if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
			echo "<p style='color:red'><strong>Password must be between 5 <br> and 20 characters long!</strong><p> ";
			exit(); #exit('Password must be between 5 and 20 characters long!');
        }

        // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $stmt->store_result();
        // Store the result so we can check if the account exists in the database.
        if ($stmt->num_rows > 0) {
			// Email already exists   
			echo "<p style='color:red'><strong>Email already exists, please enter another!</strong><p> ";         
            exit;
        } else {
            // Insert new account
            // Username doesnt exists, insert new account
            if ($stmt = $con->prepare('INSERT INTO `users` (email, password, name, surnames) VALUES (?, MD5(?), ?, ?)')) {
                $stmt->bind_param('ssss', $_POST['email'], $_POST['password'], $_POST['name'], $_POST['surnames']);
                $stmt->execute();


	
                header('Location: ./login.php');
                #echo 'You have successfully registered, you can now login!';


            } else {
                // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
                echo 'Could not prepare statement!';
            }
        }
        $stmt->close();
    } else {
        // Something is wrong with the sql statement, check to make sure users table exists with all 3 fields.
        echo 'Could not prepare statement!';
    }
    $con->close();

    ?>

	</div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    </body>

</html>