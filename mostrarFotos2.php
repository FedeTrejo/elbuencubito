<?php

include("con_db.php");
$dest = 2;

$consulta = "SELECT * FROM galeria WHERE destino = '$dest';";
$resultado = mysqli_query($conex, $consulta);
if($resultado){
    while($row = $resultado->fetch_array()){
        $id = $row['id'];
        $foto = $row['foto'];
        $autor = $row['autor'];
        $destino = $row['destino'];
        ?>
            <img class="foto2" src="<?php echo $foto ?>">
            <div class="autor2" style="display:none"><?php echo $autor ?></div>
        <?php
    }
}


?>