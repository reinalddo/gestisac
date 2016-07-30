<?php
include("Clases/class.MySQL_Clase.php");
include("Clases/class.Usuarios.php");
include("Clases/class.Inicio.php");
include("Clases/class.Servicios.php");
include("Clases/class.Nosotros.php");
include("Clases/class.Contacto.php");
include("Clases/class.Footer.php");

$obj_usuarios  = new Usuarios();
$obj_inicio    = new Inicio();
$obj_servicios = new Servicios();
$obj_nosotros  = new Nosotros();
$obj_contacto  = new Contacto();
$obj_footer    = new Footer();
?>