<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Movie showcaser - Sci-Fi</title>
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
    <!-- Science Fiction -->
    <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../_images/starwars_fp.jpg" class="d-block w-100" alt="Star Wars">
            </div>
            <div class="carousel-item">
                <img src="../../_images/harrypotter_fp.jpg" class="d-block w-100" alt="Harry Potter">
            </div>
            <div class="carousel-item">
                <img src="../../_images/avatar_fp.jpg" class="d-block w-100" alt="Avatar">
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
        <h1 class="display-4 fp-heading text-center">In science fiction, we dream!</h1>
        <hr class="featurette-divider" id="starwarseVIII">
        <!--1-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Star Wars: Episode VIII - The Last Jedi <span class="text-muted"> 2017.</span></h2>
            <p class="lead">The evil First Order has become even more powerful than when we left it in 'The Force Awakens', and is closing in on the Resistance led by General Leia Organa (Carrie Fisher). Pilot Poe Dameron (Oscar Isaac) leads a mission to take out a First Order Dreadnought. Meanwhile, Rey (Daisy Ridley) must ponder her own future and vocation, and Luke (Mark Hamill) has to reassess what his life means.</p>
            <div class="heart" id="starwarsviii-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/A1UKXyjirGL._AC_SL1500_.jpg" alt="Star Wars image">
          </div>
        </div>
        
        <hr class="featurette-divider" id="harrypottersorcer">
        <!--2-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Harry Potter and the Sorcerer's Stone <span class="text-muted"> 2001.</span></h2>
            <p class="lead">Harry Potter has learned to live with his bullying Uncle Vernon, Aunt and spoiled cousin. On his 11th birthday, Harry learns that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. Invited to attend Hogwarts School of Witchcraft and Wizardry, Harry embarks on the adventure of a lifetime. At Hogwarts, he finds the home and family he has never had.</p>
            <div class="heart" id="sorcererstoneHP-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/713KEd-8jyL._AC_SL1500_.jpg" alt="Harry Potter image">
          </div>
        </div>
  
        <hr class="featurette-divider" id ="avatar">
        <!--3-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Avatar <span class="text-muted"> 2009.</span></h2>
            <p class="lead">Year 2154. On a distant moon Pandora, a reluctant hero embarks on a journey of redemption and discovery, as he leads a heroic battle to save a civilization. AVATAR takes us to a spectacular new world beyond our imagination. Jake Sully (Sam Worthington) is a former Marine confined to a wheelchair. But despite his broken body, Jake is still a warrior at heart. He is recruited to travel light years to the human outpost on Pandora, where a corporate consortium is mining a rare mineral that is the key to solving Earth's energy crisis. Because Pandora's atmosphere is toxic, they have created the Avatar Program, in which human "drivers" have their consciousness linked to an avatar, a remotely-controlled biological body that can survive in the lethal air. These avatars are genetically engineered hybrids of human DNA mixed with DNA from the natives of Pandora... the Na'vi. Reborn in his avatar form, Jake can walk again.</p>
            <div class="heart" id="avatar-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/61jFTTf9RBL._AC_SL1230_.jpg" alt="Avatar image">
          </div>
        </div>

        <hr class="featurette-divider" id="readyplayer1">
        <!--4-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Ready Player One <span class="text-muted"> 2018.</span></h2>
            <p class="lead">When the creator of a virtual reality called the OASIS dies, he makes a posthumous challenge to all OASIS users to find his Easter Egg, which will give the finder his fortune and control of his world.</p>
            <div class="heart" id="readyplayerone-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/81SSoQgfaqL._AC_SL1474_.jpg" alt="Ready Player One image">
          </div>
        </div>

        <hr class="featurette-divider" id="frindelwald">
        <!--5-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Fantastic Beasts: The Crimes of Frindelwald <span class="text-muted"> 2018.</span></h2>
            <p class="lead">Seventy years before Harry Potter reads writer Newt Scamander's (Eddie Redmayne) book in school, the author enjoys adventures in New York's secret community of witches and wizards. The spinoff film takes place in 1926, as Newt travels the globe to find and document magical creatures. But after completing a global excursion and arriving in New York for a brief stopover, his misplaced magical case leads to the escape of some of Newt's fantastic beasts in the No-Maj (American equivalent of "Muggle") world.</p>
            <div class="heart" id="fantasticbeastCF-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://i.pinimg.com/originals/11/95/b8/1195b802fe9108f0458830054ba1fd57.jpg" alt="Fantastic Beasts: The Crimes of Frindelwald image">
          </div>
        </div>

        <hr class="featurette-divider" id="catchingfire">
        <!--6-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">The Hunger Games: Catching Fire <span class="text-muted"> 2013.</span></h2>
            <p class="lead">Katniss Everdeen has returned home safe after winning the 74th Annual Hunger Games along with fellow tribute Peeta Mellark. Winning means that they must turn around and leave their family and close friends, embarking on a "Victor's Tour" of the districts. Along the way Katniss senses that a rebellion is simmering, but the Capitol is still very much in control as President Snow prepares the 75th Annual Hunger Games (The Quarter Quell) - a competition that could change Panem forever.</p>
            <div class="heart" id="catchingfireHG-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://m.media-amazon.com/images/M/MV5BMjA4NDg3NzYxMF5BMl5BanBnXkFtZTcwNTgyNzkyNw@@._V1_.jpg" alt="The Hunger Games: Catching Fire image">
          </div>
        </div>
  
        <hr class="featurette-divider" id="wonderwoman">
        <!--7-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Wonder Woman <span class="text-muted"> 2017.</span></h2>
            <p class="lead">The Amazonian princess-warrior Diana left her lush tropical island to dwell in our urban cityscapes of glass and steel. Tutored in the ways of the Greek warriors, and outfitted with incredible gifts the Goddess bestowed upon her people, she becomes Paradise Island's emissary to civilization.</p>
            <div class="heart" id="wonderwoman-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://cdn11.bigcommerce.com/s-ydriczk/images/stencil/original/products/88197/90726/Wonder-Woman-Advance-Style-B-Wonder-Poster-buy-original-movie-posters-at-starstills__91230.1494347007.jpg?c=2" alt="Wonder Woman image">
          </div>
        </div>

        <hr class="featurette-divider" id="wonderwoman1984">
        <!--8-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Wonder Woman: 1984 <span class="text-muted"> 2020.</span></h2>
            <p class="lead">In 1984, during the Cold War, Diana comes into conflict with two formidable foes—media businessman Maxwell Lord and friend-turned-enemy Barbara Minerva / Cheetah—while reuniting with her love interest Steve Trevor. A sequel to the 2017 super hero film 'Wonder Woman'.</p>
            <div class="heart" id="wonderwoman1984-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://sm.ign.com/ign_es/screenshot/default/wonder-woman-1984-poster-700x1050_yub8.jpg" alt="Wonder Woman: 1984 image">
          </div>
        </div>
  
        <hr class="featurette-divider" id="captainmarvel">
        <!--9-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Captain Marvel <span class="text-muted"> 2019.</span></h2>
            <p class="lead">Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.</p>
            <div class="heart" id="captainmarvel-heart"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://m.media-amazon.com/images/M/MV5BMTE0YWFmOTMtYTU2ZS00ZTIxLWE3OTEtYTNiYzBkZjViZThiXkEyXkFqcGdeQXVyODMzMzQ4OTI@._V1_.jpg" alt="Captain Marvel image">
          </div>
        </div>

        <hr class="featurette-divider" id="rogueone">
        <!--10-->
        <div class="row featurette">
          <div class="col-md-7 order-md-2 left-img-featurette">
            <h2 class="featurette-heading">Rogue One: A Star Wars Story <span class="text-muted"> 2016.</span></h2>
            <p class="lead">Jyn Erso, a Rebellion soldier and criminal, is about to experience her biggest challenge yet when Mon Mothma sets her out on a mission to steal the plans for the Death Star. With the aid of the Rebels, a master swordsman, and non-allied forces, Jyn will be in for something bigger than she thinks.</p>
            <div class="heart" id="rogueone-heart"></div>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://images-na.ssl-images-amazon.com/images/I/71ktdo2ie6L._AC_SL1200_.jpg" alt="Rogue One image">
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