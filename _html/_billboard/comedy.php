<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Movie showcaser - Comedy</title>
    <link rel="icon" href="../../_images/navbaricon_fp.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../_css/billboard.css">
    <link rel="stylesheet" href="../../_css/footer.css">
</head>
<body>
  <!-- NAVBAR -->
  <?php
  if (session_status() == 0) {
    session_start();
  }
  include("../../_php/navbar.php") 
  ?> 
  
    <!-- CAROUSEL -->
    <!-- Comedy -->
    <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../_images/torrente_fp.jpg" class="d-block w-100" alt="Torrente">
            </div>
            <div class="carousel-item">
                <img src="../../_images/ochoapellidosvascos_fp.jpg" class="d-block w-100" alt="Ocho Apellidos Vascos">
            </div>
            <div class="carousel-item">
                <img src="../../_images/badboys_fp.jpg" class="d-block w-100" alt="Bad Boys">
            </div>
        </div> 
        <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- CONTAINER -->
    <div class="container marketing">
        <!--
        <br>
        <h1>BEST COMEDY ACTORS</h1>
        <hr class="featurette-divider">

         TOP ACTORS 
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Premios_Goya_2018_-_Santiago_Segura_%28cropped%29.jpg/1200px-Premios_Goya_2018_-_Santiago_Segura_%28cropped%29.jpg" alt="Santiago Segura">
              <div class="card-body">
                <h2 class="card-title">Santiago Segura</h2>
                <p class="card-text">Born in Madrid, Santiago Segura started his career by making his first short movie at the age of fourteen. After studying Arts in Madrid, he finally decided to become a filmmaker. His first short film Relatos de la medianoche (1989) was made with a budget of only 7.000 pts. (about 60 dollars).</p>
                <br><br><br>
                <p><a class="btn btn-secondary" href="https://www.imdb.com/name/nm0782213/bio?ref_=nm_ov_bio_sm" role="button">More information &raquo;</a></p>
                <footer class="blockquote-footer text-right">Someone famous in <cite title="Source Title">IMDB</cite></footer>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="https://pyxis.nymag.com/v1/imgs/4aa/ff9/2572eb3661a726b262813d111f50ede91c-18-will-smith-chatroom-silo.rvertical.w330.png" alt="Will Smith">
              <div class="card-body">
                <h2 class="card-title">Will Smith</h2>
                <p class="card-text">Willard Carroll "Will" Smith, Jr. (born September 25, 1968) is an American actor, comedian, producer, rapper, and songwriter. He has enjoyed success in television, film, and music. In April 2007, Newsweek called him "the most powerful actor in Hollywood". Smith has been nominated for five Golden Globe Awards, two Academy Awards, and has won four Grammy Awards.</p>
                <br>
                <p><a class="btn btn-secondary" href="https://www.imdb.com/name/nm0000226/bio?ref_=nm_ov_bio_sm" role="button">More information &raquo;</a></p>
                <footer class="blockquote-footer text-right">Someone famous in <cite title="Source Title">IMDB</cite></footer>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="https://fotos00.laopiniondemalaga.es/2019/08/23/690x278/danirovira-t.jpg" alt="Dani Rovira">
              <div class="card-body">
                <h2 class="card-title">Dani Rovira</h2>
                <p class="card-text">Dani Rovira was born on November 1, 1980 in Málaga, Málaga, Andalucía, Spain as Daniel Rovira de Rivas. He is an actor and writer, known for Ocho apellidos vascos (2014), Taxi a Gibraltar (2019) and Los Japón (2019).</p>
                <br><br><br><br><br>
                <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/Dani_Rovira" role="button">More information &raquo;</a></p>
                <footer class="blockquote-footer text-right">Someone famous in <cite title="Source Title">IMDB</cite></footer>
              </div>
            </div>
        </div> -->

        <br><br>  
        <h1 class="display-4 fp-heading text-center">Everyone is a comedian! </h1>
        <hr class="featurette-divider">
        <!--1-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Torrente 2: Mission in Marbella <span class="text-muted"> 2001.</span></h2>
            <p class="lead">Torrente has now moved to Marbella, where, after being wiped out of the money he had gained, has returned to private investigation. But in one of his cases he gets involved in the middle of a villain's missile plot to destroy the city and his own uncle's blackmail operation... and he knows nothing.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/71D61ntan3L._AC_SL1058_.jpg" alt="Torrente image">
          </div>
        </div>
  
        <hr class="featurette-divider">
        <!--2-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Spanish Afair <span class="text-muted"> 2014.</span></h2>
            <p class="lead">A comedy about a rich kid from Andalusia who passes himself off as Basque in order to win the heart of the only woman who ever resisted his charms. Rafa (Dani Rovira) has to travel to the north of Spain to follow Amaia (Clara Lago), a basque girl he has met in Seville, despite of the advisements of his friends, who think he will fail in his attempt to seduce Amaia. The movie has been compared with the 2008 French comedy "Bienvenue chez les Ch'tis", about a southern Frenchma</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://www.filmfactoryentertainment.com/wp-content/uploads/2017/07/SpanishAffair-700x1000.jpg" alt="Ocho Apellidos Vascos image">
          </div>
        </div>
  
        <hr class="featurette-divider">
        <!--3-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Bad Boys for Life <span class="text-muted"> 2020.</span></h2>
            <p class="lead">In this third stallmment of Bad Boys franchise the Bad Boys Mike Lowrey (Will Smith) and Marcus Burnett (Martin Lawrence) are back together for one last ride. Almost 17 years after taking down a Cuban drug lord, Marcus leads a peaceful family life. But horrors of the past haunt his partner Mike, who must do whatever it takes to protect himself and take down a drug cartel, and finally they team up with Miami police department and its elite AMMO team’s challenge to take down Armando Armas (Jacob Scipio), the young leader of a Mexican drug cartel.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://m.media-amazon.com/images/M/MV5BMWU0MGYwZWQtMzcwYS00NWVhLTlkZTAtYWVjOTYwZTBhZTBiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg" alt="Bad Boys image">
          </div>
        </div>

        <hr class="featurette-divider">
        <!--4-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">The House with a Clock in Its Walls <span class="text-muted"> 2018.</span></h2>
            <p class="lead">A young orphan named Lewis Barnavelt aids his magical uncle in locating a clock with the power to bring about the end of the world.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://m.media-amazon.com/images/M/MV5BMTk1MzM1ODEwOV5BMl5BanBnXkFtZTgwMTE0OTA4NTM@._V1_.jpg" alt="The House with a Clock in Its Walls image">
          </div>
        </div>

        <hr class="featurette-divider">
        <!--5-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Charlie's Angels <span class="text-muted"> 2019.</span></h2>
            <p class="lead">In Banks’ bold vision, Kristen Stewart, Naomi Scott, and Ella Balinska are working for the mysterious Charles Townsend, whose security and investigative agency has expanded internationally. With the world’s smartest, bravest, and most highly trained women all over the globe, there are now teams of Angels guided by multiple Bosleys taking on the toughest jobs everywhere. The screenplay is by Elizabeth Banks from a story by Evan Spiliotopoulos and David Auburn.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/71-dOhA-LOL._AC_SL1334_.jpg" alt="Charlie's Angels image">
          </div>
        </div>

        <hr class="featurette-divider">
        <!--6-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Peter Rabbit <span class="text-muted"> 2018.</span></h2>
            <p class="lead">Thomas and Bea are now married and living with Peter and his rabbit family. Bored of life in the garden, Peter goes to the big city, where he meets shady characters and ends up creating chaos for the whole family. Follow-up to the 2018 film, 'Peter Rabbit'.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://i.pinimg.com/originals/81/bc/38/81bc38779d88c6e6bb0ececa0335baa5.jpg" alt="Peter Rabbit image">
          </div>
        </div>
  
        <hr class="featurette-divider">
        <!--7-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">How the Grinch Stole Christmas <span class="text-muted"> 2000.</span></h2>
            <p class="lead">Inside a snowflake, high atop Mt. Crumpit, just north of town, a certain cave-dwelling curmudgeon peers down on the Christmas-adoring Whos of Whoville as they make their frantic Yuletide preparation. And this isn't your run-of-the-mill sourpuss. This is the Grinch (Jim Carey), and he is positively sick of those nog-sucking cheermongers. Why is the Grinch - well - so Grinchy? Nobody knows, not even his lone companion, the endlessly oppressed canine, Max. It could be because his head wasn't screwed on just right ; or maybe his shoes were too tight; or maybe because his heart was two sizes too small. With an expression that goes from glum to glummer and then to a malevolent lip-curling grin as a wicked light bulb clicks over his head - a wonderful, awful idea is born.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/61DTHfzzJ-L._AC_SL1357_.jpg" alt="How the Grinch Stole Christmas image">
          </div>
        </div>

        <hr class="featurette-divider">
        <!--8-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Ocean's 8 <span class="text-muted"> 2018.</span></h2>
            <p class="lead">Danny Ocean's estranged sister Debbie attempts to pull off the heist of the century at New York City's star-studded annual Met Gala. Her first stop is to assemble the perfect crew: Lou, Rose, Daphne Kluger, Nine Ball, Tammy, Amita, and Constance.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://pics.filmaffinity.com/Ocean_s_8-692056246-large.jpg" alt="Ocean's 8 image">
          </div>
        </div>
  
        <hr class="featurette-divider">
        <!--9-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">The Croods <span class="text-muted"> 2013.</span></h2>
            <p class="lead">"The Croods" are an eccentric family of cavemen, who survive the harsh terrain by living accordingly to a strict set of rules. But when their home is destroyed in the wake of an impending disaster known as "The End", they are forced to leave their home of shelter and security, and into the wilderness of the unknown to find a new home.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/A1EeXBwmPiL._AC_SL1500_.jpg" alt="The Croods image">
          </div>
        </div>

        <hr class="featurette-divider">
        <!--10-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Deadpool <span class="text-muted"> 2016.</span></h2>
            <p class="lead">Based upon Marvel Comics’ most unconventional anti-hero, "Deadpool" tells the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/91qmrdkBViL._AC_SL1500_.jpg" alt="Deadpool image">
          </div>
        </div>
  
        <hr class="featurette-divider">

    </div>
    <!-- Footer -->
    <footer class="bg-dark text-center">
      <div class="footer-links">
        <div> 
          <ul class="list-inline footer-social-networks">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/"><img src="../../_images/_icons/instagram.svg" height="30" width="30" alt="Instagram"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.twitter.com/"><img src="../../_images/_icons/twitter.svg" height="30" width="30" alt="Twitter"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.youtube.com/"><img src="../../_images/_icons/youtube.svg" height="30" width="30" alt="Youtube"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/"><img src="../../_images/_icons/facebook.svg" height="30" width="30" alt="Facebook"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.google.com/"><img src="../../_images/_icons/google-mas.svg" height="30" width="30" alt="Google+"></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.reddit.com/"><img src="../../_images/_icons/reddit.svg" height="30" width="30" alt="Reddit"></a>
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
            <img src="../../_images/_icons/location-pin.svg" height="16" alt="Location icon">  Villaviciosa de Odón, Madrid<br>
            <img src="../../_images/_icons/phone.svg" height="15" alt="Phone icon">  +34 674 231 583<br>
            <a href="mailto:#" style="text-decoration: none;" class="text-success">movieshowcase@gmail.com</a>
          </address>
        </div>
      </div>
      <div class="footer-copyright">
        <span class="text-light footer-copyright">© 2019-2020 by Movie Showcaser</span>
      </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>