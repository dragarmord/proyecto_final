<?php
	require("../connectdb.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Arenal Backpackers Gallery</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/initializr.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/author.css">
    <link rel="stylesheet" href="../css/helper.css">
    <link rel="stylesheet" href="../css/mediaQueries.css">
    <link rel="stylesheet" href="../css/print.css">

    <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="overlay">
    <form id="tfnewsearch" method="get" action="http://www.google.com">
        <input type="text" class="tftextinput" name="q">
    </form>
</div>


<div class="header-container">
    <header class="wrapper clearfix">
        <i  id="searchIcon" class="fa fa-search"></i>

        <nav>
            <div class="menu-bar-mobile">
                <span class="pull-left toggle-btn close">Menu</span>
                <!-- <span class="">Open</span> -->
            </div>
            <ul class="navList">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../aboutus/index.php">About Us</a></li>
                <li><a href="../gallery/index.php">Gallery</a></li>
                <li><a href="http://mail.yahoo.com">Y! Mail</a></li>
                <li><a href="https://login.live.com/login.srf?wa=wsignin1.0&ct=1417324993&rver=6.1.6206.0&sa=1&ntprob=-1&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fmail.live.com%2F%3Fowa%3D1%26owasuffix%3Dowa%252f&id=64855&snsc=1&cbcxt=mail">Outlook Mail</a></li>
                <li><a href="#">Bookings</a></li>
                <li><a href="index.php">Site Map</a></li>
            </ul>
        </nav>
    </header>

</div>

<div class="banner">
    <img src="../img/arenalBanner-mobile.jpg" class="img-320">
    <img src="../img/arenalBanner.jpg" class="img-768">
</div>

<div class="main-container">
    <div class="main wrapper clearfix">

        <h1>Site Map</h1>
        <div>




        </div>


    </div> <!-- #main -->
</div> <!-- #main-container -->

<div class="footer-container">
    <footer class="wrapper">
        <h2><a href="#">Costa Rica Hostel Network</a></h2>
        <div class="footer1">
            <div><a href="#">Beds n' Drinks (South Beach)</a></div>
            <div><a href="#">Arenal Backpackers Resort</a></div>
            <div><a href="#">Alajuela Backpackers</a></div>
            <div><a href="#">Monteverde Backpackers</a></div>
            <div><a href="#">Hostel Toruma</a></div>
            <div><a href="#">Hostel Pangea</a></div>
        </div>

        <div class="footer2">


            <div><a href="#">Home</a></div>
            <div><a href="../aboutus/index.php">About Us</a></div>
            <div><a href="#">Gallery</a></div>
            <div><a href="http://mail.yahoo.com">Y! Mail</a></div>
            <div><a href="https://login.live.com/login.srf?wa=wsignin1.0&ct=1417324993&rver=6.1.6206.0&sa=1&ntprob=-1&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fmail.live.com%2F%3Fowa%3D1%26owasuffix%3Dowa%252f&id=64855&snsc=1&cbcxt=mail">Outlook Mail</a></div>
            <div><a href="#">Bookings</a></div>
            <div><a href="index.php">Site Map</a></div>

        </div>
    </footer>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<script src="../js/main.js"></script>

</body>
</html>