<?php
    $root = $_SERVER['DOCUMENT_ROOT']."/";
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
        <title>Arenal Backpackers Bookings</title>
        <meta name="description" content="">
        <?php include($root."/include/head.html"); ?>
    </head>

    <body>
        <?php include($root."/include/header.html"); ?>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <h1>Site Map</h1>
                <div class="hostelLinks">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../aboutus/index.php">About Us</a></li>
                        <li><a href="../gallery/index.php">Gallery</a></li>
                        <li><a href="http://mail.yahoo.com">Y! Mail</a></li>
                        <li><a href="https://login.live.com/login.srf?wa=wsignin1.0&ct=1417324993&rver=6.1.6206.0&sa=1&ntprob=-1&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fmail.live.com%2F%3Fowa%3D1%26owasuffix%3Dowa%252f&id=64855&snsc=1&cbcxt=mail">Outlook Mail</a></li>
                        <li><a href="#">Bookings</a></li>
                        <li><a href="http://costaricahostelnetwork.com/">Costa Rica Hostel Network</a></li>
                        <li><a href="http://www.bedsndrinks.com/">Beds n' Drinks (South Beach)</a></li>
                        <li><a href="http://arenalbackpackersresort.com/">Arenal Backpackers Resort</a></li>
                        <li><a href="http://alajuelabackpackers.com/">Alajuela Backpackers</a></li>
                        <li><a href="http://monteverdebackpackers.com/">Monteverde Backpackers</a></li>
                        <li><a href="http://hosteltoruma.com/">Hostel Toruma</a></li>
                        <li><a href="http://hostelpangea.com/">Hostel Pangea</a></li>
                    </ul>
                </div>


            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <?php include($root."/include/footer.html"); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="../js/main.js"></script>

    </body>
</html>