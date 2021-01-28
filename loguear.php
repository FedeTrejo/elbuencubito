<?php

include("con_db.php");

if(isset($_POST['login'])){
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    $consulta = "SELECT * FROM datos where nombre='$nombre' and contraseña='$contraseña'";
    $resultado = mysqli_query($conex,$consulta);

    $filas = mysqli_num_rows($resultado);



    if(strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['contraseña']) >= 1){
                if($filas){
                    session_start();
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['contraseña'] = $contraseña;
                    
                    $loggged = TRUE;
                    header("Location:index.php");
                }else{
                    $logged = FALSE;
                    ?>
                    <div style="color:red">Error en la autenticación</div>
                    <?php
                }
                
                mysqli_free_result($resultado);
                mysqli_close($conex);
            }else{
                $logged = FALSE;
                ?>
                    <div style="color:red">Completa todos los campos</div>
                <?php
            }        

}else{
    $logged = FALSE;
}


?>