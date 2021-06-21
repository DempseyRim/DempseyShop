<?php  session_start(); Ob_start();?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tabla.css">
	<link href="IMG/Icolog/LOGO.ico" type="image/x-icon" rel="shortcut icon"/> <!-- ICONO DE LA PAGINA   -->
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="page-container">
    	<nav class="full-reset nav-phonestore">
           <div class="logo tittles-pages">
           <p> <font size=6 align=left> Dempsey Shop	</font>
           &nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
		   <img src="IMG/Icolog/LOGO.png" WIDTH=60 HEIGH=60 ALIGN=LEFT > </p>
           </div>
            <ul class="list-unstyled full-reset navigation-list">
                <!--TOOLTIP INICIO -->
                <li>
                    <a id="tooltip" href="index.php">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <i class="fas fa-home"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Inicio</span>
                    </a>
                </li>

                <!--TOOLTIP Tienda -->
                <li>
                    <a id="tooltip" href="product.php">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fas fa-store"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Tienda</span>
                    </a>
                </li>

                <?php  if (isset($_SESSION['nombre'])){  ?>
                <!--TOOLTIP Cerrar Sesion  -->
                <li>
                    <a id="tooltip" href="cerrar_sesion.php">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <i class="fas fa-sign-out-alt"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Salir</span>
                    </a>
                </li> <!-- Cerrar Sesion -->


                <!--TOOLTIP  Carrito de compras  -->
                <li>
                    <a id="tooltip" href="datatable.php">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <i class="fas fa-shopping-cart"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Carrito</span>
                    </a>
                </li> <!-- Carrito de compras -->


                
                <?php } else{  ?>

                <!--TOOLTIP  Iniciar Sesion  -->
                <li>
                    <a id="tooltip" href="inicio_de_sesion.php">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <i class="fas fa-user-alt"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Iniciar Sesion</span>
                    </a>
                </li>

                <?php }  ?>

            </ul>
            <i class="fa fa-bars visible-xs btn-mobile"></i>
    	</nav>
        <div class="content-page cover-background font-content-index">
            <div class="jumbotron">
              <h1 class="tittles-pages">     <center>Bienvenido <?php if (isset($_SESSION['nombre'])){ echo $_SESSION['nombre'];} ?></center></h1>
              <p>
              </p>
            </div>
<!-- Seccion 1 --> 
            <section class="OS-phones section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="tittles-pages">Encontrarás:</p>
                            <br><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center;"><a href="#HISTORIA"><i class="fas fa-book" style="color: black;"></i></a></p>
                                <h3 class="text-center">Historia</h3>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center;"><a href="Tecnicas.html"><i class="fas fa-fist-raised" style="color: black;"></i></a></p>
                                <h3 class="text-center">Técnicas</h3>
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center;"><a href="product.php"><i class="fas fa-shopping-cart" style="color: black;"></i></a></p>
                                <h3 class="text-center">Tienda</h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- FIN Seccion 1 --> 


<!-- Seccion 2 --> 
            <section class="news-promo-content section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="tittles-pages">  </p>
                            <br><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-center">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center; size: 100%;"><i class="fas fa-map-marked-alt" style="color: white;"></i></p>
                                <h3 style="color: white;">Arenas</h3>
                                <a href="#ARENAS" style="text-decoration:none"> <div ALIGN="CENTER"><button class="btn btn--3">Más información</button></div></a>

                                <hr class="visible-xs">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-center">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center; size: 100%;"><i class="fas fa-search" style="color: white;"></i></p>
                                <h3 style="color: white;">Datos y Teoria</h3>
                                <a href="#DATOS" style="text-decoration:none"><div ALIGN="CENTER" ><button class="btn btn--3">Más información</button></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
<!-- FIN Seccion 2 --> 

