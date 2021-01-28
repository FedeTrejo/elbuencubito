<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3114edacd4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="estilos1h.css">
    <link rel="stylesheet" type="text/css" href="normalize1c.css">
    <link rel="icon" type="image/png" href="aldeano.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?php
        require_once("loguear.php");
        require_once("isLogin.php");

            

        if(!$estado){
            $nombre = "Invitado";
            $photo = "desconocido.png";
        }else{
            $nombre = $_SESSION['nombre'];
            $consulta = mysqli_query($conex,"SELECT * FROM datos WHERE nombre = '$nombre'");
            $valores = mysqli_fetch_array($consulta);
            $imagen = $valores['imagen'];

            $nombre = $_SESSION['nombre'];
            $photo = $imagen;
        }
    ?>
    <script type="text/javascript">
        var from = null, start = 0, url ='http://192.168.1.11/Elbuencubito/chat.php';
        $(document).ready(function(){
            var from = "<?php echo $nombre;?>";
            var photo = "<?php echo $photo;?>";
            load();
            $('#form').submit(function(e){
                $.post(url, {
                    message: $('#message').val(),
                    from: from,
                    photo: photo
                });
                $('#message').val('');
                return false;
            })
        });
        function load(){
            $.get(url + '?start=' + start, function(result){
                if(result.items){
                    result.items.forEach(item =>{
                        start = item.id;
                        $('#messages').append(renderMessage(item));
                    });
                    $('#messages').animate({scrollTop: $('#messages')[0].scrollHeight});
                };
                load();
            });

        }
        function renderMessage(item){
            let time = new Date(item.created);
            time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
            return `<div class="msg"><img src="${item.photo}" class="nav__perfil-img msg__ph"><p class="msg__fr">${item.from}</p>${item.message}<span class="msg__hs">${time}</span></div>`;
        }


    </script>
    <title> Elbuencubito - Inicio </title>
    
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
    <div class="article__fondo">
        <h1 class="fondo__titulo">¡Bienvenido a la página oficial de Elbuencubito!</h1>
        <h3 class="fondo__subtitulo">Aquí encontrarás novedades, información e historias sobre el servidor mas conocido de Santiago del Estero. Explora, comparte y únete a nuestra gran comunidad de jugadores y lo más importante: diviértete!</h3>
    </div>
    <div class="container">
        <article class="article">
            <div class="article__charlas">
                <h2 class="article__charlas-title sub">Chatea con amigos</h2>
                <div class="article__charlas-container">
                    <div class="article__txt"><img src="peruano.png"><h4>Administrador     <i class="fas fa-thumbtack" style="font-size:20px;"></i></h4><p>Este es el chat de nuestra página oficial. Aquí podrás comentar experiencias o enviar cualquier mensaje mientras estés jugando o simplemente para comentar lo que desees acerca del servidor. Por favor se amable y trata de evitar un mensaje agresivo o podriás ser baneado.</p></div>
                    <div id="messages"></div>
                </div>
                
                <?php 

                    if(!$estado){
                        ?>
                            <div class="article__bar">
                                <img src="desconocido.png">
                                <form class="send__form" method="post" id="form"  name="form">
                                <input type="text" placeholder="Comenta algo interesante..." class="send__text" autocomplete="off" id="message" name="message">
                                <input type="submit" value="► Enviar" class="send__submit">
                                </form>
                            </div>
                        <?php
                    
                    }else{
                        ?>
                        <div class="article__bar">
                            <img src="<?php echo $imagen;?>">
                            <form class="send__form" method="post" id="form" name="form"> 
                            <input type="text" placeholder="Comenta algo interesante..." class="send__text" autocomplete="off" id="message" name="message">
                            <input type="submit" value="► Enviar" class="send__submit" name="enviar">
                            </form>
                            
                        </div>
                        <?php
                    }
                    
                ?>
                
            </div>
        </article>
        <aside class="aside">
            <div class="aside__cont">
                <div class="aside__t"><p class="sub">Nuestro discord</p></div>
                <iframe src="https://discord.com/widget?id=728381702870663198&theme=dark" class="aside__disc" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
            </div>
        </aside>
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