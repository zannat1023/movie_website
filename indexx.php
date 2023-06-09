<?php
session_start();
  include ("database.php"); // connecting  database 
  

?>


<!--html starts-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel ="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sen:wght@400;700;800&display=swap" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Movie Design</title>

    
</head>

     <!--nav bar-->

<body>

    <div class = "container">

        <div class="navbar">

            <div class="navbar-container">

                 <div class ="logo-container"><img class="logo" src="img/cover.png"></div>

                 <div class ="menu-container">

                    <ul class="menu-list">

                    <li class="menu-list-item">
                        <a href="indexx.php" class="nav-link">Home</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="series_list.php" class="nav-link">TV Show</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="movie_list.php" class="nav-link">Movies</a>
                    </li>
                    <li class="menu-list-item">
                        <a href="watchlist.php" class="nav-link">Watch-list</a>
                    </li>
                    <input class ="searchbar" type="text" placeholder="Search..">
                     </ul>
                </div>

                <div class ="profile-container">

                    <img class="profile-picture"  src = "img/profile.jpg">

                    <div class="profile-text-container">

                        <span class="profile-text">
                            <a href="login_signup.php" class="nav-link">Login</a>
                            <a href="profile_page.php" class="nav-link">profile</a>
                        </span>

                     </div>

                 </div>

            </div>

            <div class="featured-content">

                <img class="movie-logo" src="img/yeh-jawaani-hai-deewani.png">

                <p class="featured-desc">

                    Kabir and Naina bond during a trekking trip. Before Naina can express herself, Kabir leaves India to pursue his career. They meet again years later, but he still cherishes his dreams more than bonds.</p>
                
                    <p class="genre">GENRES</p>

                <p class = "gen">Comedy, Drama.</p>

                <button class="fetured-button1">Trailer</button>
                <button class="fetured-button2">My List</button>
                <p></p>
                
                <p class="rating"><img class="imdb-logo" src="img/imdb.png"> <span id="rate">7.5</span> <span id="year">2015</span></p>
            
            </div>
        
        </div>
    </div>

    <div class="content-container"> 

        <!--movie list-->
        
        <div class="movie-list-container">
            <h1 class="movie-list-title">NEW MOVIES</h1>

            <div class="movie-list-wrapper">

                <div class="movie-list">

                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/13.jpg" alt="">
                        <span class="movie-list-item-title">1920</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/14.jpg" alt="">
                        <span class="movie-list-item-title">PATHS OF GLORY</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/3.jpg" alt="">
                        <span class="movie-list-item-title">Storm</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/4.jpg" alt="">
                        <span class="movie-list-item-title">1917</span>
                        <button class="movie-list-item-button">
                            <a href="single_movie.php" class="nav-link">Watch</a></button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/5.jpg" alt="">
                        <span class="movie-list-item-title">Avengers</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/6.jpg" alt="">
                        <span class="movie-list-item-title">I'll Be Watching</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/7.jpg" alt="">
                        <span class="movie-list-item-title">Space Wars: Quest for the Deepstar</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/17.jpg" alt="">
                        <span class="movie-list-item-title">Love Again</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                </div>

            </div>

        </div>

        <div class="movie-list-container">
            <h1 class="movie-list-title">TRENDING MOVIES</h1>

            <div class="movie-list-wrapper">

                <div class="movie-list">

                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/8.jpg" alt="">
                        <span class="movie-list-item-title">Oblivion</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/9.jpg" alt="">
                        <span class="movie-list-item-title">The Hobbit: The Desolation of Smaug</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/10.jpg" alt="">
                        <span class="movie-list-item-title">Due Date</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/11.jpg" alt="">
                        <span class="movie-list-item-title">Kick-Ass 2</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/12.jpg" alt="">
                        <span class="movie-list-item-title">The Emoji Movie</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/15.jpg" alt="">
                        <span class="movie-list-item-title">John Wick: Chapter 4</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/16.jpg" alt="">
                        <span class="movie-list-item-title">1920 London</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/18.jpg" alt="">
                        <span class="movie-list-item-title">Fairy Tail: Dragon Cry</span>
                        <button class="movie-list-item-button">Watch</button>
                    </div>


                </div>

            </div>

        </div>
        
        <!--series list-->


        <div class="series-list-container">

            <h1 class="series-list-title">NEW SERIES</h1>

            <div class="series-list-wrapper">

                <div class="series-list">


                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s1.jpg" alt="">
                        <span class="series-list-item-title">Citadel</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>


                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s2.jpg" alt="">
                        <span class="series-list-item-title">The Nevers</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>


                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s3.jpg" alt="">
                        <span class="series-list-item-title">Money Heist</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>


                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s4.jpg" alt="">
                        <span class="series-list-item-title">Farzi</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>


                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s5.jpg" alt="">
                        <span class="series-list-item-title">Wednesday</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>


                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s6.jpg" alt="">
                        <span class="series-list-item-title">I'll Be Watching</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>


                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s7.jpg" alt="">
                        <span class="series-list-item-title">House of the Dragon</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>


                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s8.jpg" alt="">
                        <span class="series-list-item-title">The Winchesters</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>


                </div>

            </div>

        </div>

        <div class="series-list-container">
            <h1 class="series-list-title">TRENDING SERIES</h1>
            <div class="series-list-wrapper">
                <div class="series-list">
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s9.jpg" alt="">
                        <span class="series-list-item-title">The Crown</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s10.jpg" alt="">
                        <span class="series-list-item-title">Altered Carbon</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s5.jpg" alt="">
                        <span class="series-list-item-title">Wednesday</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s11.jpg" alt="">
                        <span class="series-list-item-title">The Last of Us</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s12.jpg" alt="">
                        <span class="series-list-item-title">Hercai</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s7.jpg" alt="">
                        <span class="series-list-item-title">House of the Dragon</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s6.jpg" alt="">
                        <span class="series-list-item-title">I'll Be Watching</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                    <div class="series-list-item">
                        <img class="series-list-item-img" src="img/s8.jpg" alt="">
                        <span class="series-list-item-title">The Winchesters</span>
                        <button class="series-list-item-button">Watch</button>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- footer section -->
    <footer>
        <h3>Movie Club</h3>
        <p>For more information on us,<br> please follow the links below</p>

        <div class="socials">
            <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-behance" target="_blank"></i></a>
            <a href="#"><i class="fa-brands fa-artstation" target="_blank"></i></a>
        </div>

        <h6>© 2022 Movie Club - All Rights Reserved</h6>
    </footer>

   
</body>
</html>