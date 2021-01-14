<?php
session_start();
if (isset($_SESSION['loggedin'])) { ?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="#">
                <img src="/film-project/_images/navbaricon_fp.jpg" width="45" height="40" style="border-radius: 5px">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!--Home-->
                <a class="nav-item nav-link px-3 active" href="/film-project/index.php">
                    <img src="/film-project/_images/_icons/nb_home.svg" height="18"> Home
                </a>
                <!--Billboard-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <img src="/film-project/_images/_icons/nb_billboard.svg" height="18"> Billboard <!-- https://www.flaticon.com/svg/static/icons/svg/3989/3989664.svg -->
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a href="/film-project/_html/_billboard/action.php" class="drop">Action </a></li>
                        <li class="dropdown"><a href="/film-project/_html/_billboard/adventure.php" class="drop">Adventure </a></li>
                        <li class="dropdown"><a href="/film-project/_html/_billboard/comedy.php" class="drop">Comedy </a></li>
                        <li class="dropdown"><a href="/film-project/_html/_billboard/scifi.php" class="drop">Science Fiction </a></li>
                    </ul>
                </li>
                <!--About Us-->
                <a class="nav-item nav-link px-3 active" href="/film-project/_html/about_us.php"> 
                    <img src="/film-project/_images/_icons/nb_aboutUs.svg" height="20"> About us
                </a>
                <!-- Profile -->
                <li class="dropdown">
                    <a href="/film-project/_html/profile.php" data-toggle="dropdown" class="dropdown-toggle">
                        <img src="/film-project/_images/_icons/nb_profile.svg" height="19"> Profile 
                    </a>
                  
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a href="/film-project/_html/mymovies.php" class="drop"> <img src="/film-project/_images/_icons/nb_movies.svg" height="24"> My Movies </a></li>
                    <li class="dropdown"><a href="/film-project/_php/logout.php" class="drop"> <img style="margin-right: 9px;" src="/film-project/_images/_icons/nb_logout.svg" height="16"> Logout </a></li>
                  </ul>
                </li>
            </div>
            </div>
        </nav> 
<?php } else { ?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
        <img src="/film-project/_images/navbaricon_fp.jpg" width="45" height="40" style="border-radius: 5px">
      </a>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <!--Home-->
        <div class="navbar-nav">
          <a class="nav-item nav-link px-3 active" href="/film-project/index.php"> 
            <img src="/film-project/_images/_icons/nb_home.svg" height="18"> Home
          </a>
          <!--Billboard-->
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <img src="/film-project/_images/_icons/nb_billboard.svg" height="23"> Billboard <!-- https://www.flaticon.com/svg/static/icons/svg/3989/3989664.svg -->
           </a>
            <ul class="dropdown-menu">
                <li class="dropdown"><a href="/film-project/_html/_billboard/action.php" class="drop">Action </a></li>
                <li class="dropdown"><a href="/film-project/_html/_billboard/adventure.php" class="drop">Adventure </a></li>
                <li class="dropdown"><a href="/film-project/_html/_billboard/comedy.php" class="drop">Comedy </a></li>
                <li class="dropdown"><a href="/film-project/_html/_billboard/scifi.php" class="drop">Science Fiction </a></li>
            </ul>
          </li>
          <!--About Us-->
          <a class="nav-item nav-link px-3 active" href="/film-project/_html/about_us.php">
            <img src="/film-project/_images/_icons/nb_aboutUs.svg" height="20"> About us
          </a>
          <!--Login-->
          <a class="nav-item nav-link px-3 active" href="/film-project/_html/login.php">
            <img src="/film-project/_images/_icons/nb_login.svg" height="19"> Login
          </a>
        </div>
      </div>
    </nav>
<?php } ?>
