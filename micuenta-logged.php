<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3114edacd4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="estilos1c.css">
    <link rel="stylesheet" type="text/css" href="estilosLRd.css">
    <link rel="stylesheet" type="text/css" href="estilosMCd.css">
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
            <h1 class="title">Elbuencubito</h1>
            <ul class="nav__ul-normal" style="margin-left: 120px;">
                <li class="nav__li">
                    <i class="fas fa-home"></i>
                    <a href="index-logged.php">Inicio</a>	
                </li>
                <li class="nav__li">
                    <i class="fas fa-user-friends"></i>
                    <a href="">Miembros</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-book"></i>
                    <a href="">Historias</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-user-circle"></i>
                    <a href="micuenta-logged.php">Mi Cuenta</a>
                </li>
                <li class="nav__li">
                    <i class="fas fa-question-circle"></i>
                    <a href="">Ayuda</a>
                </li>
                <button class="nav__button nav__f ocultar" name="iniciar__sesion" onclick="location.href='login.php'">Iniciar Sesión</button>
                <button class="nav__button ocultar" name="registrarse" onclick="location.href='register.php'">Registrarse</button>
                <?php
                    session_start();

                    ?>
                        <h2 class="nav__perfil-name mostrar" name="nombrep"><?php echo $_SESSION['nombre']?></h2>
                        <img class="nav__perfil-img mostrar" src="desconocido.png" name="fotop">
                
            </ul>
            
            <ul class="nav__responsive-ul">
                <div class="nav__responsive-menu-container">
                    <div class="fa fa-bars nav__responsive-menu"></div>
                </div>
                <div class="nav__responsive-container">
                    <li class="nav__responsive-li">
                        <i class="fas fa-home"></i>
                        <a href="index-logged.php">Inicio</a>	
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-user-friends"></i>
                        <a href="">Miembros</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-book"></i>
                        <a href="">Historias</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-user-circle"></i>
                        <a href="micuenta-logged.php">Mi Cuenta</a>
                    </li>
                    <li class="nav__responsive-li">
                        <i class="fas fa-question-circle"></i>
                        <a href="">Ayuda</a>
                    </li>
                    <?php
                    ?>
                        <h2 class="nav__perfil-name mostrar" style="float:left; margin-left:10px; font-weight: bold;" name="nombrep"><b style="font-weight: bold;"><?php echo $_SESSION['nombre']?></b></h2>
                        <img class="nav__perfil-img mostrar" style="float:left;" src="desconocido.png" name="fotop">
                </div>
            </ul>
            
        </nav>
    </header>
    <div class="login__fondo lgf" style="background-image: url('paisaje6.png') !important; repeat:no-repeat !important;">
        <div class="div__0"></div>
       <div class="login__div lgd" style="padding: 20px;">
            <form method="post" class="form2">
            <h1 class="bb__title" style="width: 240px; font-size: 25px; height: initial !important; margin: 0 !important;">Mi cuenta</h1>
            <img class="nav__perfil-img mostrar fotop" src="desconocido.png" name="fotop">
            <p class="infop sub">Nombre de usuario:</p>
            <p class="infop infot"><?php echo $_SESSION['nombre']?></p>
            <p class="infop sub">Contraseña:</p>
            <input class="bb__input bb__input1" name="contraseña" type="password" id="contras1" placeholder="Contraseña">
                <div class="bb__mostrarc" style="margin-left:0; grid-row:initial;">
                    <input type="checkbox" id="verContra1" class="chb1 chb2" onChange="MostrarUOcultarContraseña1();"><p class="bb__mostrarc-text">Mostrar contraseña</p>
                </div>
            </form>
        </div>
    </div>
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