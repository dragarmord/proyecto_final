<?php

//conexion a la base de datos
//Usuario
//Contraseña
$bd=@mysql_connect("localhost", "usuario", "contraseña");
if (!$bd) {
echo ("Error, No se pudo conectar con la base de datos en este
momento, Inténtelo más tarde");
exit();
}
$sel=@mysql_select_db("basedatos");
if (!$sel){
echo( "Error, No se puede acceder a la base de datos en este momento, Inténtelo más tarde");
exit();
}
@mysql_query("SET NAMES 'utf8'");

?>