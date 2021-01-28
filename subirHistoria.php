<?php
include("con_db.php");

if(isset($_POST['subirbc1'])){

    if(strlen($_POST['titulo1']) >= 1 && 
             strlen($_POST['comentario1']) >= 1){

                    $titulo1 = $_POST['titulo1'];
                    $comentario1 = $_POST['comentario1'];
                    $foto1 = $_FILES['foto1']['name'];
                    $ruta1 = "fotosHistorias/".$foto1;
                    $autor1 = $_SESSION['nombre'];
                    $destino1 = 1;

                    $allowed = array('png', 'jpeg', 'jpg');
                    $ext = pathinfo($foto1, PATHINFO_EXTENSION);

                    if(in_array($ext, $allowed)){

                    $consulta = "INSERT INTO historias(titulo, comentario, foto, autor, destino) VALUES ('$titulo1','$comentario1','$ruta1','$autor1','$destino1')";
                    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta1','$autor1','$destino1')";
                    
                    $resultadogal = mysqli_query($conex, $consultagal);
                    $resultado = mysqli_query($conex, $consulta);

                    if($resultado && $resultadogal){
                        $consulta = mysqli_query($conex,"SELECT * FROM historias WHERE titulo = '$titulo1'");
                        $valores = mysqli_fetch_array($consulta);
                        $titulo1 = $valores['titulo'];
                        $foto = $valores['foto'];
                        $nombreimg1 = $_FILES['foto1']['name'];
                        $archivo1 = $_FILES['foto1']['tmp_name'];
                        $ruta1 = "fotosHistorias/".$nombreimg1; 
                        move_uploaded_file($archivo1, $ruta1);
                        ?>
                        <script> location.href= "#popup";
                        document.getElementById("title1h").style.zIndex=50;
                        </script>
                        
                        <?php
                    } else{
                        ?>
                        <div style="color:red;position:absolute;z-index:1000;">Oops, ha ocurrido un error</div>
                        <?php
                    }
                }else{
                    ?>
                        <div style="color:red;position:absolute;z-index:1000;">Debes ingresar un archivo de imagen válido.</div>
                    <?php
                }
                
} else{
    ?>
    <div style="color:red">Completa todos los campos</div>
    <?php
}
}

if(isset($_POST['subirbc2'])){

    if(strlen($_POST['titulo2']) >= 1 && 
             strlen($_POST['comentario2']) >= 1){

                    $titulo2 = $_POST['titulo2'];
                    $comentario2 = $_POST['comentario2'];
                    $foto2 = $_FILES['foto2']['name'];
                    $ruta2 = "fotosHistorias/".$foto2;
                    $autor2 = $_SESSION['nombre'];
                    $destino2 = 2;

                    $allowed = array('png', 'jpeg', 'jpg');
                    $ext = pathinfo($foto2, PATHINFO_EXTENSION);

                    if(in_array($ext, $allowed)){

                    $consulta = "INSERT INTO historias(titulo, comentario, foto, autor, destino) VALUES ('$titulo2','$comentario2','$ruta2','$autor2','$destino2')";
                    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta2','$autor2','$destino2')";
                    
                    $resultadogal = mysqli_query($conex, $consultagal);
                    $resultado = mysqli_query($conex, $consulta);
                    if($resultado && $resultadogal){
                        $consulta = mysqli_query($conex,"SELECT * FROM historias WHERE titulo = '$titulo2'");
                        $valores = mysqli_fetch_array($consulta);
                        $titulo2 = $valores['titulo'];
                        $foto = $valores['foto'];
                        $nombreimg2 = $_FILES['foto2']['name'];
                        $archivo2 = $_FILES['foto2']['tmp_name'];
                        $ruta2 = "fotosHistorias/".$nombreimg2; 
                        move_uploaded_file($archivo2, $ruta2);
                        ?>
                        <script> location.href= "#popup";
                            document.getElementById("title1h").style.zIndex=50;
                        </script>
                        <?php
                    } else{
                        ?>
                        <div style="color:red;position:absolute;z-index:1000;">Oops, ha ocurrido un error</div>
                        <?php
                    }
                }else{
                    ?>
                        <div style="color:red;position:absolute;z-index:1000;">Debes ingresar un archivo de imagen válido.</div>
                    <?php
                }
} else{
    ?>
    <div style="color:red">Completa todos los campos</div>
    <?php
}
}

if(isset($_POST['subirbc3'])){

    if(strlen($_POST['titulo3']) >= 1 && 
             strlen($_POST['comentario3']) >= 1){

                    $titulo3 = $_POST['titulo3'];
                    $comentario3 = $_POST['comentario3'];
                    $foto3 = $_FILES['foto3']['name'];
                    $ruta3 = "fotosHistorias/".$foto3;
                    $autor3 = $_SESSION['nombre'];
                    $destino3 = 3;

                    $allowed = array('png', 'jpeg', 'jpg');
                    $ext = pathinfo($foto3, PATHINFO_EXTENSION);

                    if(in_array($ext, $allowed)){

                    $consulta = "INSERT INTO historias(titulo, comentario, foto, autor, destino) VALUES ('$titulo3','$comentario3','$ruta3','$autor3','$destino3')";
                    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta3','$autor3','$destino3')";
                    
                    $resultadogal = mysqli_query($conex, $consultagal);
                    $resultado = mysqli_query($conex, $consulta);
                    if($resultado && $resultadogal){
                        $consulta = mysqli_query($conex,"SELECT * FROM historias WHERE titulo = '$titulo3'");
                        $valores = mysqli_fetch_array($consulta);
                        $titulo3 = $valores['titulo'];
                        $foto = $valores['foto'];
                        $nombreimg3 = $_FILES['foto3']['name'];
                        $archivo3 = $_FILES['foto3']['tmp_name'];
                        $ruta3 = "fotosHistorias/".$nombreimg3; 
                        move_uploaded_file($archivo3, $ruta3);
                        ?>
                        <script> location.href= "#popup";
                            document.getElementById("title1h").style.zIndex=50;
                        </script>
                        <?php
                    } else{
                        ?>
                        <div style="color:red;position:absolute;z-index:1000;">Oops, ha ocurrido un error</div>
                        <?php
                    }
                }else{
                    ?>
                        <div style="color:red;position:absolute;z-index:1000;">Debes ingresar un archivo de imagen válido.</div>
                    <?php
                }
                
} else{
    ?>
    <div style="color:red">Completa todos los campos</div>
    <?php
}
}

