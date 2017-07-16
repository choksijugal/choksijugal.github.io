<!DOCTYPE html>
<html>
  <head>
    <title>PostInc</title>
	<link rel="shortcut icon" href="http://postinc.in/img/logo2.png">
	<meta name="revisit-after" content="10 days">
	<meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

    <script type="text/javascript" src="js/store.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/store.css"/>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body onload="Materialize.showStaggeredList('#nav-mobile');">
   <!-- Header begin -->
   <div class="row">
       <div class="col m12">
            <div class="navbar-fixed" id="storeheader">
                <nav class="black z-depth-5" role="navigation">
                    <div class="nav-wrapper">
                        <div class="col m4">
                            <span class="menuicon" id="opensidenav"><i class="material-icons">menu</i></span>
                        </div>
                        <a class="logoname center" href="#" class="brand-logo">POSTINC</a>
                        <span class="beta">STORE</span>
                        <span class="caret storedropdown"></span>
                        <ul id="nav-mobile" class="right hide-on-small-only">
                          <li><a href="#"><i class="large material-icons">notifications</i></a></li>
                          <li><i class="material-icons">local_grocery_store</i></li>
                          <li><a href="#"><i class="large material-icons">person</i></a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="#"><i class="large material-icons">add_alert</i></a></li>
                            <li><a href="#"><i class="large material-icons">shopping_cart</i></a></li>
                            <li><a href="#"><i class="large material-icons">perm_identity</i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header end -->
   <!--  <ul class="dropdownmenu">
        <li>Store</li>
        <li>Blog</li>
    </ul> -->
    <div id="mySidenav" class="sidenav">
        <div id="searchbox">
            <nav id="searchboxnav">
                <div class="nav-wrapper">
                  <form>
                    <div class="input-field">
                      <input id="search" type="search" placeholder="Search Categories">
                      <i class="material-icons">search</i>
                    </div>
                  </form>
                </div>
            </nav>
        </div>
        <div class="sidenavcategories">
        <a href="#">TV Series</a><hr>
        <a href="#">Vehicles</a><hr>
        <a href="#">Anime</a><hr>
        <a href="#">Gaming</a><hr>
        <a href="#">Sports</a><hr>
        <a href="#">Quotes</a><hr>
        <a href="#">Music Bands</a><hr>
        <a href="#">Famous Personalities</a><hr>
        <a href="#">Superheroes</a><hr>
        <a href="#">Miscellaneous</a><hr>
        </div>
    </div>
    <!-- Carousel Start -->
    <div class="section scrollspy" class="section scrollspy">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img id="cimg1" src="img/Carousel1.jpg" class="carouselimage">
            </div>
            <div class="mySlides fade">
                <img id="cimg2" src="img/Carousel2.jpg" class="carouselimage">
            </div>
            <div class="mySlides fade">
                <img id="cimg3" src="img/Carousel3.jpg" class="carouselimage">
            </div>
            <div class="mySlides fade">
                <img id="cimg4" src="img/Carousel4.jpg" class="carouselimage">
            </div>
            <div class="mySlides fade">
                <img id="cimg5" src="img/Carousel5.jpg" class="carouselimage">
            </div>
            <div class="mySlides fade">
                <img id="cimg6" src="img/Carousel6.jpg" class="carouselimage">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="dotsclass" style="text-align:center">
                <div class="innerdotsclass">
                  <span class="dot dot1"></span> 
                  <span class="dot dot2"></span> 
                  <span class="dot dot3"></span>
                  <span class="dot dot4"></span> 
                  <span class="dot dot5"></span> 
                  <span class="dot dot6"></span> 
                </div>
            </div>
        </div>
        <!--Carousel End -->

        <!-- Display trending posters and poster categories -->
        <div class="lowerpart">
            <div class="lowerpart-inner">
                <div class="row">
                    <div class="col m12"><h5 class="lowertitle" align="center">Trending</h5></div>
                </div>
                <div class="row center-align posterdisplaydiv">
                    <div class="col m1"><!-- <img class="posterdisplay" src="img/Image1.jpg"> --></div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m1"><!-- <img class="posterdisplay" src="img/Image1.jpg"> --></div>                
                </div>
                <br>
                <div class="row center-align posterdisplaydiv">
                    <div class="col m1"><!-- <img class="posterdisplay" src="img/Image1.jpg"> --></div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="posterdisplayimgdiv">
                            <img class="posterdisplay" src="img/Image1.jpg">
                        </div>
                    </div>
                    <div class="col m1"><!-- <img class="posterdisplay" src="img/Image1.jpg"> --></div>                
                </div>

                <br>

                <div class="row">
                    <div class="col m12"><h5 class="lowertitle" align="center">Categories</h5></div>
                </div>
                <br><br>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    <!-- End of trending posters and categories -->
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/store.js"></script>
</body>
</html>