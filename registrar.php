<?php

include("con_db.php");

if(isset($_POST['register'])){

    if(strlen($_POST['name']) >= 1 && 
             strlen($_POST['contraseña']) >= 1 &&
             strlen($_POST['contraseña1']) >= 1){
                 
    if(strlen($_POST['contraseña']) > 3){

        if($_POST['contraseña'] == $_POST['contraseña1']){

                    $name = trim($_POST['name']);
                    $contraseña = trim($_POST['contraseña']);
                    $contraseña1 = trim($_POST['contraseña1']);
                    $imagen = "desconocido.png";
                    $fechareg = date("d/m/y");
                    $consulta = "INSERT INTO datos(nombre, contraseña, contraseña1, imagen, fecha_reg) VALUES ('$name','$contraseña','$contraseña1','$imagen','$fechareg')";
                    $resultado = mysqli_query($conex, $consulta);
                    if($resultado){
                        ?>
                        <div style="color:green">Registrado con éxito, <a href="login.php">Inicia sesión</a></div>
                        <?php
                    } else{
                        ?>
                        <div style="color:red">Oops, ha ocurrido un error</div>
                        <?php
                    }
                
        }else{
            ?>
            <div style="color:red">Introduzca la misma contraseña</div>
            <?php
        }
    }else{
    ?>
        <div style="color:red">La contraseña debe tener 4 caracteres minimo</div>
        <?php
    }
} else{
    ?>
    <div style="color:red">Completa todos los campos</div>
    <?php
}
}
?>