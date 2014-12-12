<?php
$root = $_SERVER['DOCUMENT_ROOT']."/";


//conexion a la base de datos
//Usuario
//Contraseña
$bd=@mysql_connect("hyper80.com", "hyper", "Modafoka");
if (!$bd) {
    echo ("Error, No se pudo conectar al servidor de la base de datos");
    exit();
}
$sel=@mysql_select_db("hyper_db");
if (!$sel){
    echo( "Error, Esta base de datos no existe");
    exit();
}


$query = "select id, name, lastName, email, season, bookingCompany, bookingNum, numPeople, numNights  from TReservas";

$result = @mysql_query($query);

$reservaInfo = array();

while ($reservaRow = @mysql_fetch_assoc($result))
    $reservaInfo[] = $reservaRow;

//This will give you $reservaInfo as an array with the following structure:

//[
//    [id => 1, name => 'gorge', code => '2123'],
//    [id => 2, name => 'flix', code => 'ksd02'],
//    [id => 3, name => 'jasmen', code => 'skaod2']
//]
//If you want to output the data:


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Arenal Backpackers - Site Map</title>
        <meta name="description" content="">
        <?php include($root."include/head.html"); ?>
    </head>

    <body>
        <?php include($root."include/header.html"); ?>

        <div class="main-container">

            <h1 class="main wrapper">Bookings</h1>
            <div class="main wrapper clearfix">

                <table class="bookingTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Season</th>
                            <th>Booking Company</th>
                            <th>Booking Number</th>
                            <th>Number People</th>
                            <th>Number Nights</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            foreach ($reservaInfo as $reserva) {
                                echo "<tr><td>".$reserva['id']."</td><td>".$reserva['name']."</td><td>".$reserva['lastName'].
                                    "</td><td>".$reserva['email']."</td><td>".$reserva['season']."</td><td>".$reserva['bookingCompany'].
                                    "</td><td>".$reserva['bookingNum']."</td><td>".$reserva['numPeople']."</td><td>".$reserva['numNights'].
                                    "</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>


            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <?php include($root."include/footer.html"); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="../js/main.js"></script>

    </body>
</html>