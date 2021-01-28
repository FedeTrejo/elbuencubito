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
    <link rel="stylesheet" type="text/css" href="estilosHs.css">
    <link rel="icon" type="image/png" href="aldeano.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Harmattan&display=swap" rel="stylesheet">

    <script src="code5.js" type="text/javascript"></script>
    <script src="code15.js" type="text/javascript"></script>
    <title> Elbuencubito - Historias </title>
    
</head>
<body onload="mostrarInfo1()">
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
   <div class="containerH">
       <div class="container__0">
            <div class="subtituloH">
                <h2 class="article__charlas-title sub" style="display:inline-block; font-size:25px; " id="titulo">Archivo de historias de Elbuencubito</h2>
                <i class="fas fa-book" style="display:inline; font-size:25px"></i>
            </div>
       </div>
        <div class="title-nav">
            <button class="BC1botton boton" id="boton1h" onclick="mostrarInfo1();">
            <div class="ctitle container__1t" id="title1h">Elbuencubito 1</div>
            <div class="container__1t title-responsive" id="title1h">BC1</div>
            </button>
            <button class="BC2botton boton" id="boton2h" onclick="mostrarInfo2();">
            <div class="ctitle container__2t" id="title2h">Elbuencubito 2</div>
            <div class="container__1t title-responsive" id="title1h">BC2</div>
            </button>
            <button class="BC3botton boton"  id="boton3h" onclick="mostrarInfo3();">
            <div class="ctitle container__3t" id="title3h">Elbuencubito 3</div>
            <div class="container__1t title-responsive" id="title1h">BC3</div>
            </button>
            <button class="BC4botton boton" id="boton4h" onclick="mostrarInfo4();">
            <div class="ctitle container__4t" id="title4h">Elbuencubito 4</div>
            <div class="container__1t title-responsive" id="title1h">BC4</div>
            </button>
            <button class="BC5botton boton" id="boton5h" onclick="mostrarInfo5();">
            <div class="ctitle container__5t" id="title5h">Elbuencubito 5</div>
            <div class="container__1t title-responsive" id="title1h">BC5</div>
            </button>
            <?php
        include("subirFoto.php");
        include("subirHistoria.php");
        ?>
        </div>
        <div class="cinfo container__1i" id="contenedor1h">
            <div class="contenedor-grid">
                <div class="historias__container">
                    <div class="servidortitle">Elbuencubito 1</div>
                    <p class="desc">Elbuencubito 1 fue el primer servidor de Elbuencubito creado en la historia. En él, los primeros miembros experimentaron sus primeras aventuras y desafíos. Elbuencubito 1 fue creado alrededor de Septiembre de 2019 y duró más o menos hasta Diciembre del mismo año. Los participantes se vieron expuestos a grandes aprendizajes sobre Minecraft, construcciónes e interacciones en un poblado un poco apretado en el que convivían todos juntos, pero en diferentes viviendas.</p>
                    <div class="historias">
                        
                    <?php
                    include("mostrarHistoria.php");
                        ?>
                    <?php
                    
                    
                    ?>
                    </div>
                    <div class="subirHistorias">
                        <form method="post" action="" enctype="multipart/form-data" class="formgrid">
                            <h3 class="subirHistorias-title">Sube una historia</h3>
                            <input type="text" placeholder="Título de la historia" class="subirHistorias-titulo" name="titulo1"></input>
                            <textarea type="text" placeholder="Añade un comentario" class="subirHistorias-comentario" name="comentario1"></textarea>
                            <div class="subirHistorias-imagen">
                                <input type="file" name="foto1" required></input>
                            </div>
                            <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            if(!$estado){
                            ?>
                            <div class="subirHistorias-alerta">Debes loguearte para publicar una historia</div>
                            <?php
                    
                            }else{
                            ?>
                            <input type="submit" value="Subir" class="subirHistorias-submit" name="subirbc1"></input>
                            <?php
                            }

                            ?>
                            
                        </form>
                    </div>
                    <div id="popup" class="overlay"">
                        <div id="popupBody">
                            <h2 style="color:#051">Historia publicada con éxito.</h2>
                            <a id="cerrar" class="cerrar"  href="">&times;</a>
                            <div class="popupContent">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div id="popup1" class="overlay" style="visibility:hidden;">
                        <div id="popupBody1" style="visibility:hidden;">
                            <h2 style="color:#051">Historia publicada con éxito.</h2>
                            <div id="cerrar1" class="cerrar" onclick="closeImage1('img1');" href="">&times;</div>
                            <div id="volver1" class="cerrar" onclick="previousImage1();" href=""><</div>
                            <div id="seguir1" class="cerrar" onclick="nextImage1();" href="">></div>
                            <div id="autor1" ></div>
                            <div class="popupContent">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="galeria">
                    <div class="galtitle">Galería de <label class="gallabel">Elbuencubito 1</label></div>
                    <div class="verFotos" id="verfotos1" onclick="abrirInterfaz1('fotoscontainer1')">Ver Fotos</div>
                    <div class="fotos-container" id="fotoscontainer1">
                    <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            
                            if(!$estado){                    
                            }else{
                            ?>
                            <div style="text-align:center; padding-top:10px;"><i id="agregarCuadro1" class="far fa-plus-square" style="font-size:40px; margin-left:0;" onclick="mostrarCuadroAdd1()"></i></div>
                            <form method="post" action="" enctype="multipart/form-data" class="cuadroAdd" id="cuadroAdd1">
                                <input type="file" name="fotoarchivo1"></input>
                                <div id="cerrarcuadroAdd1" style="display: inline;float: right;font-size: 22px;color: rgb(191, 65, 26);font-weight: bold;" class="cerrar" onclick="closecuadroAdd1();" href="">&times;</div>
                                <input type="submit" class="submitnewfoto" name="addfoto1"></input>
                            </form>
                            <?php
                            }
                            ?>
                    <?php
                        include("mostrarFoto.php");
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cinfo container__2i" id="contenedor2h">
            <div class="contenedor-grid">
                <div class="historias__container">
                    <div class="servidortitle">Elbuencubito 2</div>
                    <p class="desc">En una vuelta entusiasmante de Elbuencubito para las vacaciones de 2019/20, los participantes convivieron en un mundo repleto de bromas, eventos y hasta peleas. 'El mejor Buencubito' le dicen algunos y no estarían tan equivocados: Elbuencubito 2 fue un servidor de mucha vida para la comunidad. En este los participantes crearon sus viviendas a una considerable distancia y fundaron luego una excelente ciudad con negocios, mercados y arenas.</p>
                    <div class="historias">
                    <?php
                    include("mostrarHistorias2.php");
                        ?>
                    </div>
                    <div class="subirHistorias">
                        <form method="post" action="" enctype="multipart/form-data" class="formgrid">
                            <h3 class="subirHistorias-title">Sube una historia</h3>
                            <input type="text" placeholder="Título de la historia" class="subirHistorias-titulo" name="titulo2"></input>
                            <textarea type="text" placeholder="Añade un comentario" class="subirHistorias-comentario" name="comentario2"></textarea>
                            <div class="subirHistorias-imagen">
                                <input type="file" name="foto2" required></input>
                            </div>
                            <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            if(!$estado){
                            ?>
                            <div class="subirHistorias-alerta">Debes loguearte para publicar una historia</div>
                            <?php
                    
                            }else{
                            ?>
                            <input type="submit" value="Subir" class="subirHistorias-submit" name="subirbc2"></input>
                            <?php
                            }

                            ?>
                        </form>
                    </div>
                    <div id="popup2" class="overlay" style="visibility:hidden;">
                        <div id="popupBody2" style="visibility:hidden;">
                            <h2 style="color:#051">Historia publicada con éxito.</h2>
                            <div id="cerrar2" class="cerrar" onclick="closeImage('img1');" href="">&times;</div>
                            <div id="volver2" class="cerrar" onclick="previousImage();" href=""><</div>
                            <div id="seguir2" class="cerrar" onclick="nextImage();" href="">></div>
                            <div id="autor2" ></div>
                            <div class="popupContent">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="galeria">
                    <div class="galtitle">Galería de <label class="gallabel">Elbuencubito 2</label></div>
                    <div class="verFotos" id="verfotos2" onclick="abrirInterfaz2('fotoscontainer2')">Ver Fotos</div> 
                    <div class="fotos-container" id="fotoscontainer2">
                    <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            if(!$estado){                    
                            }else{
                            ?>
                            <div style="text-align:center; padding-top:10px;"><i id="agregarCuadro2" class="far fa-plus-square" style="font-size:40px; margin-left:0;" onclick="mostrarCuadroAdd2()"></i></div>
                            <form method="post" action="" enctype="multipart/form-data" class="cuadroAdd" id="cuadroAdd2">
                                <input type="file" name="fotoarchivo2"></input>
                                <div id="cerrarcuadroAdd2" style="display: inline;float: right;font-size: 22px;color: rgb(191, 65, 26);font-weight: bold;" class="cerrar" onclick="closecuadroAdd2();" href="">&times;</div>
                                <input type="submit" class="submitnewfoto" name="addfoto2"></input>
                            </form>
                            <?php
                            }
                            ?>
                    
                    <?php
                        include("mostrarFotos2.php");
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cinfo container__3i" id="contenedor3h">
            <div class="contenedor-grid">
                <div class="historias__container">
                    <div class="servidortitle">Elbuencubito 3</div>
                    <p class="desc">Luego de un largo ausentismo de más de 3 meses, Elbuencubito volvió con un nuevo estreno: Elbuencubito 3. En este Buencubito los participantes desarrollaron un estilo de vida simple 'comunista' y muy a lo 'Vanilla'. Desarrollando desde casas pacificas hasta casas extremadamente lujosas, los participantes convivieron en un bioma de montañas. Elbuencubito 3 se empezó en Julio de 2020 y si bien no duró tanto como los anteriores, fue lo suficiente como para considerarlo un BC.</p>
                    <div class="historias">
                    <?php
                    include("mostrarHistorias3.php");
                        ?>
                    </div>
                    <div class="subirHistorias">
                        <form method="post" action="" enctype="multipart/form-data" class="formgrid">
                            <h3 class="subirHistorias-title">Sube una historia</h3>
                            <input type="text" placeholder="Título de la historia" class="subirHistorias-titulo" name="titulo3"></input>
                            <textarea type="text" placeholder="Añade un comentario" class="subirHistorias-comentario" name="comentario3"></textarea>
                            <div class="subirHistorias-imagen">
                                <input type="file" name="foto3" required></input>
                            </div>
                            <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            if(!$estado){
                            ?>
                            <div class="subirHistorias-alerta">Debes loguearte para publicar una historia</div>
                            <?php
                    
                            }else{
                            ?>
                            <input type="submit" value="Subir" class="subirHistorias-submit" name="subirbc3"></input>
                            <?php
                            }

                            ?>
                        </form>
                    </div>
                    <div id="popup3" class="overlay" style="visibility:hidden;">
                        <div id="popupBody3" style="visibility:hidden;">
                            <h2 style="color:#051">Historia publicada con éxito.</h2>
                            <div id="cerrar3" class="cerrar" onclick="closeImage3('img1');" href="">&times;</div>
                            <div id="volver3" class="cerrar" onclick="previousImage3();" href=""><</div>
                            <div id="seguir3" class="cerrar" onclick="nextImage3();" href="">></div>
                            <div id="autor3" ></div>
                            <div class="popupContent">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="galeria">
                    <div class="galtitle">Galería de <label class="gallabel">Elbuencubito 3</label></div>
                    <div class="verFotos" id="verfotos3" onclick="abrirInterfaz3('fotoscontainer3')">Ver Fotos</div> 
                    <div class="fotos-container" id="fotoscontainer3">
                    <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            if(!$estado){                    
                            }else{
                            ?>
                            <div style="text-align:center; padding-top:10px;"><i id="agregarCuadro3" class="far fa-plus-square" style="font-size:40px; margin-left:0;" onclick="mostrarCuadroAdd3()"></i></div>
                            <form method="post" action="" enctype="multipart/form-data" class="cuadroAdd" id="cuadroAdd3">
                                <input type="file" name="fotoarchivo3"></input>
                                <div id="cerrarcuadroAdd3" style="display: inline;float: right;font-size: 22px;color: rgb(191, 65, 26);font-weight: bold;" class="cerrar" onclick="closecuadroAdd3();" href="">&times;</div>
                                <input type="submit" class="submitnewfoto" name="addfoto3"></input>
                            </form>
                            <?php
                            }
                            ?>
                    <?php
                        include("mostrarFotos3.php");
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cinfo container__4i" id="contenedor4h">
            <div class="contenedor-grid">
                <div class="historias__container">
                    <div class="servidortitle">Elbuencubito Medieval</div>
                    <p class="desc">Estrenado en Noviembre de 2020 y habiendo durado hasta final del mismo año, Elbuecubito 4 o Elbuencubito Medieval fue el primer servidor oficial BC con mods. En este servidor, viejos miembros y nuevos participantes exploraron e investigaron de cosas que muy poco conocían. Agregando mods de magia desconocida, biomas extravagantes y civilizaciones antiguas, Elbuencubito Medieval fue un servidor muy divertido con grandes aventuras orientadas a un mundo de cuento maravilloso.</p>
                    <div class="historias">
                    <?php
                    include("mostrarHistorias4.php");
                        ?>
                    </div>
                    <div class="subirHistorias">
                        <form method="post" action="" enctype="multipart/form-data" class="formgrid">
                            <h3 class="subirHistorias-title">Sube una historia</h3>
                            <input type="text" placeholder="Título de la historia" class="subirHistorias-titulo" name="titulo4"></input>
                            <textarea type="text" placeholder="Añade un comentario" class="subirHistorias-comentario" name="comentario4"></textarea>
                            <div class="subirHistorias-imagen">
                                <input type="file" name="foto4" required></input>
                            </div>
                            <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            if(!$estado){
                            ?>
                            <div class="subirHistorias-alerta">Debes loguearte para publicar una historia</div>
                            <?php
                    
                            }else{
                            ?>
                            <input type="submit" value="Subir" class="subirHistorias-submit" name="subirbc4"></input>
                            <?php
                            }

                            ?>
                        </form>
                    </div>
                    <div id="popup4" class="overlay" style="visibility:hidden;">
                        <div id="popupBody4" style="visibility:hidden;">
                            <h2 style="color:#051">Historia publicada con éxito.</h2>
                            <div id="cerrar4" class="cerrar" onclick="closeImage4('img1');" href="">&times;</div>
                            <div id="volver4" class="cerrar" onclick="previousImage4();" href=""><</div>
                            <div id="seguir4" class="cerrar" onclick="nextImage4();" href="">></div>
                            <div id="autor4" ></div>
                            <div class="popupContent">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="galeria">
                    <div class="galtitle">Galería de <label class="gallabel">Elbuencubito 4</label></div>
                    <div class="verFotos" id="verfotos4" onclick="abrirInterfaz4('fotoscontainer4')">Ver Fotos</div> 
                    <div class="fotos-container" id="fotoscontainer4">
                    <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            if(!$estado){                    
                            }else{
                            ?>
                            <div style="text-align:center; padding-top:10px;"><i id="agregarCuadro4" class="far fa-plus-square" style="font-size:40px; margin-left:0;" onclick="mostrarCuadroAdd4()"></i></div>
                            <form method="post" action="" enctype="multipart/form-data" class="cuadroAdd" id="cuadroAdd4">
                                <input type="file" name="fotoarchivo4"></input>
                                <div id="cerrarcuadroAdd4" style="display: inline;float: right;font-size: 22px;color: rgb(191, 65, 26);font-weight: bold;" class="cerrar" onclick="closecuadroAdd4();" href="">&times;</div>
                                <input type="submit" class="submitnewfoto" name="addfoto4"></input>
                            </form>
                            <?php
                            }
                            ?>
                    <?php
                        include("mostrarFotos4.php");
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="cinfo container__5i" id="contenedor5h">
            <div class="contenedor-grid">
                <div class="historias__container">
                    <div class="servidortitle">Elbuencubito 5</div>
                    <p class="desc">Elbuencubito 5 es el servidor de Elbuencubito que se encuentra activo a fecha de emisión de esta descripción. Este servidor trata de la vuelta del software Vanilla de Minecraft en BC y con un estilo algo ambientado a Elbuencubito 2, los jugadores desarrollan viviendas y bases a su gusto y dándole su pizca de originalidad para realizar bromas y divertirse experimentando nuevas historias.</p>
                    <div class="historias">
                    <?php
                    include("mostrarHistorias5.php");
                        ?>
                    </div>
                    <div class="subirHistorias">
                        <form method="post" action="" enctype="multipart/form-data" class="formgrid">
                            <h3 class="subirHistorias-title">Sube una historia</h3>
                            <input type="text" placeholder="Título de la historia" class="subirHistorias-titulo" name="titulo5"></input>
                            <textarea type="text" placeholder="Añade un comentario" class="subirHistorias-comentario" name="comentario5"></textarea>
                            <div class="subirHistorias-imagen">
                                <input type="file" name="foto5" required></input>
                            </div>
                            <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            if(!$estado){
                            ?>
                            <div class="subirHistorias-alerta">Debes loguearte para publicar una historia</div>
                            <?php
                    
                            }else{
                            ?>
                            <input type="submit" value="Subir" class="subirHistorias-submit" name="subirbc5"></input>
                            <?php
                            }

                            ?>
                        </form>
                    </div>
                    <div id="popup5" class="overlay" style="visibility:hidden;">
                        <div id="popupBody5" style="visibility:hidden;">
                            <h2 style="color:#051">Historia publicada con éxito.</h2>
                            <div id="cerrar5" class="cerrar" onclick="closeImage5('img1');" href="">&times;</div>
                            <div id="volver5" class="cerrar" onclick="previousImage5();" href=""><</div>
                            <div id="seguir5" class="cerrar" onclick="nextImage5();" href="">></div>
                            <div id="autor5" ></div>
                            <div class="popupContent">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="galeria">
                    <div class="galtitle">Galería de <label class="gallabel">Elbuencubito 5</label></div>
                    <div class="verFotos" id="verfotos5" onclick="abrirInterfaz5('fotoscontainer5')">Ver Fotos</div> 
                    <div class="fotos-container" id="fotoscontainer5">
                    <?php 
                            include("loguear.php");
                            require_once("isLogin.php");
                            
                            if(!$estado){                    
                            }else{
                            ?>
                            <div style="text-align:center; padding-top:10px;"><i id="agregarCuadro5" class="far fa-plus-square" style="font-size:40px; margin-left:0;" onclick="mostrarCuadroAdd5()"></i></div>
                            <form method="post" action="" enctype="multipart/form-data" class="cuadroAdd" id="cuadroAdd5">
                                <input type="file" name="fotoarchivo5"></input>
                                <div id="cerrarcuadroAdd5" style="display: inline;float: right;font-size: 22px;color: rgb(191, 65, 26);font-weight: bold;" class="cerrar" onclick="closecuadroAdd5();" href="">&times;</div>
                                <input type="submit" class="submitnewfoto" name="addfoto5"></input>
                            </form>
                            <?php
                            }
                            ?>
                    <?php
                        include("mostrarFotos5.php");
                    ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <script>
        function myFunction(x) {
        if (x.matches) { // If media query matches
            document.getElementById("title1h").innerHTML = "BC1";
            document.getElementById("title2h").innerHTML = "BC2";
            document.getElementById("title3h").innerHTML = "BC3";
            document.getElementById("title4h").innerHTML = "BC4";
            document.getElementById("title5h").innerHTML = "BC5";
        }else{
            document.getElementById("title1h").innerHTML = "Elbuencubito 1";
            document.getElementById("title2h").innerHTML = "Elbuencubito 2";
            document.getElementById("title3h").innerHTML = "Elbuencubito 3";
            document.getElementById("title4h").innerHTML = "Elbuencubito 4";
            document.getElementById("title5h").innerHTML = "Elbuencubito 5";
        }
        }

        function myFunction1(y) {
        if (y.matches) { // If media query matches
            document.getElementById("titulo").innerHTML = "Archivo de historias";
        }else{
            document.getElementById("titulo").innerHTML = "Archivo de historias de Elbuencubito";
        }
        }

        var x = window.matchMedia("(max-width: 855px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes

        var y = window.matchMedia("(max-width: 420px)")
        myFunction1(y) // Call listener function at run time
        y.addListener(myFunction1) // Attach listener function on state changes
        </script>
            
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