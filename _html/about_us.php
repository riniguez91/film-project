<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Movie showcaser - About Us</title>
        <link rel="icon" href="../_images/navbaricon_fp.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../_images/navbaricon_fp.jpg">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../_css/aboutus.css">
        <link rel="stylesheet" href="../_css/footer.css">
        <!-- <script src="../_scripts/scripts.js"></script> -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    </head>

    <body>
      <!-- NAVBAR -->
      <?php
      if (session_status() == 0) {
        session_start();
      }
      include("../_php/navbar.php") 
      ?>

        <div class="jumbotron jumbotron-fluid">
            <div class="title container">
              <h1 class="display-3">Meet the team!</h1>
              <p class="lead">Most of us are very special individuals and we dedicate our lifes to this special bussiness, we can´t wait to meet you!</p>
            </div>
          </div>

          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="../_images/author-1.jpg" alt="author-1">
              <div class="card-body">
                <h2 class="card-title">General Manager</h2>
                <p class="card-text">I’ve always approached things with hunger and just enough fear. Plenty of confidence, you know, but just enough fear to work extra hard, paralyzing fear does nothing.</p>
                <footer class="blockquote-footer text-right">2020 <cite title="Source Title">Victor Hernandez</cite></footer>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../_images/author-2.jpg" alt="author-2">
              <div class="card-body">
                <h3 class="card-title">Executive Producer</h3>
                <p class="card-text">My thought process has always been, I’m excited to show you what my version of this story would look like. You’re going to be able to get a little condensed show. That took the pressure off getting the job</p>
                <footer class="blockquote-footer text-right">2019 <cite title="Source Title">Ramon Iñiguez</cite></footer>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="../_images/author-3.jpg" alt="author-3">
              <div class="card-body">
                <h4 class="card-title">Shop Owner</h4>
                <p class="card-text">For me, our job as artists is to serve the story, serve the director, and serve the fellow actors. And if you do that, by osmosis you’re serving yourself because you’ll get the best out of yourself</p>
                <footer class="blockquote-footer text-right">2021 <cite title="Source Title">Harold</cite></footer>
              </div>
            </div>
        </div>
        
        <div class="card text-center">
            <div class="card-header"></div>
            <div class="card-body">
              <h4>Check the nearest theaters!</h4>
            </div>
            <div class="card-footer text-muted">
              Hollywood, Los Angeles, California [USA]
            </div>
          </div>


        <!-- Map -->
        <div id="mapid"></div>
        <script>
    
          var mymap = L.map('mapid').setView([34.1007085,-118.3352845], 15);
          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
              maxZoom: 18,
              attribution: 'Map of Theaters | Main Home: <a href="../index.html"> Movie Showcaser </a>',
              id: 'mapbox/streets-v11',
              tileSize: 512,
              zoomOffset: -1
          }).addTo(mymap);
      
          L.marker([34.1019421, -118.3305904]).addTo(mymap).bindPopup("Hollywood Pacific Theater");
          L.marker([34.1000782, -118.3286253]).addTo(mymap).bindPopup("Ivar Theatre");
          L.marker([34.1013106, -118.3353487]).addTo(mymap).bindPopup("Hologram USA Theatre");
          L.marker([34.100687,  -118.3364051]).addTo(mymap).bindPopup("Cinelounge Drive-In Hollywood");
          L.marker([34.1008737, -118.3366991]).addTo(mymap).bindPopup("The Egyptian Theatre Hollywood");
          L.marker([34.1009014, -118.339924]).addTo(mymap).bindPopup("Teatro El Capitán");
          L.marker([34.1021342, -118.3403686]).addTo(mymap).bindPopup("TCL Chinese 6 Theatres");
          L.marker([34.1026424, -118.3405078]).addTo(mymap).bindPopup("Dolby Theatre");
          var popup = L.popup();
  
          //Pop-Up
          function onMapClick(e) { popup.setLatLng(e.latlng).setContent("You clicked the map at " + e.latlng.toString()).openOn(mymap); }
          mymap.on('click', onMapClick);      
      </script>
        <!-- End Map-->
        <br><br>

      <!-- Footer -->
    <footer class="bg-dark text-center">
      <div class="footer-links">
        <div> 
          <ul class="list-inline footer-social-networks">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/"><img src="../_images/_icons/instagram.svg" height="30" width="30" alt="Instagram"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.twitter.com/"><img src="../_images/_icons/twitter.svg" height="30" width="30" alt="Twitter"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.youtube.com/"><img src="../_images/_icons/youtube.svg" height="30" width="30" alt="Youtube"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/"><img src="../_images/_icons/facebook.svg" height="30" width="30" alt="Facebook"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.google.com/"><img src="../_images/_icons/google-mas.svg" height="30" width="30" alt="Google+"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.reddit.com/"><img src="../_images/_icons/reddit.svg" height="30" width="30" alt="Reddit"></a>
            </li> 
          </ul>
        </div>

        <!-- Footer -->
        <div> <!-- PLACE FOOTER LINKS HERE -->
          <ul class="list-inline footer-links">
            <li class="list-inline-item">
              <a href="#" class="text-white">Terms of use</a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="text-white">Privacy policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="text-white">Work with us</a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="text-white">Media</a>
            </li>
          </ul>
        </div>
        <div>
          <address class="text-white">
            <strong>Movie Showcase Inc.</strong><br>
            Calle Tajo, s/n, 28670<br>
            <img src="../_images/_icons/location-pin.svg" height="16" alt="Location icon">  Villaviciosa de Odón, Madrid<br>
            <img src="../_images/_icons/phone.svg" height="15" alt="Phone icon">  +34 674 231 583<br>
            <a href="mailto:#" style="text-decoration: none;" class="text-success">movieshowcase@gmail.com</a>
          </address>
        </div>
      </div>
      <div class="footer-copyright">
        <span class="text-light footer-copyright">© 2019-2020 by Movie Showcaser</span>
      </div>
    </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
