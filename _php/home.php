<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
        <link rel="stylesheet" href="../_css/userhome.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
	</head>
	<body class="loggedin">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="#">
                <img src="../_images/navbaricon_fp.jpg" width="45" height="40" style="border-radius: 5px">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!--Home-->
                <a class="nav-item nav-link px-3 active" href="../index.php">
                    <img src="https://www.flaticon.es/svg/static/icons/svg/1692/1692828.svg" height="18"> Home
                </a>
                <!--Billboard-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/2433/2433310.svg" height="23"> Billboard <!-- https://www.flaticon.com/svg/static/icons/svg/3989/3989664.svg -->
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a href="../_html/_billboard/action.html" class="drop">Action </a></li>
                        <li class="dropdown"><a href="../_html/_billboard/adventure.html" class="drop">Adventure </a></li>
                        <li class="dropdown"><a href="../_html/_billboard/comedy.html" class="drop">Comedy </a></li>
                        <li class="dropdown"><a href="../_html/_billboard/scifi.html" class="drop">Science Fiction </a></li>
                    </ul>
                </li>
                <!--About Us-->
                <a class="nav-item nav-link px-3 active" href="../_html/about_us.html"> 
                    <img src="https://www.flaticon.com/svg/static/icons/svg/788/788927.svg" height="20"> About us
                </a>
                <!--Profile-->
                <a class="nav-item nav-link px-3 active" href="profile.php">
                    <img src="https://www.flaticon.com/svg/vstatic/svg/4021/4021443.svg?token=exp=1610450775~hmac=45f9b7d9cf5cc571491bf261d496f66b" height="19"> Profile
                </a>
                <!-- Logout -->
                <a class="nav-item nav-link px-3 active" href="logout.php">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/3601/3601824.svg" height="19"> Logout
                </a>
            </div>
            </div>
        </nav>        
    
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>