<!-- ARENAS --> 
            <br>
            <section class="news-promo-content section">
                <A NAME ="ARENAS" id="ARENAS"></a>
                    <div style="font-size:25px; position: relative;"  ><p align=CENTER>
                        <font face=verdana><font color=white><font size=6><b>Arenas</b></div></p></font></font></font>
                        <br><br>
                <div class = "Acontainer">
                    <div class="item">
                        <a href="http://www.arenaciudaddemexico.com/site/index.php"><img src="assets/img/Arena1.jpg"  alt="" class="item-img">	</a>
                        <div class="item-text">
                        <center>  <p>Arena Ciudad de México</p></center>
                        </div>
                    </div>
                    <div class="item">
                       <a href="https://www.staplescenter.com/"> <img src="assets/img/Arena2.jpg" alt="" class="item-img">	</a>
                        <div class="item-text">
                          <center>  <p>Staples Center</p> </center>
                        </div>
                    </div>
                    <div class="item">
                    <a href="https://www.msg.com/madison-square-garden"> <img src="assets/img/Arena3.jpg" alt="" class="item-img"></a>	
                        <div class="item-text">
                        <center>    <p>Madison Square</p> </center>
                        </div>
                    </div>
                    <div class="item">
                    <a href="https://www.t-mobilearena.com/"> <img src="assets/img/Arena4.jpg" alt="" class="item-img"></a>	
                        <div class="item-text">
                        <center>    <p>T-Mobile Arena</p></center>
                        </div>
                    </div>
                    <div class="item">
                    <a href="https://www.venetianmacao.com/entertainment/show-venues/cotai-arena.html"><img src="assets/img/Arena5.jpg" alt="" class="item-img">	</a>
                        <div class="item-text">
                        <center>     <p>Cotai Arena</ph3> </center>
                        </div>
                    </div>
                </div>	
            </section>
<!-- FIN ARENAS --> 

