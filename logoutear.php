<?php
include("con_db.php");

if(isset($_POST['cerrar_sesion'])){
   include("logout.php");  

}
if(isset($_POST['cambiar_contraseña'])){
   include("cambio_contraseña.php");
}
?>