if(isset($_POST['subirbc4'])){

    if(strlen($_POST['titulo4']) >= 1 && 
             strlen($_POST['comentario4']) >= 1){

                    $titulo4 = $_POST['titulo4'];
                    $comentario4 = $_POST['comentario4'];
                    $foto4 = $_FILES['foto4']['name'];
                    $ruta4 = "fotosHistorias/".$foto4;
                    $autor4 = $_SESSION['nombre'];
                    $destino4 = 4;

                    $allowed = array('png', 'jpeg', 'jpg');
                    $ext = pathinfo($foto4, PATHINFO_EXTENSION);

                    if(in_array($ext, $allowed)){

                    $consulta = "INSERT INTO historias(titulo, comentario, foto, autor, destino) VALUES ('$titulo4','$comentario4','$ruta4','$autor4','$destino4')";
                    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta4','$autor4','$destino4')";
                    
                    $resultadogal = mysqli_query($conex, $consultagal);
                    $resultado = mysqli_query($conex, $consulta);
                    if($resultado && $resultadogal){
                        $consulta = mysqli_query($conex,"SELECT * FROM historias WHERE titulo = '$titulo4'");
                        $valores = mysqli_fetch_array($consulta);
                        $titulo4 = $valores['titulo'];
                        $foto = $valores['foto'];
                        $nombreimg4 = $_FILES['foto4']['name'];
                        $archivo4 = $_FILES['foto4']['tmp_name'];
                        $ruta4 = "fotosHistorias/".$nombreimg4; 
                        move_uploaded_file($archivo4, $ruta4);
                        ?>
                        <script> location.href= "#popup";
                            document.getElementById("title1h").style.zIndex=50;
                        </script>
                        <?php
                    } else{
                        ?>
                        <div style="color:red;position:absolute;z-index:1000;">Oops, ha ocurrido un error</div>
                        <?php
                    }
                }else{
                    ?>
                        <div style="color:red;position:absolute;z-index:1000;">Debes ingresar un archivo de imagen válido.</div>
                    <?php
                }
                
} else{
    ?>
    <div style="color:red">Completa todos los campos</div>
    <?php
}
}

if(isset($_POST['subirbc5'])){

    if(strlen($_POST['titulo5']) >= 1 && 
             strlen($_POST['comentario5']) >= 1){

                    $titulo5 = $_POST['titulo5'];
                    $comentario5 = $_POST['comentario5'];
                    $foto5 = $_FILES['foto5']['name'];
                    $ruta5 = "fotosHistorias/".$foto5;
                    $autor5 = $_SESSION['nombre'];
                    $destino5 = 5;

                    $allowed = array('png', 'jpeg', 'jpg');
                    $ext = pathinfo($foto5, PATHINFO_EXTENSION);

                    if(in_array($ext, $allowed)){
                
                    $consulta = "INSERT INTO historias(titulo, comentario, foto, autor, destino) VALUES ('$titulo5','$comentario5','$ruta5','$autor5','$destino5')";
                    $consultagal = "INSERT INTO galeria(foto, autor, destino) VALUES ('$ruta5','$autor5','$destino5')";
                    
                    $resultadogal = mysqli_query($conex, $consultagal);
                    $resultado = mysqli_query($conex, $consulta);
                    if($resultado && $resultadogal){
                        $consulta = mysqli_query($conex,"SELECT * FROM historias WHERE titulo = '$titulo5'");
                        $valores = mysqli_fetch_array($consulta);
                        $titulo5 = $valores['titulo'];
                        $foto = $valores['foto'];
                        $nombreimg5 = $_FILES['foto5']['name'];
                        $archivo5 = $_FILES['foto5']['tmp_name'];
                        $ruta5 = "fotosHistorias/".$nombreimg5; 
                        move_uploaded_file($archivo5, $ruta5);
                        ?>
                        <script> location.href= "#popup";
                            document.getElementById("title1h").style.zIndex=50;
                        </script>
                        <?php
                    } else{
                        ?>
                        <div style="color:red;position:absolute;z-index:1000;">Oops, ha ocurrido un error</div>
                        <?php
                    }
                }else{
                    ?>
                        <div style="color:red;position:absolute;z-index:1000;">Debes ingresar un archivo de imagen válido.</div>
                    <?php
                }
                
} else{
    ?>
    <div style="color:red">Completa todos los campos</div>
    <?php
}
}
?>


