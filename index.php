<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="_images/navbaricon_fp.jpg">
        <title>Movie showcaser</title>
        <!--
        <meta property='og:title'  content='···'>
        <meta name="description" content="The HTML5 Herald">
        <meta name="keywords" content="">
        <meta name="author" content="SitePoint"> -->
        <link rel="stylesheet" href="_css/main.css">     
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
    </head>

    <body>
      <!-- NAVBAR -->
      <?php
      if (session_status() == 0) {
        session_start();
      }
      include("_php/navbar.php"); 
      ?> 
        
        <div class="bd-example">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/eOrNdBpGMv8?mute=1&autoplay=1&loop=1&controls=0&playlist=eOrNdBpGMv8" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div> 

        <h1 class="display-4 fp-heading text-center">Top picks of the month!</h1>

        <div class="container">
          <div class="row frow-1">
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="_images/darkphoenix_bb.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Dark Phoenix</h5>
                  <p class="card-text"><small class="text-muted">2h23m · PG-13 · Sci-Fi</small></p>
                  <div class="btn-group" role="group" aria-label="Botton group with stream sites">
                    <a class="btn" href="https://www.netflix.com/cx/title/81044417" target="_blank"><img src="_images/_icons/netflix.png" height="35" alt="Netflix"></a>
                    <a class="btn" href="#"><img src="_images/_icons/fox.svg" height="35" width="35" alt="Fox"></a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="_images/godzilla_bb.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Godzilla</h5>
                  <p class="card-text"><small class="text-muted">1h47m · PG-13 · Comedy</small></p>
                  <div class="btn-group" role="group" aria-label="Botton group with stream sites">
                    <a class="btn" href="#"><img src="_images/_icons/fox.svg" height="35" alt="Fox"></a>
                    <a class="btn" href="#"><img src="_images/_icons/hbo.svg" height="35" width="35" alt="HBO"></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="_images/teenspirit_bb.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Teen Spirit</h5>
                  <p class="card-text">
                    <small class="text-muted">1h32m · PG-13 · Action</small><br>
                  </p>
                  <div class="btn-group" role="group" aria-label="Botton group with stream sites">
                    <a class="btn" href="#"><img src="_images/_icons/netflix.png" height="35" alt="Netflix"></a>
                    <a class="btn" href="#"><img src="_images/_icons/fox.svg" height="35" width="35" alt="Fox"></a>
                    <a class="btn" href="#"><img src="_images/_icons/hbo.svg" height="35" width="35" alt="HBO"></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="_images/endgame_bb.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Avengers Endgame</h5>
                  <p class="card-text"><small class="text-muted">3h10m · PG-13 · Action</small></p>
                  <div class="btn-group" role="group" aria-label="Botton group with stream sites">
                    <a class="btn" href="#"><img src="_images/_icons/netflix.png" height="35" alt="Netflix"></a>
                    <a class="btn" href="#"><img src="_images/_icons/hbo.svg" height="35" width="35" alt="HBO"></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="container">
          <div class="row frow-2">

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="_images/captainmarvel_bb.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Captain Marvel</h5>
                  <p class="card-text"><small class="text-muted">2h14m · PG-13 · Action</small></p>
                  <div class="btn-group" role="group" aria-label="Botton group with stream sites">
                    <a class="btn" href="#"><img src="_images/_icons/netflix.png" height="35" alt="Netflix"></a>
                    <a class="btn" href="#"><img src="_images/_icons/fox.svg" height="35" width="35" alt="Fox"></a>
                    <a class="btn" href="#"><img src="_images/_icons/hbo.svg" height="35" width="35" alt="HBO"></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="_images/starwars_bb.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">The Last Jedi</h5>
                  <p class="card-text"><small class="text-muted">2h50m · PG-13 · Sci-Fi</small></p>
                  <div class="btn-group" role="group" aria-label="Botton group with stream sites">
                    <a class="btn" href="#"><img src="_images/_icons/netflix.png" height="35" alt="Netflix"></a>
                    <a class="btn" href="#"><img src="_images/_icons/hbo.svg" height="35" width="35" alt="HBO"></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="_images/justiceleague_bb.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Justice League</h5>
                  <p class="card-text"><small class="text-muted">2h10m · PG-13 · Action</small></p>
                  <div class="btn-group" role="group" aria-label="Botton group with stream sites">
                    <a class="btn" href="#"><img src="_images/_icons/fox.svg" height="35" alt="Fox"></a>
                    <a class="btn" href="#"><img src="_images/_icons/hbo.svg" height="35" width="35" alt="HBO"></a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="_images/proudmary_bb.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Proud Mary</h5>
                  <p class="card-text"><small class="text-muted">1h54m · PG-13 · Comedy</small></p>
                  <div class="btn-group" role="group" aria-label="Botton group with stream sites">
                    <a class="btn" href="#"><img src="_images/_icons/netflix.png" height="35" alt="Netflix"></a>
                    <a class="btn" href="#"><img src="_images/_icons/fox.svg" height="35" width="35" alt="Fox"></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="container-fluid">
          <h2 class="display-4 fp-heading text-center"><br>Best performing actors around</h2>
          <div id="actorCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto">
              <div class="carousel-item col-md-3 active">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://i.pinimg.com/originals/a1/f8/1d/a1f81d3ba10718ba35d3d28f39092edb.jpg" alt="Johnny Deep">
                  <div class="card-body">
                    <h4 class="card-title">Johnny Deep</h4>
                    <p class="card-text">John Christopher Depp II (Owensboro, Kentucky; 9 de junio de 1963) es un actor, productor, guionista y músico estadounidense.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://1.bp.blogspot.com/-bXTRSV7AY3s/TueE_GbjGAI/AAAAAAAAAVs/oEQOM-IFDaQ/s1600/m13s16d_big.jpg" alt="Morgan Freeman">
                  <div class="card-body">
                    <h4 class="card-title">Morgan Freeman</h4>
                    <p class="card-text">Morgan Freeman (Memphis, 1 de junio de 1937) es un actor y director estadounidense, ganador del premio Óscar en 2005 por Million Dollar Baby.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://es.web.img3.acsta.net/pictures/19/05/22/10/42/3773139.jpg" alt="Bradd Pitt">
                  <div class="card-body">
                    <h4 class="card-title">Brad Pitt</h4>
                    <p class="card-text">William Bradley Pitt (Shawnee, Oklahoma; 18 de diciembre de 1963), conocido como Brad Pitt, es un actor y productor de cine estadounidense.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://i.pinimg.com/originals/09/9d/62/099d622504d8d92a294e280456410583.jpg" alt="Tom Cruise">
                  <div class="card-body">
                    <h4 class="card-title">Tom Cruise</h4>
                    <p class="card-text">Thomas Cruise Mapother IV (Siracusa, Nueva York; 3 de julio de 1962), es un actor y productor de cine estadounidense ganador de tres premios Globo de Oro.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://es.web.img3.acsta.net/pictures/17/12/11/12/30/5609551.jpg" alt="Andy Serkis">
                  <div class="card-body">
                    <h4 class="card-title">Andy Serkis</h4>
                    <p class="card-text">Andrew Clement "Andy" Serkis (Ruislip Manor, Middlesex; 20 de abril de 1964) es un actor, director de cine y escritor británico. </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://es.web.img3.acsta.net/medias/nmedia/18/91/08/37/20537322.jpg" alt="Robert Downey Jr.">
                  <div class="card-body">
                    <h4 class="card-title">Robert Downey Jr.</h4>
                    <p class="card-text">Robert John Downey Jr. (Nueva York, 4 de abril de 1965) es un actor, actor de voz, productor y cantante estadounidense.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://img.europapress.es/fotoweb/fotonoticia_20101009150508_1200.jpg" alt="Mario Casas">
                  <div class="card-body">
                    <h4 class="card-title">Mario Casas</h4>
                    <p class="card-text">Mario Casas Sierra (La Coruña, 12 de junio de 1986) es un actor español. Se dio a conocer en la serie de televisión Los hombres de Paco.</p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#actorCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#actorCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <div class="container-fluid dir-cont">
          <h2 class="display-4 fp-heading text-center"><br>Top directors!</h2>
          <div id="directorCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto">
              <div class="carousel-item col-md-3 active">
                <div class="card"> 
                  <img class="card-img-top img-fluid" src="https://es.web.img2.acsta.net/pictures/15/08/04/21/29/580604.jpg" alt="Martin Scorsese"> 
                  <div class="card-body">
                    <h4 class="card-title">Martin Scorsese</h4>
                    <p class="card-text">Martin Charles Scorsese (Nueva York, 17 de noviembre de 1942) es un director, guionista y productor de cine estadounidense.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/6/67/Steven_Spielberg_by_Gage_Skidmore.jpg" alt="Steven Spielberg">
                  <div class="card-body">
                    <h4 class="card-title">Steven Spielberg</h4>
                    <p class="card-text">Steven Allan Spielberg (Cincinnati, Ohio; 18 de diciembre de 1946) es un director, guionista y productor de cine estadounidense.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Quentin_Tarantino_by_Gage_Skidmore.jpg" alt="Quentin Tarantino">
                  <div class="card-body">
                    <h4 class="card-title">Quentin Tarantino</h4>
                    <p class="card-text">Quentin Jerome Tarantino (Knoxville, Tennessee; 27 de marzo de 1963) es un director, productor, guionista, editor y actor de cine y televisión estadounidense.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/71P1q48EkKL._RI_.jpg" alt="Stanely Kubrick">
                  <div class="card-body">
                    <h4 class="card-title">Stanley Kubrick</h4>
                    <p class="card-text">Stanley Kubrick (Manhattan, Nueva York, Estados Unidos) fue un director de cine, guionista, productor y fotógrafo estadounidense nacionalizado británico.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/61hHweB2iSL._RI_.jpg" alt="Alfred Hitchcock">
                  <div class="card-body">
                    <h4 class="card-title">Alfred Hitchcock</h4>
                    <p class="card-text">Alfred Joseph Hitchcock CBE (Londres, 13 de agosto de 1899 – Los Ángeles, 29 de abril de 1980) fue un director de cine, productor y guionista británico.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://es.web.img3.acsta.net/pictures/19/11/12/17/00/5910399.jpg" alt="Christopher Nolan">
                  <div class="card-body">
                    <h4 class="card-title">Christopher Nolan</h4>
                    <p class="card-text">Christopher Edward Nolan (Londres; 30 de julio de 1970) es un director de cine, guionista, productor y editor británico.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item col-md-3">
                <div class="card">
                  <img class="card-img-top img-fluid" src="https://i.pinimg.com/originals/ba/cb/10/bacb1048afacd7ebc9650bb8a3a66328.jpg" alt="Clint Eastwood">
                  <div class="card-body">
                    <h4 class="card-title">Clint Eastwood</h4>
                    <p class="card-text">Clinton «Clint» Eastwood Jr. (San Francisco, California; 31 de mayo de 1930) es un actor, director, productor, músico y compositor estadounidense.</p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#directorCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#directorCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>  

        <!-- Footer -->
        <footer class="bg-dark text-center">
          <div class="footer-links">
            <div> 
              <ul class="list-inline footer-social-networks">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/"><img src="_images/_icons/instagram.svg" height="30" width="30" alt="Instagram"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.twitter.com/"><img src="_images/_icons/twitter.svg" height="30" width="30" alt="Twitter"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.youtube.com/"><img src="_images/_icons/youtube.svg" height="30" width="30" alt="Youtube"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/"><img src="_images/_icons/facebook.svg" height="30" width="30" alt="Facebook"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.google.com/"><img src="_images/_icons/google-mas.svg" height="30" width="30" alt="Google+"></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.reddit.com/"><img src="_images/_icons/reddit.svg" height="30" width="30" alt="Reddit"></a>
                </li> 
              </ul>
            </div>
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
                <img src="_images/_icons/location-pin.svg" height="16" alt="Location icon">  Villaviciosa de Odón, Madrid<br>
                <img src="_images/_icons/phone.svg" height="15" alt="Phone icon">  +34 674 231 583<br>
                <a href="mailto:#" style="text-decoration: none;" class="text-success">movieshowcase@gmail.com</a>
              </address>
            </div>
          </div>
          <div class="footer-copyright">
            <span class="text-light footer-copyright">© 2019-2020 by Movie Showcaser</span>
          </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="_scripts/card-carousel.js"></script> 
      </body>
    
</html>
