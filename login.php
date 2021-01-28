<?php
            include("loguear.php");
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
    <link rel="stylesheet" type="text/css" href="normalize1c.css">
    <link rel="icon" type="image/png" href="aldeano.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">
    <script src="code5.js" type="text/javascript"></script>
    <title> Elbuencubito - Login </title>
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
                <button class="nav__button nav__f" name="iniciar__sesion" onclick="location.href='login.php'">Iniciar Sesión</button>
                <button class="nav__button" name="registrarse" onclick="location.href='register.php'">Registrarse</button>
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
                    <button class="nav__responsive-button nav__responsive-f" name="iniciar__sesion" onclick="location.href='login.php'">Iniciar Sesión</button>
                    <button class="nav__responsive-button" name="registrarse" onclick="location.href='register.php'">Registrarse</button>
                </div>
            </ul>
            
        </nav>
    </header>
    <div class="login__fondo">
        <div class="div__0"></div>
       <div class="login__div">
            <form method="post">
                <h1 class="bb__title">Inicio de Sesión</h1>
                <input class="bb__input" name="nombre" type="text" placeholder="Nombre de usuario">
                <input class="bb__input" name="contraseña" type="password" id="contras1" placeholder="Contraseña">
                <div class="bb__mostrarc">
                    <input type="checkbox" id="verContra1" class="chb1" onChange="MostrarUOcultarContraseña1();"><p class="bb__mostrarc-text">Mostrar contraseña</p>
                </div>
                <p style="font-size: 14px;">¿No tienes una cuenta? <a href="register.php">Regístrate</a></p>
                <input class="bb__button" name="login" type="submit" value="Enviar">
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