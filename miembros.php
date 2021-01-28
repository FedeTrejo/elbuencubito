<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3114edacd4.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="estilos1h.css">
    <link rel="stylesheet" type="text/css" href="normalize1c.css">
    <link rel="stylesheet" type="text/css" href="estilosAe.css">
    <link rel="stylesheet" type="text/css" href="estilosMl.css">
    <link rel="icon" type="image/png" href="aldeano.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">

    <script src="code4.js" type="text/javascript"></script>
    <title> Elbuencubito - Miembros </title>
    
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
                        <h2 class="nav__perfil-name mostrar" name="nombrep" style="margin-bottom:0px"><?php echo $_SESSION['nombre']?></h2>
                        <img class="nav__perfil-img mostrar" src="<?php echo $imagen;?>" name="fotop" style="margin-bottom:0px">
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
   <div class="containerM">
       <div class="container__1">
           <div class="subtituloM">
                <h2 class="article__charlas-title sub" style="display:inline-block; font-size:25px; ">Miembros</h2>
                <i class="fas fa-user-friends" style="display:inline; font-size:25px"></i>
            </div>
            <div class="miembros">
                <a href="#djpachixd">
                <div class="djpachi mb"><img class="miembros__img" src="skins/djpachi_cabeza.png">djpachi</div>
                </a>
                <a href="#europostxd">
                <div class="europost mb"><img class="miembros__img" src="skins/europost_cabeza.png">Europost</div>
                </a>
                <a href="#eze69xd">
                <div class="eze69 mb"><img class="miembros__img" src="skins/eze69_cabeza.png">eze69</div>
                </a>
                <a href="#loretopro12xd">
                <div class="loretopro12 mb"><img class="miembros__img" src="skins/loretopro12_cabeza.png">loretopro12</div>
                </a>
                <a href="#merlexd">
                <div class="merle mb"><img class="miembros__img" src="skins/merle_cabeza.png">merle</div>
                </a>
                <a href="#nilo24xd">
                <div class="nilo24 mb"><img class="miembros__img" src="skins/nilo24_cabeza.png">nilo24</div>
                </a>
                <a href="#perigamer13xd">
                <div class="perigamer13 mb"><img class="miembros__img" src="skins/perigamer13_cabeza.png">perigamer13</div>
                </a>
                <a href="#tomaslucioxd">
                <div class="tomaslucio mb"><img class="miembros__img" src="skins/tomaslucio_cabeza.png">tomaslucio</div>
                </a>
                <a href="#V3RTKxd">
                <div class="V3RTK mb"><img class="miembros__img" src="skins/V3RTK_cabeza.png">V3RTK</div>
                </a>
            </div>
            <div class="miembros-responsive">
                <a href="#djpachixd">
                <div class="djpachir mb"><img class="miembros__img" src="skins/djpachi_cabeza.png"></div>
                </a>
                <a href="#europostxd">
                <div class="europostr mb"><img class="miembros__img" src="skins/europost_cabeza.png"></div>
                </a>
                <a href="#eze69xd">
                <div class="eze69r mb"><img class="miembros__img" src="skins/eze69_cabeza.png"></div>
                </a>
                <a href="#loretopro12xd">
                <div class="loretopro12r mb"><img class="miembros__img" src="skins/loretopro12_cabeza.png"></div>
                </a>
                <a href="#merlexd">
                <div class="merler mb"><img class="miembros__img" src="skins/merle_cabeza.png"></div>
                </a>
                <a href="#nilo24xd">
                <div class="nilo24r mb"><img class="miembros__img" src="skins/nilo24_cabeza.png"></div>
                </a>
                <a href="#perigamer13xd">
                <div class="perigamer13r mb"><img class="miembros__img" src="skins/perigamer13_cabeza.png"></div>
                </a>
                <a href="#tomaslucioxd">
                <div class="tomaslucior mb"><img class="miembros__img" src="skins/tomaslucio_cabeza.png"></div>
                </a>
                <a href="#V3RTKxd">
                <div class="V3RTKr mb"><img class="miembros__img" src="skins/V3RTK_cabeza.png"></div>
                </a>
            </div>
        </div>
       <div class="container__2" id="djpachixd">
            <div class="idjpachi ib">
                <div class="identificacion">
                    <img src="aldeano.png" class="identificacion__img">
                    <label class="identificacion__info1">Elbuencubito - Miembro oficial certificado</label>
                    <label class="identificacion__info1-responsive">Elbuencubito - Miembro</label>
                    <label class="identificacion__info2">ID: 2764 - AAA - 0001</label>
                </div>
                <div class="informacion">
                    <div class="skin"><img class="skimg" style="margin:10px; width:250px; object-fit:cover; height:250px;"src="skins/djpachi_foto.png"></div>
                    <div class="nombre">Djpachi</div>
                    <div class="edad"><label class="sub">Edad:</label> 32 años</div>
                    <div class="peso"><label class="sub">Peso:</label> 76kg</div>
                    <div class="especialidades"><label class="sub">Escpecialidades:</label> Agricultura, Ganadería</div>
                    <div class="participaciones"><label class="sub">Participaciones en Elbuencubito:</label> 4</div>
                    <div class="comida_favorita"><label class="sub">Comida favorita:</label> Pan</div>
                    <div class="bioma_favorito" id="europostxd"><label class="sub">Bioma favorito:</label> Plains</div>
                </div>



            </div>
            <div class="ieuropost ib">
                <div class="identificacion">
                    <img src="aldeano.png" class="identificacion__img">
                    <label class="identificacion__info1">Elbuencubito - Miembro oficial certificado</label>
                    <label class="identificacion__info1-responsive">Elbuencubito - Miembro</label>
                    <label class="identificacion__info2">ID: 2764 - AAA - 0002</label>
                </div>
                <div class="informacion">
                    <div class="skin"><img class="skimg" style="margin:10px; width:250px; object-fit:cover; height:250px"src="skins/europost_foto.png"></div>
                    <div class="nombre">Europost</div>
                    <div class="edad"><label class="sub">Edad:</label> 30 años</div>
                    <div class="peso"><label class="sub">Peso:</label> 78kg</div>
                    <div class="especialidades"><label class="sub">Escpecialidades:</label> Arquitectura, Ingeniería</div>
                    <div class="participaciones"><label class="sub">Participaciones en Elbuencubito:</label> Todas</div>
                    <div class="comida_favorita"><label class="sub">Comida favorita:</label> Salmón Cocido</div>
                    <div class="bioma_favorito" id="eze69xd"><label class="sub">Bioma favorito:</label> Snowy Tundra</div>
                </div>
            </div>
            <div class="ieze69 ib">
                <div class="identificacion">
                    <img src="aldeano.png" class="identificacion__img">
                    <label class="identificacion__info1">Elbuencubito - Miembro oficial certificado</label>
                    <label class="identificacion__info1-responsive">Elbuencubito - Miembro</label>
                    <label class="identificacion__info2">ID: 2764 - AAA - 0003</label>
                </div>
                <div class="informacion">
                    <div class="skin"><img class="skimg" style="margin:10px; width:250px; object-fit:cover; height:250px"src="skins/eze69_foto.png"></div>
                    <div class="nombre">Eze69</div>
                    <div class="edad"><label class="sub">Edad:</label> 31 años</div>
                    <div class="peso"><label class="sub">Peso:</label> 76kg</div>
                    <div class="especialidades"><label class="sub">Escpecialidades:</label> Hechicería, Amplio conocimiento de crafteos</div>
                    <div class="participaciones"><label class="sub">Participaciones en Elbuencubito:</label> 4</div>
                    <div class="comida_favorita"><label class="sub">Comida favorita:</label> Chuleta de cerdo</div>
                    <div class="bioma_favorito" id="loretopro12xd"><label class="sub">Bioma favorito:</label> Light-blue Magic Forest</div>
                </div>
            </div>
            <div class="iloretopro12 ib">
                <div class="identificacion">
                    <img src="aldeano.png" class="identificacion__img">
                    <label class="identificacion__info1">Elbuencubito - Miembro oficial certificado</label>
                    <label class="identificacion__info1-responsive">Elbuencubito - Miembro</label>
                    <label class="identificacion__info2">ID: 2764 - AAA - 0004</label>
                </div>
                <div class="informacion">
                    <div class="skin"><img class="skimg" style="margin:10px; width:250px; object-fit:cover; height:250px"src="skins/loretopro12_foto.png"></div>
                    <div class="nombre">Loretopro12</div>
                    <div class="edad"><label class="sub">Edad:</label> 29 años</div>
                    <div class="peso"><label class="sub">Peso:</label> 77kg</div>
                    <div class="especialidades"><label class="sub">Escpecialidades:</label> Bromas, Armas</div>
                    <div class="participaciones"><label class="sub">Participaciones en Elbuencubito:</label> 2</div>
                    <div class="comida_favorita"><label class="sub">Comida favorita:</label> Filete</div>
                    <div class="bioma_favorito" id="merlexd"><label class="sub">Bioma favorito:</label> Mountains (Extreme Hills)</div>
                </div>
            </div>
            <div class="imerle ib" >
                <div class="identificacion">
                    <img src="aldeano.png" class="identificacion__img">
                    <label class="identificacion__info1">Elbuencubito - Miembro oficial certificado</label>
                    <label class="identificacion__info1-responsive">Elbuencubito - Miembro</label>
                    <label class="identificacion__info2">ID: 2764 - AAA - 0005</label>
                </div>
                <div class="informacion">
                    <div class="skin"><img class="skimg" style="margin:10px; width:250px; object-fit:cover; height:250px"src="skins/merle_foto.png"></div>
                    <div class="nombre">Merle</div>
                    <div class="edad"><label class="sub">Edad:</label> 25 años</div>
                    <div class="peso"><label class="sub">Peso:</label> 75kg</div>
                    <div class="especialidades"><label class="sub">Escpecialidades:</label> Política (Fracaso), Casas de madera</div>
                    <div class="participaciones"><label class="sub">Participaciones en Elbuencubito:</label> Todas</div>
                    <div class="comida_favorita"><label class="sub">Comida favorita:</label> Pollo cocido</div>
                    <div class="bioma_favorito" id="nilo24xd"><label class="sub">Bioma favorito:</label> Mountains (Extreme Hills)</div>
                </div>
            </div>
            <div class="inilo24 ib" >
                <div class="identificacion">
                    <img src="aldeano.png" class="identificacion__img">
                    <label class="identificacion__info1">Elbuencubito - Miembro oficial certificado</label>
                    <label class="identificacion__info1-responsive">Elbuencubito - Miembro</label>
                    <label class="identificacion__info2">ID: 2764 - AAA - 0006</label>
                </div>
                <div class="informacion">
                    <div class="skin"><img class="skimg" style="margin:10px; width:250px; object-fit:cover; height:250px"src="skins/nilo24_foto.png"></div>
                    <div class="nombre">Nilo24</div>
                    <div class="edad"><label class="sub">Edad:</label> 34 años</div>
                    <div class="peso"><label class="sub">Peso:</label> 74kg</div>
                    <div class="especialidades"><label class="sub">Escpecialidades:</label> Comercio, Economía</div>
                    <div class="participaciones"><label class="sub">Participaciones en Elbuencubito:</label> 4</div>
                    <div class="comida_favorita"><label class="sub">Comida favorita:</label> Carne Podrida</div>
                    <div class="bioma_favorito" id="perigamer13xd"><label class="sub">Bioma favorito:</label> Plains</div>
                </div>
            </div>
            <div class="iperigamer13 ib" > 
                <div class="identificacion">
                    <img src="aldeano.png" class="identificacion__img">
                    <label class="identificacion__info1">Elbuencubito - Miembro oficial certificado</label>
                    <label class="identificacion__info1-responsive">Elbuencubito - Miembro</label>
                    <label class="identificacion__info2">ID: 2764 - AAA - 0007</label>
                </div>
                <div class="informacion">
                    <div class="skin"><img class="skimg" style="margin:10px; width:250px; object-fit:cover; height:250px"src="skins/perigamer13_foto.png"></div>
                    <div class="nombre">Perigamer13</div>
                    <div class="edad"><label class="sub">Edad:</label> 27 años</div>
                    <div class="peso"><label class="sub">Peso:</label> 76kg</div>
                    <div class="especialidades"><label class="sub">Escpecialidades:</label> Streaming, Jugabilidad nivel profesional</div>
                    <div class="participaciones"><label class="sub">Participaciones en Elbuencubito:</label> 2</div>
                    <div class="comida_favorita"><label class="sub">Comida favorita:</label> Estofado de Champiñones</div>
                    <div class="bioma_favorito" id="tomaslucioxd"><label class="sub">Bioma favorito:</label> Ice Spikes</div>
                </div>
            </div>
            <div class="itomaslucio ib" >
                <div class="identificacion">
                    <img src="aldeano.png" class="identificacion__img">
                    <label class="identificacion__info1">Elbuencubito - Miembro oficial certificado</label>
                    <label class="identificacion__info1-responsive">Elbuencubito - Miembro</label>
                    <label class="identificacion__info2">ID: 2764 - AAA - 0008</label>
                </div>
                <div class="informacion">
                    <div class="skin"><img class="skimg" style="margin:10px; width:250px; object-fit:cover; height:250px"src="skins/tomaslucio_foto.png"></div>
                    <div class="nombre">Tomaslucio</div>
                    <div class="edad"><label class="sub">Edad:</label> 33 años</div>
                    <div class="peso"><label class="sub">Peso:</label> 77kg</div>
                    <div class="especialidades"><label class="sub">Escpecialidades:</label> Minecraft técnico, Granjas de recursos</div>
                    <div class="participaciones"><label class="sub">Participaciones en Elbuencubito:</label> Todas</div>
                    <div class="comida_favorita"><label class="sub">Comida favorita:</label> Zanahoria dorada</div>
                    <div class="bioma_favorito"><label class="sub">Bioma favorito:</label> Savanna</div>
                </div>
            </div>
            <div class="iV3RTK ib" id="V3RTKxd">
                <div class="identificacion">
                    <img src="aldeano.png" class="identificacion__img">
                    <label class="identificacion__info1">Elbuencubito - Miembro oficial certificado</label>
                    <label class="identificacion__info1-responsive">Elbuencubito - Miembro</label>
                    <label class="identificacion__info2">ID: 2764 - AAA - 0009</label>
                </div>
                <div class="informacion">
                    <div class="skin"><img class="skimg" style="margin:10px; width:250px; object-fit:cover; height:250px"src="skins/V3RTK_foto.png"></div>
                    <div class="nombre">V3RTK</div>
                    <div class="edad"><label class="sub">Edad:</label> 31 años</div>
                    <div class="peso"><label class="sub">Peso:</label> 77kg</div>
                    <div class="especialidades"><label class="sub">Escpecialidades:</label> Construcción pacifista, Amabilidad</div>
                    <div class="participaciones"><label class="sub">Participaciones en Elbuencubito:</label> Todas</div>
                    <div class="comida_favorita"><label class="sub">Comida favorita:</label> Patata</div>
                    <div class="bioma_favorito"><label class="sub">Bioma favorito:</label> Plains</div>
                </div>
            </div>
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