<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Movie showcaser - Adventure</title>
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
    <!-- Adventure -->
    <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../_images/indianajones_fp.jpg" class="d-block w-100" alt="Indiana Jones">
            </div>
            <div class="carousel-item">
                <img src="../../_images/mazerunner_fp.jpg" class="d-block w-100" alt="The Mazerunner">
            </div>
            <div class="carousel-item">
                <img src="../../_images/revenant_fp.jpg" class="d-block w-100" alt="The Revenant">
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
        <br><br>  
        <h1 class="display-4 fp-heading text-center">Adventure is an attitude!</h1>
        <hr class="featurette-divider" id="lastcrusade">
        <!--1-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Indiana Jones and the Last Crusade <span class="text-muted"> 1989.</span></h2>
            <p class="lead">It’s 1938 and Indy (Harrison Ford) receives word that his archaeologist dad, Professor Henry Jones (Sean Connery), has disappeared while on a quest for the Holy Grail. Indy embarks on a search for both his dad and the much-coveted artifact.</p>
            <div class="heart" id="indianajonesLC-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://cdn.shopify.com/s/files/1/1057/4964/products/indiana-jones-and-the-last-crusade-vintage-movie-poster-original-1-sheet-27x41.jpg?v=1603832490" alt="Indiana Jones Image">
          </div>
        </div>
  
        <hr class="featurette-divider" id="themazerunner">
        <!--2-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">The Maze Runner <span class="text-muted"> 2014.</span></h2>
            <p class="lead">Thomas wakes up in an elevator, remembering nothing but his own name. He emerges into a world of about 60 teen boys who have learned to survive in a completely enclosed environment, subsisting on their own agriculture and supplies. A new boy arrives every 30 days. The original group has been in "The Glade" for two years, trying to find a way to escape through the Maze that surrounds their living space. They have begun to give up hope. Then a comatose girl arrives with a strange note, and their world begins to change. There are some great, fast-paced action scenes, particularly those involving the nightmarish Grievers who plague the boys.</p>
            <div class="heart" id="mazerunner-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/91nB2P7VgvL._AC_SL1500_.jpg" alt="Maze Runner image">
          </div>
        </div>
  
        <hr class="featurette-divider" id="therevenant">
        <!--3-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">The Revenant <span class="text-muted"> 2015.</span></h2>
            <p class="lead">Year 1823. In an expedition of the uncharted American wilderness, legendary explorer Hugh Glass (Leonardo DiCaprio) is brutally attacked by a bear and left for dead by members of his own hunting team. In a quest to survive, Glass endures unimaginable grief as well as the betrayal of his confidant John Fitzgerald (Tom Hardy). Guided by sheer will and the love of his family, Glass must navigate a vicious winter in a relentless pursuit to live and find redemption.</p>
            <div class="heart" id="revenant-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://m.media-amazon.com/images/M/MV5BMDE5OWMzM2QtOTU2ZS00NzAyLWI2MDEtOTRlYjIxZGM0OWRjXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg" alt="The Revenant image">
          </div>
        </div>

        <hr class="featurette-divider" id="passengers">
        <!--4-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Passengers <span class="text-muted"> 2016.</span></h2>
            <p class="lead">The spaceship Avalon is in the midst of a 120-year journey to set up a colony on the planet Homestead II. Aboard, there are 5000 passengers and 255 crew asleep in cryogenic pods and everything during the journey is automated. After the ship is struck by debris while passing through an asteroid field, mechanic Jim Preston (Chris Pratt) is woken from hibernation. Jim is puzzled to find that he is all alone on the ship and it is only thirty years into the voyage with ninety more to go. He is unable to wake the command crew but equally is unable to reactivate his pod and go back to sleep. With only the android bartender Arthur for company, his sanity slowly starts to slip away. He then becomes captivated by Aurora Lane (Jennifer Lawrence), a female passenger in one of the hibernation pods.</p>
            <div class="heart" id="passengers-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://i.pinimg.com/originals/79/65/b5/7965b50f1bc03af48d3d58289c76386c.jpg" alt="Passengers image">
          </div>
        </div>

        <hr class="featurette-divider" id="curseblackpearl">
        <!--5-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Pirate of the Caribbean: The Curse of the Black Pearl <span class="text-muted"> 2003.</span></h2>
            <p class="lead">Set in the Caribbean Sea in the 17th century, this is the story of a gentleman rogue of a pirate, Jack Sparrow. When Captain Jack Sparrow, an eccentric rogue, arrives at Port Royal, he barely avoids going down with his ship. Soon enough, he's in the market for a new one, but not before he saves the life of Elizabeth Swann, the beautiful daughter of the governor. This act of bravery sets into motion a sweeping adventure involving Elizabeth's childhood friend, blacksmith Will Turner; a mysterious medallion; and a legendary pirate ship, the Black Pearl.</p>
            <div class="heart" id="piratecaribbeanCBP-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://m.media-amazon.com/images/I/81c2gQE0sqL.jpg" alt="Pirate of the Caribbean image">
          </div>
        </div>

        <hr class="featurette-divider" id="assasinscreed">
        <!--6-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Assasin's Creed <span class="text-muted"> 2016.</span></h2>
            <p class="lead">Through a revolutionary technology that unlocks his genetic memories, Callum Lynch (Michael Fassbender) experiences the adventures of his ancestor, Aguilar, in 15th Century Spain. Callum discovers he is descended from a mysterious secret society, the Assassins, and amasses incredible knowledge and skills to take on the oppressive and powerful Templar organization in the present day.</p>
            <div class="heart" id="assasincreed-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://i.pinimg.com/originals/50/7c/23/507c23ff361069cd26fc1014cab9bd22.jpg" alt="Assasin's Creed image">
          </div>
        </div>
  
        <hr class="featurette-divider" id="warcraft">
        <!--7-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Warcraft <span class="text-muted"> 2016.</span></h2>
            <p class="lead">The film portrays the origin story of the initial encounters between the humans and the orcs, with an emphasis upon both the Alliance's and the Horde's sides of their conflict. Featuring characters such as Durotan and Lothar, the film will take place in a variety of locations established in the video game series.</p>
            <div class="heart" id="warcraft-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://i.pinimg.com/originals/c8/05/56/c80556cf18a853db8713b54aa3bc442b.jpg" alt="Warcraft image">
          </div>
        </div>

        <hr class="featurette-divider" id="robinhood">
        <!--8-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Robin Hood <span class="text-muted"> 2010.</span></h2>
            <p class="lead">Robin Hood chronicles the life of an expert archer, previously interested only in self-preservation, from his service in King Richard I’s army against the French. Upon Richard’s death, Robin travels to Nottingham, a town suffering from the corruption of a despotic sheriff and crippling taxation, where he falls for the spirited widow Lady Marion, a woman skeptical of the identity and motivations of this crusader from the forest. Hoping to earn the hand of Maid Marion and salvage the village, Robin assembles a gang whose lethal mercenary skills are matched only by its appetite for life.</p>
            <div class="heart" id="robinhood-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/812cqC7FD6L._AC_SY741_.jpg" alt="Robin Hood image">
          </div>
        </div>
  
        <hr class="featurette-divider" id="lifeofpi">
        <!--9-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Life of Pi <span class="text-muted"> 2012.</span></h2>
            <p class="lead">After the tragic sinking of a ship, a solitary lifeboat remains bobbing on the Pacific ocean, inside there is an indian boy named Pi Patel, a hyena, a zebra, a female orangutan and a Bengal tiger, the only survivors of the wreck, it's a tale of faith, hope and fighting for survival... Based on the best-selling novel by Yann Martel.</p>
            <div class="heart" id="lifeofpi-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://www.bestmovieposters.co.uk/wp-content/uploads/2019/01/0IztH4QE.jpeg" alt="Life of Pi image">
          </div>
        </div>

        <hr class="featurette-divider" id="mulan">
        <!--10-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Mulan <span class="text-muted"> 2020.</span></h2>
            <p class="lead">A young Chinese maiden disguises herself as a warrior in order to save her father. A live-action feature film based on Disney's 'Mulan'. When the Emperor of China issues a decree that one man per family must serve in the Imperial Army to defend the country from Northern invaders, Hua Mulan, the eldest daughter of an honored warrior, steps in to take the place of her ailing father. Masquerading as a man, Hua Jun, she is tested every step of the way and must harness her inner-strength and embrace her true potential. It is an epic journey that will transform her into an honored warrior and earn her the respect of a grateful nation…and a proud father.</p>
            <div class="heart" id="mulan-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://www.cineworld.co.uk/xmedia-cw/repo/articles/other/MULAN_ScreenX_poster.jpg" alt="Mulan image">
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../_scripts/heart-animation.js"></script>
</body>