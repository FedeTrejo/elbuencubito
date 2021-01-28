<?php

include("loguear.php");
require_once("isLogin.php");

    


$result = array();  
$message = isset($_POST['message']) ? $_POST['message'] : null;
if(!$estado){
    $from = "Invitado";
    $photo = "desconocido.png";
}else{
    $nombre = $_SESSION['nombre'];
    $consulta = mysqli_query($conex,"SELECT * FROM datos WHERE nombre = '$nombre'");
    $valores = mysqli_fetch_array($consulta);
    $imagen = $valores['imagen'];
    
    $from = $_SESSION['nombre'];
    $photo = $imagen;
}

if(!empty($message) && !empty($from)){
    $sql = "INSERT INTO `mensajes` (`message`, `from`, `photo`) VALUES ('".$message."','".$from."','".$photo."')";
    $result = $conex->query($sql) or die($conex->error);

}  

$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $conex->query("SELECT * FROM `mensajes` WHERE `id` > " .$start);
while($row = $items->fetch_assoc()){
    $result = array();
    $result['items'][] = $row;
}

$conex->close();

header('Acess-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);

?>