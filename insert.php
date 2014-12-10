<?php

//$urgent = '';
//$statusPendiente = '';
//$name = 'Alfre';
//$lastName = 'Arrieta';
//$email = 'email@email.com';
//$season = 'season high';
//$bookingCompany = 'booking company exmaple';
//$bookingNum = 'AG2341AGT22';
//$numPeople = 29;
//$numNights = 4;
//$chkInDate = '';
//$chkInHour = '';
//$privates = '';
//$roomPrice = 189;
//$paymentType = 'PP';
//$typeCC = 'MasterCard';
//$ccName = 'El nombre de la tarjeta';
//$ccNum = '123123124121';
//$ccExp = '12/2023';
//$ccSecurity = '1231';
//$shuttleDate = '';
//$shuttleWhen = '';
//$shuttleTime = '';
//$shuttleFrom = '';
//$shuttleTo = '';
//$shuttleNumPeople = '';
//$shuttlePrice = '';
//$shuttleCompany = '';
//$flightAirport = '';
//$flightCompany = '';
//$flightNum = '';
//$flightFrom = '';
//$flightTime = '';
//$aditionalInfo = 'Aditional Info';
//$bookedBy = 'Diego';


$urgent = $_GET['urgent'];
$statusPendiente = $_GET['statusPendiente'];
$name = $_GET['name'];
$lastName = $_GET['lastName'];
$email = $_GET['email'];
$season = $_GET['season'];
$bookingCompany = $_GET['bookingCompany'];
$bookingNum = $_GET['bookingNum'];
$numPeople = $_GET['numPeople'];
$numNights = $_GET['numNights'];
$chkInDate = $_GET['chkInDate'];
$chkInHour = $_GET['chkInHour'];
$privates = $_GET['privates'];
$roomPrice = $_GET['roomPrice'];
$paymentType = $_GET['paymentType'];
$typeCC = $_GET['typeCC'];
$ccName = $_GET['ccName'];
$ccNum = $_GET['ccNum'];
$ccExp = $_GET['ccExp'];
$ccSecurity = $_GET['ccSecurity'];
$shuttleDate = $_GET['shuttleDate'];
$shuttleWhen = $_GET['shuttleWhen'];
$shuttleTime = $_GET['shuttleTime'];
$shuttleFrom = $_GET['shuttleFrom'];
$shuttleTo = $_GET['shuttleTo'];
$shuttleNumPeople = $_GET['shuttleNumPeople'];
$shuttlePrice = $_GET['shuttlePrice'];
$shuttleCompany = $_GET['shuttleCompany'];
$flightAirport = $_GET['flightAirport'];
$flightCompany = $_GET['flightCompany'];
$flightNum = $_GET['flightNum'];
$flightFrom = $_GET['flightFrom'];
$flightTime = $_GET['flightTime'];
$aditionalInfo = $_GET['aditionalInfo'];
$bookedBy = $_GET['bookedBy'];


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



$query = "INSERT INTO TReservas (urgent, statusPendiente, name, lastName, email, season, bookingCompany, bookingNum, numPeople, numNights, ".
    "checkInDate, checkInHour, privateRoom, price, paymentType, creditCardType, ccName, ccNum, ccExpires, ccSecurity, ".
    "shuttleDate, shuttleWhen, shuttleFrom, shuttleTo, shuttleNumPeople, shuttlePrice, shuttleCompany, shuttleTime, flightAirport, ".
    "flightCompany, flightNum, flightFrom, flightTime, aditionalInfo, bookedBy) ".

    "VALUES (".$urgent.", '".$statusPendiente."', '".$name."', '".$lastName."', '".$email."', '".$season."', '".$bookingCompany."', '".$bookingNum."', '".$numPeople.
    "', '".$numNights."', '".$chkInDate."', '".$chkInHour."', '".$privates."', '".$roomPrice."', '".$paymentType."', '".$typeCC.
    "', '".$ccName."', '".$ccNum."', '".$ccExp."', '".$ccSecurity."', '".$shuttleDate."', '".$shuttleWhen."', '".$shuttleFrom.
    "', '".$shuttleTo."', '".$shuttleNumPeople."', '".$shuttlePrice."', '".$shuttleCompany."', '".$shuttleTime."', '".$flightAirport."', '".$flightCompany.
    "', '".$flightNum."', '".$flightFrom."', '".$flightTime."', '".$aditionalInfo."', '".$bookedBy."')";

echo $query;
@mysql_query($query);

/*
if ($name != '') {
    @mysql_query("INSERT INTO TReservas (name, lastName, email, season, bookingCompany, numNights) VALUES ('Get', 'Wayne', 'dakota34@gmail.com', 'season', 'Hostelworld', 3)");
}*/






?>