<!-- DATOS --> 
            <br>
            <section class="news-promo-content section">
                <A NAME ="DATOS"></a>
                    <div id="historia"style="font-size:25px; position: relative;"><p align=CENTER>
                    <font size=6><font face=verdana><font color=white><b>Datos y Teoría</b> </div></p></font></font></font><br>
                        <p><center><font color=white>CATEGORIAS DE PESO</center></p></font>
                        <center>
                       <table border="5" cellpadding="20" style="color: white;">
                           <thead>
                           <tr>
                               <th>Peso</th>
                                  <th>Categoria</th>
                           </tr>
                           <tr>
                            <th>48 kg (106 lb)</th>
                               <th>Peso minimosca o semimosca</th>
                        </tr>
                        <tr>
                            <th>51 kg (112 lb)</th>
                               <th>Peso mosca</th>
                        </tr>
                        <tr>
                            <th>54 kg (119 lb)</th>
                               <th>Peso gallo</th>
                        </tr> <tr>
                            <th>57 kg (125 lb)</th>
                               <th>Peso pluma</th>
                        </tr>
                        <tr>
                            <th>60 kg (132 lb)</th>
                               <th>Peso ligero</th>
                        </tr>
                        <tr>
                            <th>64 kg (141 lb)</th>
                               <th>Peso superligero o wélter junior</th>
                        </tr>
                        <tr>
                            <th>69 kg (152 lb)</th>
                               <th>Peso wélter</th>
                        </tr>
                        <tr>
                            <th>75 kg (165 lb)</th>
                               <th>Peso mediano o medio</th>
                        </tr> <tr>
                            <th>81 kg (178 lb)</th>
                               <th>Peso mediopesado o semipesado</th>
                        </tr>
                        <tr>
                            <th>91 kg (200 lb)</th>
                               <th>Peso pesado</th>
                        </tr>
                        <tr>
                            <th>91+ kg (200+ lb)</th>
                               <th>Peso superpesado</th>
                        </tr>
                    </thead>
                       </table> 
                    </center>
                    <br>
                    <p><center><font color=white>RANKING MUNDIAL</center></p></font>
                    <a href="https://boxrec.com/"><center>Boxing's Official Record Keeper </center></a>	
                    <br><br> <br><br>

                    <A NAME ="HISTORIA"></a>

				<div id="contenido">
                <center><font size=6><font color=white><b> HISTORIA </b></font></font></center> <br>
                <p align=justify ><font color=white >
                        Luchar con los puños como competición y espectáculo es tan antiguo como el mismo deporte. 
                        Los concursos de boxeo se han practicado desde la antigüedad. Los púgiles griegos llevaban guantes 
                        (no acolchados) y protecciones bajo los codos como único atuendo, ya que competían desnudos. 
                        Existe la evidencia de que el boxeo predominaba en África del norte durante hacia 4.000 aC. 
                        Hacia el 688 aC fue aceptado como deporte Olímpico (los griegos antiguos le llamaron Pygmachia), 
                        los participantes en estos juegos eran entrenados con sacos de arena (llamados korykos),  
                        los púgiles mantenían los dedos libres, llevando correas de cuero (llamadas himantes) en las manos, 
                        muñecas y, a veces en los antebrazos, para protegerlos de lesiones.
                </p>
                        <br><br><center>
                        <!-- VIDEO -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/FanrH5N9_D4" 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen></iframe>
                            </center>
                        
                        <br><br>
                        <p align=justify >     
                        La palabra “boxeo” comenzó a usarse en la Inglaterra del siglo XVIII para distinguir entre la lucha 
                        para resolver disputas y la lucha bajo reglas establecidas como deporte. Ahora se utiliza para describir 
                        un deporte en el que dos contrincantes (púgiles) llevan guantes acolchados, se enfrentan en un cuadrilátero 
                        y pelean un número acordado de asaltos siguiendo unas reglas. Aunque los hombres siempre hayan sido los 
                        participantes más numerosos, existen referencias a peleas entre mujeres durante el siglo XVIII, y a finales 
                        del siglo XX se organizaron de nuevo luchas femeninas.

                        El Boxeo es considerado un deporte en el que dos luchadores se enfrentan golpeándose, de acuerdo a un preciso 
                        reglamento, con los puños recubiertos por unos guantes especiales y torso desnudo por los profesionales. 
                        La primera codificación de las normas que regulan los encuentros de boxeo se remonta a 1743, mientras que las reglas 
                        todavía vigentes fueron establecidas en 1889 por el marqués de Queensberry, quien entre otras cosas introdujo el uso 
                        de los guantes.</font></p>
                        </div>
               
                    
                
            </section>
<!-- FIN DATOS --> 

        <!--<br>
            <section class="news-promo-content section">
            <A NAME ="HISTORIA"></a>
            <div style="font-size:25px; position: relative;">
            <p><font color=white>El boxeo es uno de los deportes más antiguos del mundo. Dentro de su larga historia, ha evolucionado entre debates sobre su violencia, el desarrollo de sus reglas, racismo, conflictos políticos y la lucha por la equidad de género. ¡Qué no le ha tocado ver a este deporte! Conoce la historia del boxeo y cómo pasamos de luchar desnudos con casi nada de protección en la Antigua Grecia a la incursión del boxeo femenil en los Juegos Olímpicos de Londres 2012. 
                Siendo el boxeo un deporte tan antiguo, se ha dado lugar a diversas ramificaciones de estilos de combate que al final se convirtieron en nuevos deportes. Tal es el caso de boxeo chino (shaolin), el japonés (kickboxing), el tailandés (muay thai) y el filipino (suntukan).</font> </p>
            </div>
            </section>
            <br>-->

    	<!-- Pie de pagina -->
		<footer class="footer">
    		<div class="container-fluid">
    			<div class="col-xs-12 text-center">
    				<br><br>
					Informacion de Contacto
					<br><br>
					Correo: dempsheyshopoficial@gmail.com
    			</div>
    		</div>
    	</footer>

    </div>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script><!-- USO DE ICONOS-->
</body>
</html>