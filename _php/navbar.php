<?php
session_start();
if (isset($_SESSION['loggedin'])) { ?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="#">
                <img src="_images/navbaricon_fp.jpg" width="45" height="40" style="border-radius: 5px">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <!--Home-->
                <a class="nav-item nav-link px-3 active" href="./index.php">
                    <img src="https://www.flaticon.es/svg/static/icons/svg/1692/1692828.svg" height="18"> Home
                </a>
                <!--Billboard-->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/2433/2433310.svg" height="23"> Billboard <!-- https://www.flaticon.com/svg/static/icons/svg/3989/3989664.svg -->
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a href="_html/_billboard/action.html" class="drop">Action </a></li>
                        <li class="dropdown"><a href="_html/_billboard/adventure.html" class="drop">Adventure </a></li>
                        <li class="dropdown"><a href="_html/_billboard/comedy.html" class="drop">Comedy </a></li>
                        <li class="dropdown"><a href="_html/_billboard/scifi.html" class="drop">Science Fiction </a></li>
                    </ul>
                </li>
                <!--About Us-->
                <a class="nav-item nav-link px-3 active" href="../_html/about_us.html"> 
                    <img src="https://www.flaticon.com/svg/static/icons/svg/788/788927.svg" height="20"> About us
                </a>
                <!--Profile-->
                <a class="nav-item nav-link px-3 active" href="_php/profile.php">
                    <img src="https://www.flaticon.com/svg/vstatic/svg/3790/3790013.svg?token=exp=1610465506~hmac=3b12d22576d55e77eefffbd68ca5867c" height="19"> Profile
                </a>
                <!-- Logout -->
                <a class="nav-item nav-link px-3 active" href="_php/logout.php">
                    <img src="https://www.flaticon.com/svg/static/icons/svg/3601/3601824.svg" height="19"> Logout
                </a>
            </div>
            </div>
        </nav> 
<?php } else { ?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
        <img src="_images/navbaricon_fp.jpg" width="45" height="40" style="border-radius: 5px">
      </a>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <!--Home-->
        <div class="navbar-nav">
          <a class="nav-item nav-link px-3 active" href="./index.php"> 
            <img src="https://www.flaticon.es/svg/static/icons/svg/1692/1692828.svg" height="18"> Home
          </a>
          <!--Billboard-->
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <img src="https://www.flaticon.com/svg/static/icons/svg/2433/2433310.svg" height="23"> Billboard <!-- https://www.flaticon.com/svg/static/icons/svg/3989/3989664.svg -->
           </a>
            <ul class="dropdown-menu">
                <li class="dropdown"><a href="_html/action.html" class="drop">Action </a></li>
                <li class="dropdown"><a href="_html/adventure.html" class="drop">Adventure </a></li>
                <li class="dropdown"><a href="_html/comedy.html" class="drop">Comedy </a></li>
                <li class="dropdown"><a href="_html/scifi.html" class="drop">Science Fiction </a></li>
            </ul>
          </li>
          <!--About Us-->
          <a class="nav-item nav-link px-3 active" href="_html/about_us.html">
            <img src="https://www.flaticon.com/svg/static/icons/svg/788/788927.svg" height="20"> About us
          </a>
          <!--Login-->
          <a class="nav-item nav-link px-3 active" href="_html/subscribe.html">
            <img src="https://www.flaticon.com/svg/static/icons/svg/1092/1092848.svg" height="19"> Login
          </a>
        </div>
      </div>
    </nav>
<?php } ?>
