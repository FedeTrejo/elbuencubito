<?php

include("con_db.php");
$dest = 1;

$consulta = "SELECT * FROM historias WHERE destino = '$dest';";
$resultado = mysqli_query($conex, $consulta);
if($resultado){
    while($row = $resultado->fetch_array()){
        $id = $row['id'];
        $titulo = $row['titulo'];
        $comentario = $row['comentario'];
        $foto = $row['foto'];
        $autor = $row['autor'];
        $autorfoto = $row['autorfoto'];
        $destino = $row['destino'];
        ?><div class="story">
                        <h4 class="story-titulo"><?php echo $titulo ?><br>
                        
                        </h4>
                        <h5 class="story-author">Por <label><?php echo $autor ?></label></h5>
                        <p class="story-comentario"><?php echo $comentario ?></p>
                        <img class="story-imagen img" src="<?php echo $foto ?>">
                        </div>
                        <?php
    }
}


?>