-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2021 a las 20:49:35
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movie_showcase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `movie_id` mediumint(9) NOT NULL,
  `name` varchar(150) NOT NULL,
  `plot` varchar(5000) NOT NULL,
  `release_year` smallint(6) NOT NULL,
  `img_url` varchar(500) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `heart_id` varchar(50) NOT NULL,
  `jump_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`movie_id`, `name`, `plot`, `release_year`, `img_url`, `type`, `heart_id`, `jump_link`) VALUES
(1, 'John Wick: Chapter 3 - Parabellum', 'In this third installment of the adrenaline-fueled action franchise, super-assassin John Wick (Keanu Reeves) returns with a $14 million price tag on his head and an army of bounty-hunting killers on his trail. After killing a member of the shadowy international assassin\'s guild, the High Table, John Wick is excommunicado, but the world\'s most ruthless hit men and women await his every turn.', 2019, 'https://estamosenunelodemierda.files.wordpress.com/2019/11/poster-2.jpg?w=794&h=1110', 'Action', 'jw3-heart', 'jw3'),
(2, 'Venom', 'Eddie Brock (Tom Hardy) is an investigative journalist in San Francisco asking probing questions about the preening space-tech CEO Carlton Drake (Riz Ahmed). The reporter’s quest to uncover shady dealings eventually costs him his job and ruins his relationship with his fiancée, Anne Weying (Michelle Williams). So Eddie breaks into Drake’s secret lab, where he comes into contact with an alien creature— Venom, a glob of black goo one can wear as a kind of living costume—that seeps right into his skin.', 2018, 'https://sharkscene.com/wp-content/uploads/2018/10/DbiHufsXcAAIAak-720x900.jpg', 'Action', 'venom-heart', 'venom'),
(3, 'The fate of the Furious', 'Now that Dom and Letty are on their honeymoon and Brian and Mia have retired from the game-and the rest of the crew has been exonerated-the globetrotting team has found a semblance of a normal life. But when a mysterious woman seduces Dom into the world of crime he can\'t seem to escape and a betrayal of those closest to him, they will face trials that will test them as never before. From the shores of Cuba and the streets of New York City to the icy plains off the arctic Barents Sea, the elite force will crisscross the globe to stop an anarchist from unleashing chaos on the world\'s stage... and to bring home the man who made them a family. (Fast And Furious 8)', 2017, 'https://m.media-amazon.com/images/M/MV5BMjMxODI2NDM5Nl5BMl5BanBnXkFtZTgwNjgzOTk1MTI@._V1_.jpg', 'Action', 'ff8-heart', 'ff8'),
(4, 'Extraction', 'In an underworld of weapons dealers and traffickers, a young boy becomes the pawn in a war between notorious drug lords. Trapped by kidnappers inside one of the world\'s most impenetrable cities, his rescue beckons the unparalleled skill of a mercenary named Tyler Rake. But Rake is a broken man with nothing to lose, harboring a death wish that makes an already deadly mission near impossible.', 2020, 'https://i.gadgets360cdn.com/large/extraction_poster_1586173758536.jpg', 'Action', 'extraction-heart', 'extraction'),
(5, 'Angel has Fallen', 'After the events in the previous film, Secret Service agent Mike Banning finds himself framed for an assassination attempt on the President. Pursued by his own agency and the FBI, Banning races to clear his name and uncover the real terrorist threat which has set its sights on Air Force One.', 2019, 'https://m.media-amazon.com/images/M/MV5BYmRmMWZhZGItYzA4MC00ZDYyLWE0OTMtYmM0MWRiN2Q4NGU2XkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_.jpg', 'Action', 'angelfallen-heart', 'angelfallen'),
(6, 'London has fallen', 'After the British Prime Minister has passed away under mysterious circumstances, all leaders of the Western world must attend his funeral. But what starts out as the most protected event on earth, turns into a deadly plot to kill the world\'s most powerful leaders and unleash a terrifying vision of the future. The President of the United States, his formidable secret service head and the secret agent Mike Benning are the only people that have any hope of stopping it.', 2016, 'https://m.media-amazon.com/images/M/MV5BMTY1ODY2MTgwM15BMl5BanBnXkFtZTgwOTY3Nzc3NzE@._V1_.jpg', 'Action', 'londonfallen-heart', 'londonfallen'),
(7, 'Mortal Engines', 'Mortal Engines is a 2018 post-apocalyptic action adventure film directed by Christian Rivers and with a screenplay by Fran Walsh, Philippa Boyens, and Peter Jackson, based on the 2001 novel of the same name by Philip Reeve, and starring Hera Hilmar, Robert Sheehan, Hugo Weaving, Jihae, Ronan Raftery, Leila George, Patrick Malahide, and Stephen Lang. An American–New Zealand co-production, the film is set in a post-apocalyptic world where entire cities have been mounted on wheels and motorised, and practice municipal Darwinism; its movie universe is different from that of the books', 2018, 'https://images-na.ssl-images-amazon.com/images/I/91qiKWG%2BCrL._AC_SL1500_.jpg', 'Action', 'mortengines-heart', 'mortalengines'),
(8, 'Baby Driver', 'A young getaway driver named Baby (Ansel Elgort) had an accident when he was a kid and it left him with an eardrum that constantly hums. To down it out, he plays music constantly. He works as a driver for a powerful crime boss named Doc (Kevin Spacey) and finally tells him that after one more job, he\'s done. Doc is not impressed. He tells Baby that after one more job, they\'re straight, but not done. He threatens to hurt everyone Baby loves if he tries to leave. Baby, who has fallen in love with a beautiful waitress named Deborah (Lily James), doesn\'t want anything to happen to her. He decides to go on the run and take Deborah with him.', 2017, 'https://images-na.ssl-images-amazon.com/images/I/717QDxYBkbL._AC_SL1024_.jpg', 'Action', 'babydriver-heart', 'babydriver'),
(9, 'Bloodshot', 'Based on the \'Valiant\' comic book, the story centers around Ray Garrison aka Bloodshot (Diesel), who is brought back from the dead by Rising Spirit Technologies’ use of nanotechnology and suffers total memory loss. Ray struggles to reconnect with who he was while learning what sort of weapon he has become, with the help of a group of other augmented combatants called Chainsaw.', 2020, 'https://m.media-amazon.com/images/M/MV5BYjA5YjA2YjUtMGRlNi00ZTU4LThhZmMtNDc0OTg4ZWExZjI3XkEyXkFqcGdeQXVyNjUyNjI3NzU@._V1_.jpg', 'Action', 'bloodshot-heart', 'bloodshot'),
(10, 'Mad Max: Fury Road', 'Mad Max is caught up with a group of people fleeing across the Wasteland in a War Rig driven by the Imperator Furiosa. This movie is an account of the Road War which follows. It is based on the Word Burgers of the History Men and eyewitness accounts of those who survived.', 2015, 'https://cdn.shopify.com/s/files/1/1416/8662/products/mad_max_fury_road_2015_advance_original_film_artB_69310cd2-a499-45fc-a12d-df89480c4c99_5000x.jpg?v=1573593327', 'Action', 'mmfury-heart', 'madmaxfr'),
(11, 'Indiana Jones and the Last Crusade', 'It’s 1938 and Indy (Harrison Ford) receives word that his archaeologist dad, Professor Henry Jones (Sean Connery), has disappeared while on a quest for the Holy Grail. Indy embarks on a search for both his dad and the much-coveted artifact.', 1989, 'https://cdn.shopify.com/s/files/1/1057/4964/products/indiana-jones-and-the-last-crusade-vintage-movie-poster-original-1-sheet-27x41.jpg?v=1603832490', 'Adventure', 'indianajonesLC-heart', 'lastcrusade'),
(12, 'The Maze Runner', 'Thomas wakes up in an elevator, remembering nothing but his own name. He emerges into a world of about 60 teen boys who have learned to survive in a completely enclosed environment, subsisting on their own agriculture and supplies. A new boy arrives every 30 days. The original group has been in \"The Glade\" for two years, trying to find a way to escape through the Maze that surrounds their living space. They have begun to give up hope. Then a comatose girl arrives with a strange note, and their world begins to change. There are some great, fast-paced action scenes, particularly those involving the nightmarish Grievers who plague the boys.', 2014, 'https://images-na.ssl-images-amazon.com/images/I/91nB2P7VgvL._AC_SL1500_.jpg', 'Adventure', 'mazerunner-heart', 'themazerunner'),
(13, 'The Revenant', 'Year 1823. In an expedition of the uncharted American wilderness, legendary explorer Hugh Glass (Leonardo DiCaprio) is brutally attacked by a bear and left for dead by members of his own hunting team. In a quest to survive, Glass endures unimaginable grief as well as the betrayal of his confidant John Fitzgerald (Tom Hardy). Guided by sheer will and the love of his family, Glass must navigate a vicious winter in a relentless pursuit to live and find redemption.', 2015, 'https://m.media-amazon.com/images/M/MV5BMDE5OWMzM2QtOTU2ZS00NzAyLWI2MDEtOTRlYjIxZGM0OWRjXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg', 'Adventure', 'revenant-heart', 'therevenant'),
(14, 'Passengers', 'The spaceship Avalon is in the midst of a 120-year journey to set up a colony on the planet Homestead II. Aboard, there are 5000 passengers and 255 crew asleep in cryogenic pods and everything during the journey is automated. After the ship is struck by debris while passing through an asteroid field, mechanic Jim Preston (Chris Pratt) is woken from hibernation. Jim is puzzled to find that he is all alone on the ship and it is only thirty years into the voyage with ninety more to go. He is unable to wake the command crew but equally is unable to reactivate his pod and go back to sleep. With only the android bartender Arthur for company, his sanity slowly starts to slip away. He then becomes captivated by Aurora Lane (Jennifer Lawrence), a female passenger in one of the hibernation pods.', 2016, 'https://i.pinimg.com/originals/79/65/b5/7965b50f1bc03af48d3d58289c76386c.jpg', 'Adventure', 'passengers-heart', 'passengers'),
(15, 'Pirate of the Caribbean: The Curse of the Black Pearl', 'Set in the Caribbean Sea in the 17th century, this is the story of a gentleman rogue of a pirate, Jack Sparrow. When Captain Jack Sparrow, an eccentric rogue, arrives at Port Royal, he barely avoids going down with his ship. Soon enough, he\'s in the market for a new one, but not before he saves the life of Elizabeth Swann, the beautiful daughter of the governor. This act of bravery sets into motion a sweeping adventure involving Elizabeth\'s childhood friend, blacksmith Will Turner; a mysterious medallion; and a legendary pirate ship, the Black Pearl.', 2003, 'https://m.media-amazon.com/images/I/81c2gQE0sqL.jpg', 'Adventure', 'piratecaribbeanCBP-heart', 'curseblackpearl'),
(16, 'Assasin\'s Creed', 'Through a revolutionary technology that unlocks his genetic memories, Callum Lynch (Michael Fassbender) experiences the adventures of his ancestor, Aguilar, in 15th Century Spain. Callum discovers he is descended from a mysterious secret society, the Assassins, and amasses incredible knowledge and skills to take on the oppressive and powerful Templar organization in the present day.', 2016, 'https://i.pinimg.com/originals/50/7c/23/507c23ff361069cd26fc1014cab9bd22.jpg', 'Adventure', 'assasincreed-heart', 'assasinscreed'),
(17, 'Warcraft', 'The film portrays the origin story of the initial encounters between the humans and the orcs, with an emphasis upon both the Alliance\'s and the Horde\'s sides of their conflict. Featuring characters such as Durotan and Lothar, the film will take place in a variety of locations established in the video game series.', 2016, 'https://i.pinimg.com/originals/c8/05/56/c80556cf18a853db8713b54aa3bc442b.jpg', 'Adventure', 'warcraft-heart', 'warcraft'),
(18, 'Robin Hood', 'Robin Hood chronicles the life of an expert archer, previously interested only in self-preservation, from his service in King Richard I’s army against the French. Upon Richard’s death, Robin travels to Nottingham, a town suffering from the corruption of a despotic sheriff and crippling taxation, where he falls for the spirited widow Lady Marion, a woman skeptical of the identity and motivations of this crusader from the forest. Hoping to earn the hand of Maid Marion and salvage the village, Robin assembles a gang whose lethal mercenary skills are matched only by its appetite for life.', 2010, 'https://images-na.ssl-images-amazon.com/images/I/812cqC7FD6L._AC_SY741_.jpg', 'Adventure', 'robinhood-heart', 'robinhood'),
(19, 'Life of Pi', 'After the tragic sinking of a ship, a solitary lifeboat remains bobbing on the Pacific ocean, inside there is an indian boy named Pi Patel, a hyena, a zebra, a female orangutan and a Bengal tiger, the only survivors of the wreck, it\'s a tale of faith, hope and fighting for survival... Based on the best-selling novel by Yann Martel.', 2012, 'https://www.bestmovieposters.co.uk/wp-content/uploads/2019/01/0IztH4QE.jpeg', 'Adventure', 'lifeofpi-heart', 'lifeofpi'),
(20, 'Mulan', 'A young Chinese maiden disguises herself as a warrior in order to save her father. A live-action feature film based on Disney\'s \'Mulan\'. When the Emperor of China issues a decree that one man per family must serve in the Imperial Army to defend the country from Northern invaders, Hua Mulan, the eldest daughter of an honored warrior, steps in to take the place of her ailing father. Masquerading as a man, Hua Jun, she is tested every step of the way and must harness her inner-strength and embrace her true potential. It is an epic journey that will transform her into an honored warrior and earn her the respect of a grateful nation…and a proud father.', 2020, 'https://www.cineworld.co.uk/xmedia-cw/repo/articles/other/MULAN_ScreenX_poster.jpg', 'Adventure', 'mulan-heart', 'mulan'),
(21, 'Torrente 2: Mission in Marbella', 'Torrente has now moved to Marbella, where, after being wiped out of the money he had gained, has returned to private investigation. But in one of his cases he gets involved in the middle of a villain\'s missile plot to destroy the city and his own uncle\'s blackmail operation... and he knows nothing.', 2001, 'https://images-na.ssl-images-amazon.com/images/I/71D61ntan3L._AC_SL1058_.jpg', 'Comedy', 'torrente2-heart', 'torrente2'),
(22, 'Spanish Afair', 'A comedy about a rich kid from Andalusia who passes himself off as Basque in order to win the heart of the only woman who ever resisted his charms. Rafa (Dani Rovira) has to travel to the north of Spain to follow Amaia (Clara Lago), a basque girl he has met in Seville, despite of the advisements of his friends, who think he will fail in his attempt to seduce Amaia. The movie has been compared with the 2008 French comedy \"Bienvenue chez les Ch\'tis\", about a southern Frenchma', 2014, 'https://www.filmfactoryentertainment.com/wp-content/uploads/2017/07/SpanishAffair-700x1000.jpg', 'Comedy', 'spanishafair-heart', 'spanishaffair'),
(23, 'Bad Boys for Life', 'In this third stallmment of Bad Boys franchise the Bad Boys Mike Lowrey (Will Smith) and Marcus Burnett (Martin Lawrence) are back together for one last ride. Almost 17 years after taking down a Cuban drug lord, Marcus leads a peaceful family life. But horrors of the past haunt his partner Mike, who must do whatever it takes to protect himself and take down a drug cartel, and finally they team up with Miami police department and its elite AMMO team’s challenge to take down Armando Armas (Jacob Scipio), the young leader of a Mexican drug cartel.', 2020, 'https://m.media-amazon.com/images/M/MV5BMWU0MGYwZWQtMzcwYS00NWVhLTlkZTAtYWVjOTYwZTBhZTBiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg', 'Comedy', 'badboys4life-heart', 'badboys4life'),
(24, 'The House with a Clock in Its Walls', 'A young orphan named Lewis Barnavelt aids his magical uncle in locating a clock with the power to bring about the end of the world.', 2018, 'https://m.media-amazon.com/images/M/MV5BMTk1MzM1ODEwOV5BMl5BanBnXkFtZTgwMTE0OTA4NTM@._V1_.jpg', 'Comedy', 'houseclockwalls-heart', 'houseclock'),
(25, 'Charlie\'s Angels', 'In Banks’ bold vision, Kristen Stewart, Naomi Scott, and Ella Balinska are working for the mysterious Charles Townsend, whose security and investigative agency has expanded internationally. With the world’s smartest, bravest, and most highly trained women all over the globe, there are now teams of Angels guided by multiple Bosleys taking on the toughest jobs everywhere. The screenplay is by Elizabeth Banks from a story by Evan Spiliotopoulos and David Auburn.', 2019, 'https://images-na.ssl-images-amazon.com/images/I/71-dOhA-LOL._AC_SL1334_.jpg', 'Comedy', 'charlieangels-heart', 'charliesangels'),
(26, 'Peter Rabbit', 'Thomas and Bea are now married and living with Peter and his rabbit family. Bored of life in the garden, Peter goes to the big city, where he meets shady characters and ends up creating chaos for the whole family. Follow-up to the 2018 film, \'Peter Rabbit\'.', 2018, 'https://i.pinimg.com/originals/81/bc/38/81bc38779d88c6e6bb0ececa0335baa5.jpg', 'Comedy', 'peterrabbit-heart', 'peterrabbit'),
(27, 'How the Grinch Stole Christmas', 'Inside a snowflake, high atop Mt. Crumpit, just north of town, a certain cave-dwelling curmudgeon peers down on the Christmas-adoring Whos of Whoville as they make their frantic Yuletide preparation. And this isn\'t your run-of-the-mill sourpuss. This is the Grinch (Jim Carey), and he is positively sick of those nog-sucking cheermongers. Why is the Grinch - well - so Grinchy? Nobody knows, not even his lone companion, the endlessly oppressed canine, Max. It could be because his head wasn\'t screwed on just right ; or maybe his shoes were too tight; or maybe because his heart was two sizes too small. With an expression that goes from glum to glummer and then to a malevolent lip-curling grin as a wicked light bulb clicks over his head - a wonderful, awful idea is born.', 2000, 'https://images-na.ssl-images-amazon.com/images/I/61DTHfzzJ-L._AC_SL1357_.jpg', 'Comedy', 'grinch-heart', 'grinch'),
(28, 'Ocean\'s 8', 'Danny Ocean\'s estranged sister Debbie attempts to pull off the heist of the century at New York City\'s star-studded annual Met Gala. Her first stop is to assemble the perfect crew: Lou, Rose, Daphne Kluger, Nine Ball, Tammy, Amita, and Constance.', 2018, 'https://pics.filmaffinity.com/Ocean_s_8-692056246-large.jpg', 'Comedy', 'ocean8-heart', 'oceans8'),
(29, 'The Croods', '\"The Croods\" are an eccentric family of cavemen, who survive the harsh terrain by living accordingly to a strict set of rules. But when their home is destroyed in the wake of an impending disaster known as \"The End\", they are forced to leave their home of shelter and security, and into the wilderness of the unknown to find a new home.', 2013, 'https://images-na.ssl-images-amazon.com/images/I/A1EeXBwmPiL._AC_SL1500_.jpg', 'Comedy', 'croods-heart', 'thecroods'),
(30, 'Deadpool', 'Based upon Marvel Comics’ most unconventional anti-hero, \"Deadpool\" tells the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.', 2016, 'https://images-na.ssl-images-amazon.com/images/I/91qmrdkBViL._AC_SL1500_.jpg', 'Comedy', 'deadpool-heart', 'deadpool'),
(31, 'Star Wars: Episode VIII - The Last Jedi', 'The evil First Order has become even more powerful than when we left it in \'The Force Awakens\', and is closing in on the Resistance led by General Leia Organa (Carrie Fisher). Pilot Poe Dameron (Oscar Isaac) leads a mission to take out a First Order Dreadnought. Meanwhile, Rey (Daisy Ridley) must ponder her own future and vocation, and Luke (Mark Hamill) has to reassess what his life means.', 2017, 'https://images-na.ssl-images-amazon.com/images/I/A1UKXyjirGL._AC_SL1500_.jpg', 'Science-Fiction', 'starwarsviii-heart', 'starwarseVIII'),
(32, 'Harry Potter and the Sorcerer\'s Stone', 'Harry Potter has learned to live with his bullying Uncle Vernon, Aunt and spoiled cousin. On his 11th birthday, Harry learns that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. Invited to attend Hogwarts School of Witchcraft and Wizardry, Harry embarks on the adventure of a lifetime. At Hogwarts, he finds the home and family he has never had.', 2001, 'https://images-na.ssl-images-amazon.com/images/I/713KEd-8jyL._AC_SL1500_.jpg', 'Science-Fiction', 'sorcererstoneHP-heart', 'harrypottersorcer'),
(33, 'Avatar', 'Year 2154. On a distant moon Pandora, a reluctant hero embarks on a journey of redemption and discovery, as he leads a heroic battle to save a civilization. AVATAR takes us to a spectacular new world beyond our imagination. Jake Sully (Sam Worthington) is a former Marine confined to a wheelchair. But despite his broken body, Jake is still a warrior at heart. He is recruited to travel light years to the human outpost on Pandora, where a corporate consortium is mining a rare mineral that is the key to solving Earth\'s energy crisis. Because Pandora\'s atmosphere is toxic, they have created the Avatar Program, in which human \"drivers\" have their consciousness linked to an avatar, a remotely-controlled biological body that can survive in the lethal air. These avatars are genetically engineered hybrids of human DNA mixed with DNA from the natives of Pandora... the Na\'vi. Reborn in his avatar form, Jake can walk again.', 2009, 'https://images-na.ssl-images-amazon.com/images/I/61jFTTf9RBL._AC_SL1230_.jpg', 'Science-Fiction', 'avatar-heart', 'avatar'),
(34, 'Ready Player One', 'When the creator of a virtual reality called the OASIS dies, he makes a posthumous challenge to all OASIS users to find his Easter Egg, which will give the finder his fortune and control of his world.', 2018, 'https://images-na.ssl-images-amazon.com/images/I/81SSoQgfaqL._AC_SL1474_.jpg', 'Science-Fiction', 'readyplayerone-heart', 'readyplayer1'),
(35, 'Fantastic Beasts: The Crimes of Frindelwald', 'Seventy years before Harry Potter reads writer Newt Scamander\'s (Eddie Redmayne) book in school, the author enjoys adventures in New York\'s secret community of witches and wizards. The spinoff film takes place in 1926, as Newt travels the globe to find and document magical creatures. But after completing a global excursion and arriving in New York for a brief stopover, his misplaced magical case leads to the escape of some of Newt\'s fantastic beasts in the No-Maj (American equivalent of \"Muggle\") world.', 2018, 'https://i.pinimg.com/originals/11/95/b8/1195b802fe9108f0458830054ba1fd57.jpg', 'Science-Fiction', 'fantasticbeastCF-heart', 'frindelwald'),
(36, 'The Hunger Games: Catching Fire', 'Katniss Everdeen has returned home safe after winning the 74th Annual Hunger Games along with fellow tribute Peeta Mellark. Winning means that they must turn around and leave their family and close friends, embarking on a \"Victor\'s Tour\" of the districts. Along the way Katniss senses that a rebellion is simmering, but the Capitol is still very much in control as President Snow prepares the 75th Annual Hunger Games (The Quarter Quell) - a competition that could change Panem forever.', 2013, 'https://m.media-amazon.com/images/M/MV5BMjA4NDg3NzYxMF5BMl5BanBnXkFtZTcwNTgyNzkyNw@@._V1_.jpg', 'Science-Fiction', 'catchingfireHG-heart', 'catchingfire'),
(37, 'Wonder Woman', 'The Amazonian princess-warrior Diana left her lush tropical island to dwell in our urban cityscapes of glass and steel. Tutored in the ways of the Greek warriors, and outfitted with incredible gifts the Goddess bestowed upon her people, she becomes Paradise Island\'s emissary to civilization.', 2017, 'https://cdn11.bigcommerce.com/s-ydriczk/images/stencil/original/products/88197/90726/Wonder-Woman-Advance-Style-B-Wonder-Poster-buy-original-movie-posters-at-starstills__91230.1494347007.jpg?c=2', 'Science-Fiction', 'wonderwoman-heart', 'wonderwoman'),
(38, 'Wonder Woman: 1984', 'In 1984, during the Cold War, Diana comes into conflict with two formidable foes—media businessman Maxwell Lord and friend-turned-enemy Barbara Minerva / Cheetah—while reuniting with her love interest Steve Trevor. A sequel to the 2017 super hero film \'Wonder Woman\'.', 2020, 'https://sm.ign.com/ign_es/screenshot/default/wonder-woman-1984-poster-700x1050_yub8.jpg', 'Science-Fiction', 'wonderwoman1984-heart', 'wonderwoman1984'),
(39, 'Captain Marvel', 'Carol Danvers becomes one of the universe\'s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.', 2019, 'https://m.media-amazon.com/images/M/MV5BMTE0YWFmOTMtYTU2ZS00ZTIxLWE3OTEtYTNiYzBkZjViZThiXkEyXkFqcGdeQXVyODMzMzQ4OTI@._V1_.jpg', 'Science-Fiction', 'captainmarvel-heart', 'captainmarvel'),
(40, 'Rogue One: A Star Wars Story', 'Jyn Erso, a Rebellion soldier and criminal, is about to experience her biggest challenge yet when Mon Mothma sets her out on a mission to steal the plans for the Death Star. With the aid of the Rebels, a master swordsman, and non-allied forces, Jyn will be in for something bigger than she thinks.', 2016, 'https://images-na.ssl-images-amazon.com/images/I/71ktdo2ie6L._AC_SL1200_.jpg', 'Science-Fiction', 'rogueone-heart', 'rogueone');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(9) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surnames` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `name`, `surnames`) VALUES
(2, 'victor00hs@gmail.com', 'f48f0f859ac3f79125bb5e411e5f8d5c', 'Victor', 'Hernandez Jimenez'),
(3, 'pepe@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'pepe', 'pepe pepe'),
(4, 'victor@asd.com', 'e10adc3949ba59abbe56e057f20f883e', 'asd', 'asdasd'),
(5, 'sdasd@df.cas', '5bac9b061b1131c1df54746b8a19e22a', '123', '123'),
(6, 'sdasd@df.sdfsdcas', '5bac9b061b1131c1df54746b8a19e22a', '123', '123'),
(7, 'vic@sgfd.casd', 'a8f5f167f44f4964e6c998dee827110c', 'asd', 'asd'),
(8, 'victor00hs@gmail.c', 'a3dcb4d229de6fde0db5686dee47145d', 'askjdhaksjdh', 'aksdjhaksjdh'),
(9, 'asd@asd.asd', 'fcea920f7412b5da7be0cf42b8c93759', 'Hola', 'Hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_movies`
--

CREATE TABLE `user_movies` (
  `user_fk_id` mediumint(9) NOT NULL,
  `movie_fk_id` mediumint(9) NOT NULL,
  `favourite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_movies`
--

INSERT INTO `user_movies` (`user_fk_id`, `movie_fk_id`, `favourite`) VALUES
(2, 1, 1),
(2, 2, 1),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1),
(2, 12, 1),
(2, 24, 1),
(2, 32, 1),
(2, 33, 1),
(2, 34, 1),
(2, 36, 1),
(3, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD UNIQUE KEY `movie_id` (`movie_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `user_movies`
--
ALTER TABLE `user_movies`
  ADD UNIQUE KEY `user_movies_pk` (`user_fk_id`,`movie_fk_id`),
  ADD KEY `user_fk_idx` (`user_fk_id`),
  ADD KEY `movie_fk_idx` (`movie_fk_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user_movies`
--
ALTER TABLE `user_movies`
  ADD CONSTRAINT `movie_fk` FOREIGN KEY (`movie_fk_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_fk_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
