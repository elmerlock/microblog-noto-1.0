<?php
 header("Cache-Control: no-cache");
 header("Pragma: no-cache");
 ini_set("session.cookie_lifetime","5400");
 ini_set("session.gc_maxlifetime","5400");
 session_start();
 include "funciones/interfaz.php";
 validar_usuario();
 cabeza();
 cuerpo();
 pie();
?>
