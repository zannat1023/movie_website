<?php
session_start();
  include ("database.php"); // connecting  database 
  

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel ="stylesheet" href = "css\single_movie_style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sen:wght@400;700;800&display=swap" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Movie Design</title>

    
</head>

     <!--nav bar-->

<body>
    

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


    <section class="product-details">
        <img src="img\4.jpg" id="main-img" class="single-pro-image" width="100%" alt="">
            
        <div class="single-pro-details">
            <h2>1917</h2>
            <h5>Release date: December 25, 2019 (USA)</h5>

            <h4>User Rating: <span id="rate">8.5</span></h4>

            <button>Add To Watchlist</button>

            <p class="rating"><img class="imdb-logo" src="img/imdb.png"> <span id="rate">7.5</span></p>
             
            <h4>Synopsis</h4>

            <p>During World War I, two British soldiers -- Lance Cpl. Schofield and Lance Cpl. Blake -- receive seemingly impossible orders. In a race against time, they must cross over into enemy territory to deliver a message that could potentially save 1,600 of their fellow comrades -- including Blake's own brother.</p>
        
        </div>

    </section>

    <section class="trailer">
        <h2>Trailer</h2>
        <iframe width="1271" height="715" src="https://www.youtube.com/embed/YqNYrYUiMfg" title="1917 - Official Trailer [HD]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </section>

    <section class="feature-product">
        <h2>Cast and Director</h2>
        <div class="product-container">
            
            <div class="product">
                <img src="img\Directors\John Philips.jpg" alt="">
                <div class="description">
                    <span>Director</span>
                    <h5>John Philips</h5>
                </div>
            </div>
            <div class="product">
                <img src="img\Actors\Dave J Hogan.jpg" alt="">
                <div class="description">
                    <span>Actor</span>
                    <h5>Dave J Hogan</h5>
                </div>
            </div>
            <div class="product">
                <img src="img\Actors\Dean-Charles Chapman.jpg" alt="">
                <div class="description">
                    <span>Actor</span>
                    <h5>Dean-Charles Chapman</h5>
                </div>
            </div>
            <div class="product">
                <img src="img\Actors\Richard Madden.jpg" alt="">
                <div class="description">
                    <span>Actor</span>
                    <h5>Richard Madden</h5>
                </div>
            </div>

        </div>
    </section>

    <section class="contact">
        <div class="contact-form">
            <h2>Leave us a<span>Review </span></h2>
            <h6>We value your opinions</h6>
        </div>

        <div class="row">

            <form action="">
                <input type="number" placeholder="Your Rating" class="form-box">
                <textarea name="" id="" cols="30" rows="10" class="form-box message" placeholder="Your Review" required></textarea>
                <button type="submit"> SUBMIT <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>

    </section>

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