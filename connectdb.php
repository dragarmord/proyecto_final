<?php

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
@mysql_query("INSERT INTO TReservas (name, lastName, email, season, bookingCompany, numNights) VALUES ('Franco', 'Wayne', 'dakota34@gmail.com', 'season', 'Hostelworld', 3)");



?>