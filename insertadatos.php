<?php

include ("coneccion.php");

$conect = @mysql_connect($host,$user,$pw); or die (problema al coenctar con el servidor);
$db =@mysql_select_db("prueba", $conect); or die ("problema al seleccionar la DB");

$conect = mysql_query("insert into datos usuario () values ('$_POST []',')")

mysql_close();





?php