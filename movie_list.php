<?php
session_start();
  include ("database.php"); // connecting  database 
  

?>


<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel ="stylesheet" href="movie_list_style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sen:wght@400;700;800&display=swap" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Movie Design</title>

    
</head>


<!--nav bar-->

<body>

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

        
    </div>






    <div class="content-container"> 

        <!--movie list-->
        
        <div class="movie-list-container">
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
                            <a href="single_movie.html" class="nav-link">Watch</a></button>
                        </button>
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