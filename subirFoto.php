<?php
include("con_db.php");

if(isset($_POST['addfoto1'])){

    $foto1 = $_FILES['fotoarchivo1']['name'];
    $ruta1 = "fotosHistorias/".$foto1;
    $autor1 = $_SESSION['nombre'];
    $destino1 = 1;

    $allowed = array('png', 'jpeg', 'jpg');
    $ext = pathinfo($foto1, PATHINFO_EXTENSION);

    if(in_array($ext, $allowed)){

    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta1','$autor1','$destino1')";
    
    $resultadogal = mysqli_query($conex, $consultagal);

    if($resultadogal){

        $archivo1 = $_FILES['fotoarchivo1']['tmp_name'];
        move_uploaded_file($archivo1, $ruta1);
        ?>
        <div style="color:green;position:absolute;z-index:75;">Foto añadida con éxito</div>
        <script> location.href= "historias.php";</script>
        

        <?php
    } else{
        ?>
        <div style="color:red;position:absolute;z-index:75;">Oops, ha ocurrido un error</div>
        <?php
    }
}else{
    ?>
        <div style="color:red;position:absolute;z-index:75;">Debes ingresar un archivo de imagen válido.</div>
    <?php
}

} else{
?>
<?php
}

if(isset($_POST['addfoto2'])){

                    $foto2 = $_FILES['fotoarchivo2']['name'];
                    $ruta2 = "fotosHistorias/".$foto2;
                    $autor2 = $_SESSION['nombre'];
                    $destino2 = 2;

                    $allowed = array('png', 'jpeg', 'jpg');
                    $ext = pathinfo($foto2, PATHINFO_EXTENSION);

                    if(in_array($ext, $allowed)){

                    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta2','$autor2','$destino2')";
                    
                    $resultadogal = mysqli_query($conex, $consultagal);

                    if($resultadogal){

                        $archivo2 = $_FILES['fotoarchivo2']['tmp_name'];
                        move_uploaded_file($archivo2, $ruta2);
                        ?>
                        <div style="color:green;position:absolute;z-index:75;">Foto añadida con éxito</div>
                        <script> location.href= "historias.php";</script>
                        

                        <?php
                    } else{
                        ?>
                        <div style="color:red;position:absolute;z-index:75;">Oops, ha ocurrido un error</div>
                        <?php
                    }
                }else{
    ?>
        <div style="color:red;position:absolute;z-index:75;">Debes ingresar un archivo de imagen válido.</div>
    <?php
}
} else{
    ?>
    <?php
}

if(isset($_POST['addfoto3'])){

    $foto3 = $_FILES['fotoarchivo3']['name'];
    $ruta3 = "fotosHistorias/".$foto3;
    $autor3 = $_SESSION['nombre'];
    $destino3 = 3;

    $allowed = array('png', 'jpeg', 'jpg');
    $ext = pathinfo($foto3, PATHINFO_EXTENSION);

    if(in_array($ext, $allowed)){

    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta3','$autor3','$destino3')";
    
    $resultadogal = mysqli_query($conex, $consultagal);

    if($resultadogal){

        $archivo3 = $_FILES['fotoarchivo3']['tmp_name'];
        move_uploaded_file($archivo3, $ruta3);
        ?>
        <div style="color:green;position:absolute;z-index:75;">Foto añadida con éxito</div>
        <script> location.href= "historias.php";</script>
        

        <?php
    } else{
        ?>
        <div style="color:red;position:absolute;z-index:75;">Oops, ha ocurrido un error</div>
        <?php
    }
}else{
    ?>
        <div style="color:red;position:absolute;z-index:75;">Debes ingresar un archivo de imagen válido.</div>
    <?php
}
} else{
?>
<?php
}

if(isset($_POST['addfoto4'])){

    $foto4 = $_FILES['fotoarchivo4']['name'];
    $ruta4 = "fotosHistorias/".$foto4;
    $autor4 = $_SESSION['nombre'];
    $destino4 = 4;

    $allowed = array('png', 'jpeg', 'jpg');
    $ext = pathinfo($foto4, PATHINFO_EXTENSION);

    if(in_array($ext, $allowed)){

    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta4','$autor4','$destino4')";
    
    $resultadogal = mysqli_query($conex, $consultagal);

    if($resultadogal){

        $archivo4 = $_FILES['fotoarchivo4']['tmp_name'];
        move_uploaded_file($archivo4, $ruta4);
        ?>
        <div style="color:green;position:absolute;z-index:75;">Foto añadida con éxito</div>
        <script> location.href= "historias.php";</script>
        

        <?php
    } else{
        ?>
        <div style="color:red;position:absolute;z-index:75;">Oops, ha ocurrido un error</div>
        <?php
    }
}else{
    ?>
        <div style="color:red;position:absolute;z-index:75;">Debes ingresar un archivo de imagen válido.</div>
    <?php
}
} else{
?>
<?php
}

if(isset($_POST['addfoto5'])){

    $foto5 = $_FILES['fotoarchivo5']['name'];
    $ruta5 = "fotosHistorias/".$foto5;
    $autor5 = $_SESSION['nombre'];
    $destino5 = 5;

    $allowed = array('png', 'jpeg', 'jpg');
    $ext = pathinfo($foto5, PATHINFO_EXTENSION);

    if(in_array($ext, $allowed)){

    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta5','$autor5','$destino5')";
    
    $resultadogal = mysqli_query($conex, $consultagal);

    if($resultadogal){

        $archivo5 = $_FILES['fotoarchivo5']['tmp_name'];
        move_uploaded_file($archivo5, $ruta5);
        ?>
        <div style="color:green;position:absolute;z-index:75;">Foto añadida con éxito</div>
        <script> location.href= "historias.php";</script>
        

        <?php
    } else{
        ?>
        <div style="color:red;position:absolute;z-index:75;">Oops, ha ocurrido un error</div>
        <?php
    }
}else{
    ?>
        <div style="color:red;position:absolute;z-index:75;">Debes ingresar un archivo de imagen válido.</div>
    <?php
}
} else{
?>
<?php
}