
<?php 
include 'php/conn.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>TMSK</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- Mapbox
    ================================================== -->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.css' rel='stylesheet' />
    <style>
    body { margin:0; padding:0; }
    #map { position:absolute; top:0; bottom:0; width:100%; }
        .marker {
        display: block;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        padding: 0;
        }
        .coordinates {
        background: rgba(0,0,0,0.5);
        color: #fff;
        position: absolute;
        bottom: 40px;
        left: 10px;
        padding:5px 10px;
        margin: 0;
        font-size: 11px;
        line-height: 18px;
        border-radius: 3px;
        display: none;
        }
        #instructions {
  position: absolute;
  margin: 20px;
  width: 25%;
  top: 0;
  bottom: 20%;
  padding: 20px;
  background-color: rgba(255, 255, 255, 0.9);
  overflow-y: scroll;
  font-family: sans-serif;
  font-size: 0.8em;
  line-height: 2em;
}

.duration {
  font-size: 2em;
}


    </style>

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="smoothscroll" href="?view=home">
                <h3 class="display-1--light">Taman Margasatwa <br> dan Budaya Kinantan</h3>
            </a>
        </div> <!-- end header-logo -->

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                
                <h3>Taman Margasatwa <br>dan Budaya Kinantan</h3>
                
                <ul class="header-nav__list">
                    <li><a href="?view=home" title="home">Home</a></li>
                    <li><a href="?view=about" title="about">About</a></li>
                    <li><a href="?view=satwa" title="services">Satwa</a></li>
                    <li><a href="?view=news" title="works">Berita</a></li>
                    <li><a href="?view=review" title="contact">Review</a></li>
                </ul>
    
           

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle opaque" href="#0">
            <span class="header-menu-icon opaque"></span>
        </a>

    </header> <!-- end s-header -->
    <?php
        include 'php/route.php';
    ?>
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">            
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/map.js"></script>

</body>

</html>