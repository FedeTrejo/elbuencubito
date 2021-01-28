<?php
include("logoutear.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3114edacd4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="estilos1h.css">
    <link rel="stylesheet" type="text/css" href="estilosLRe.css">
    <link rel="stylesheet" type="text/css" href="estilosMCi.css">
    <link rel="stylesheet" type="text/css" href="normalize1c.css">
    <link rel="icon" type="image/png" href="aldeano.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">
    <script src="code1.js" type="text/javascript"></script>

    <title> Elbuencubito - Mi cuenta </title>
</head>
<body>
    <header>
        <nav class="nav">
            <img src="aldeano.png" width="25px" class="nav__icon">
            <h1 class="title" onclick="window.location.href = 'index.php';">Elbuencubito</h1>
            <ul class="nav__ul-normal" style="margin-left: 120px;">
                <li class="nav__li">
                    <i class="fas fa-home"></i>
                    <a href="index.php">Inicio</a>	
                </li>
                <li class="nav__li">
                    <i class="fas fa-user-friends"></i>
                    <a href="miembros.php">Miembros</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-book"></i>
                    <a href="historias.php">Historias</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-user-circle"></i>
                    <a href="micuenta.php">Mi Cuenta</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-question-circle"></i>
                    <a href="ayuda.php">Ayuda</a>
                </li>
                <?php 
                    include("loguear.php");
                    require_once("isLogin.php");
                    
                    if(!$estado){
                        ?>
                        <button class="nav__button nav__f mostrar" name="iniciar__sesion" onclick="location.href='login.php'">Iniciar Sesión</button>
                        <button class="nav__button mostrar" name="registrarse" onclick="location.href='register.php'">Registrarse</button>
                        <?php
                    
                    }else{
                        $nombre = $_SESSION['nombre'];
                        $consulta = mysqli_query($conex,"SELECT * FROM datos WHERE nombre = '$nombre'");
                        $valores = mysqli_fetch_array($consulta);
                        $imagen = $valores['imagen'];
                        ?>
                        <h2 class="nav__perfil-name mostrar" name="nombrep"><?php echo $_SESSION['nombre']?></h2>
                        <img class="nav__perfil-img mostrar" src="<?php echo $imagen;?>" name="fotop">
                        <?php
                    }

                ?>
                
            </ul>
            
            <ul class="nav__responsive-ul">
                <div class="nav__responsive-menu-container">
                    <div class="fa fa-bars nav__responsive-menu"></div>
                </div>
                <div class="nav__responsive-container">
                    <li class="nav__responsive-li">
                        <i class="fas fa-home"></i>
                        <a href="index.php">Inicio</a>	
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-user-friends"></i>
                        <a href="miembros.php">Miembros</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-book"></i>
                        <a href="historias.php">Historias</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-user-circle"></i>
                        <a href="micuenta.php">Mi Cuenta</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-question-circle"></i>
                        <a href="ayuda.php">Ayuda</a>
                    </li>
                    <?php 
                    include("loguear.php");
                    require_once("isLogin.php");
                    if(!$estado){
                        ?>
                        <button class="nav__responsive-button nav__responsive-f" name="iniciar__sesion" onclick="location.href='login.php'">Iniciar Sesión</button>
                        <button class="nav__responsive-button" name="registrarse" onclick="location.href='register.php'">Registrarse</button>
                        <?php
                    
                    }else{
                        ?>
                        <h2 class="nav__perfil-name mostrar" style="float:left; margin-left:10px; font-weight: bold;" name="nombrep"><b style="font-weight: bold;"><?php echo $_SESSION['nombre']?></b></h2>
                        <img class="nav__perfil-img mostrar" style="float:left;" src="<?php echo $imagen;?>" name="fotop">
                        <?php
                    }

                ?>
                    
                    
                    
                </div>
            </ul>
            
        </nav>
    </header>
    <?php 
                    include("loguear.php");require_once("isLogin.php");
                    if(!$estado){
                        ?>
                            <div class="login__fondo" style="background: url('paisaje6.png') !important; background-size: cover !important; background-position: center center; min-height:350px;">
                            <div class="div__0"></div>
                            <div class="login__div" style="height: 200px; padding: 20px;">
                            <h1 class="bb__title" style="width: 240px; font-size: 25px; height: initial !important; margin: 0 !important;">Lo siento, parece que no tienes una cuenta :(</h1>
                            <p style="font-size: 14px; margin: 20px; margin-left: 0; width: 240px;">Haz <a href="register.php">click aquí</a> para crearte una o <a href="login.php">aquí</a> para iniciar sesión.</p>
                            </div>
                            </div>
                        <?php
                    
                    }else{

                                include("loguear.php");require_once("isLogin.php");
                                include("con_db.php");


                                if(isset($_POST['subir'])){
                                    $nombre = $_SESSION['nombre'];
                                    $consulta = mysqli_query($conex,"SELECT * FROM datos WHERE nombre = '$nombre'");
                                    $valores = mysqli_fetch_array($consulta);
                                    $nombre = $valores['nombre'];
                                    $contraseña = $valores['contraseña'];
                                    $imagen = $valores['imagen'];

                                    $ruta = "fotosperfil/"; 
                                    $nombreimg = $_FILES['imagen']['name'];
                                    $archivo = $_FILES['imagen']['tmp_name'];
                                    $ruta = "fotosperfil/".$nombreimg; 
                                    
                                    $allowed = array('png', 'jpeg', 'jpg');
                                    $ext = pathinfo($nombreimg, PATHINFO_EXTENSION);
                                
                                    if(in_array($ext, $allowed)){
                                    move_uploaded_file($archivo, $ruta);
                                    
                                    $_SESSION['imagen'] = $ruta;
                                    $imagen = $_SESSION['imagen'];

                                    $query = mysqli_query($conex,"UPDATE datos SET imagen ='$imagen' WHERE nombre = '$nombre';");
                                    
                                    if($query){
                                        echo "Modificada correctamente";
                                    }
                                }else{
                                    ?>
                                        <div style="color:red">Debes ingresar un archivo de imagen válido.</div>
                                    <?php
                                }

                                }

                                
                                ?>
                            <div class="login__fondo lgf" style="background-image: url('paisaje6.png') !important; repeat:no-repeat !important; min-height:350px;">
                            <div class="div__0"></div>
                            <div class="login__div lgd" style="padding: 20px;">
                            <form method="post" class="form2" action="" enctype="multipart/form-data">
                            <h1 class="bb__title e" style="width: 240px; font-size: 25px; height: initial !important; margin: 0 !important;">Mi cuenta</h1>
                            <?php 
                                ?>
                                    <img class="nav__perfil-img mostrar fotop" src="<?php echo $imagen;?>" name="fotop">
                                <?php
                            ?>

                            <input type="file" name="imagen" style="color:transparent; display:inline; width:100px; font-size: 12px !important; padding: 4px;" requierd>
                            <input type="submit" value="Subir" name="subir" style="display:inline; width:100px; position:absolute; margin-left:130px; font-size: 12px !important;padding:1px" class="subirb">
                                
                            <i class="fas fa-edit editaricon"></i>
                            <p class="infop sub e">Nombre de usuario:</p>
                            <p class="infop infot e"><?php echo $_SESSION['nombre']?></p>
                            <p class="infop sub e">Contraseña:</p>
                            <textarea class="bb__input bb__input1" readonly="" style="resize:none" id="myTextarea"><?php echo $_SESSION['contraseña']?></textarea>
                            
                            <div class="bb__mostrarc e" style="margin-left:0; grid-row:initial;">
                            <form method="post" action="logout.php" style="width:100px; margin:0;">
                            <input type="submit" class="botonp1" value="Cerrar Sesión" name="cerrar_sesion">
                            </form>

                            </div>
                                
                            </div>
                            </div>
                        <?php
                    }
                    

                ?>

    <footer class="footer">
        <div class="footer__div">Todos los derechos reservados</div>
        <div class="footer__div">Contáctanos:</div>
        <div class="footer__div"><i class="fab fa-instagram"></i>
            <a style="color: #bbb" href="https://www.instagram.com/fedetrejo23/">Intagram</a></div>
        <div class="footer__div"><i class="fab fa-youtube"></i>
            <a style="color: #bbb" href="https://www.youtube.com/channel/UCyTLC1e5JV_pchoYC77sUzA">Youtube</a></div>
        <div class="footer__div">Copyright ©Europost 2021</div>
    </footer>
</body>
</html>