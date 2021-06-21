<?php  session_start(); Ob_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Productos</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/tabla.css">
	<link href="IMG/Icolog/LOGO.ico" type="image/x-icon" rel="shortcut icon"/> <!-- ICONO DE LA PAGINA   -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
<style>
#item1{
	width: "50%";
	margin: 0 auto;
	align-items: center;
}

</style>
</head>
<body style="background-color:WHITE;">
	<div class="page-container">
		<nav class="full-reset nav-phonestore">
           <div class="logo tittles-pages"> 
		  <font face=impact><font color=white><font size=6>Dempsey Shop</font></font>
		   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp			
		   <img src="IMG/Icolog/LOGO.png" WIDTH=70 HEIGH=70 ALIGN=LEFT > 
           </div>
            <ul class="list-unstyled full-reset navigation-list">
				<!--BTN Inicio -->
                <li><a id="tooltip" href="index.php">
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<i class="fas fa-home"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Inicio</span>
					</a>
				</li> 
				<!--FIN BTN Inicio -->


                <?php  if (isset($_SESSION['nombre'])){  ?>
					
				<!--BTN Salir -->
                <li>
					<a id="tooltip" href="cerrar_sesion.php">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<i class="fas fa-sign-out-alt"></i>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Salir</span>
					</a>
				</li>

				<!-- BTN Carrito -->
				<li>
					<a id="tooltip" href="datatable.php">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fas fa-shopping-cart"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Carrito</span>
					</a>
				</li>


                <?php } else{  ?>
				<li>
					<a id="tooltip" href="inicio_de_sesion.php">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	<i class="fas fa-user-alt"></i>ó &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Iniciar Sesión</span>
					</a>
				</li>

                <?php }  ?>
            </ul>
            <i class="fa fa-bars visible-xs btn-mobile"></i>
    	</nav>
	    <div class="content-page">
		    <div class="hidden-xs content-carousel">
		    	<div id="carousel-phonestore" class="carousel slide" data-ride="carousel" style="margin-top:0;">
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-phonestore" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-phonestore" data-slide-to="1" class="active"></li>
				    <li data-target="#carousel-phonestore" data-slide-to="2" class="active"></li>
					<li data-target="#carousel-phonestore" data-slide-to="3" class="active"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="item active" align="center">
				      <img src="IMG/Productos/costal2.png" alt="" width="20%">
				      <div class="carousel-caption">
						<h3 style="-webkit-text-fill-color:#CCCCCC; 
						-webkit-text-stroke: 1px black;">Saco de Boxeo (18 kg).</h3>
				      </div>
				    </div>

				    <div class="item" id="item1" align="center">
				      <img src="IMG/Productos/guantes1.png" alt="" width="20%" >
				      <div class="carousel-caption">
					  <h3 style="-webkit-text-fill-color:#CCCCCC; 
						-webkit-text-stroke: 1px black;">Guantes de Box Diamante</h3>
				      </div>
				    </div>

					<div class="item" id="item1" align="center">
				      <img src="IMG/Productos/bola2.png" alt="" width="20%" >
				      <div class="carousel-caption">
					  <h3 style="-webkit-text-fill-color:#CCCCCC; 
						-webkit-text-stroke: 1px black;">Bolsa para Velocidad.</h3>
				      </div>
				    </div>

					<div class="item" id="item1" align="center">
				      <img src="IMG/Productos/careta.png" alt="" width="20%" >
				      <div class="carousel-caption">
					  <h3 style="-webkit-text-fill-color:#CCCCCC; 
						-webkit-text-stroke: 1px black;">Careta con barra Metalica.</h3>
				      </div>
				    </div>
				    


				  </div>
				  <a class="left carousel-control" href="#carousel-phonestore" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-phonestore" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>
		    </div>
		    <div class="visible-xs static-image-carousel">
		    	<img src="assets/img/image-carousel.jpg"  alt="" class="img-responsive">
		    </div>
		    <section id="prod-container section">
		    	<div class="container-fluid">
		    		<div class="row">
		    			<div class="col-xs-12 text-center">
		    				<p class="tittles-pages">Productos</p>
		    			</div>
		    			<div class="col-xs-12">
		    				<div class="container">
			    				<ul class="nav nav-tabs" role="tablist" id="TabProducts">
								  <li class="active"><a href="#all-categories" role="tab" data-toggle="tab"><i class="fa fa-th"></i>&nbsp; Todo</a></li>
				
								</ul>
								<div class="tab-content">
								  <!-- ===================================== Todas las categorias ============================================= -->
								  <div class="tab-pane active" id="all-categories">
								  	<p class="tittles-pages">Todos los productos</p>

								  	<div class="row"> <!--Contenedor de Productos-->


									  <!-- INICIO DE NUEVAS CAJITAS -->
								<div id="container"> <!-- contiene los 3 PRIMEROS divs -->
										  <div id="left"> <!-- Producto 1-->
												<div class="ui-card">
													<img src="IMG/Productos/guantes1.png">
													<div class="description">
														<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Guantes de Box Diamante</h3>
														<p> <font size=3>
														Los guantes de boxeo son un producto de alta calidad, brindan protección...
														</p></font>
														<a href="Productos/P1.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 1-->
										  
										  <div id="right"> <!-- Producto 2-->
												<div class="ui-card">
													<center>
													<img src="IMG/Productos/costal2.png">
													</center>
													<div class="description">
													<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Saco de Boxeo (18kg)</h3>
														<p> Tela cortada comprimida que es lo que se asemeja más al cuerpo humano...</p>
														<a href="Productos/P3.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 2-->

										  <div id="center"> <!-- Producto 3-->
												<div class="ui-card">
													<img src="IMG/Productos/careta.png">
													<div class="description">
													<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Careta de Barra</h3>
														<p>Forro interior suave, liso y durable permite a los atletas limpiar...</p>
														<a href="Productos/P2.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 3-->
									</div> <!--FIN MIOS -->

									<!-- SEGUNDA SECCION  -->
								<div id="container"> <!-- contiene los 3 PRIMEROS divs -->
										  <div id="left"> <!-- Producto 1-->
												<div class="ui-card">
													<img src="IMG/Productos/bola2.png"> 
													<div class="description">
													<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Bolsa de Boxeo de Velocidad.</h3>
														<p>La bola portátil de doble extremo está diseñada específicamente para los luchadores para...</p>
														<a href="Productos/P4.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 1-->
										  
										  <div id="right"> <!-- Producto 2-->
												<div class="ui-card">
													<img src="IMG/Productos/pecho2.png">
													<div class="description">
														<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Protector de Pecho.</h3>
														<p>El cuero patentado Maya Hide es armadura en sí mismo y le durará una carrera...</p>
														<a href="Productos/P6.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 2-->

										  <div id="center"> <!-- Producto 3-->
												<div class="ui-card">
													<img src="IMG/Productos/vendas.png">
													<div class="description">
													<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Vendas Palomares Box Mujer</h3>
														<p>Cada entrenamiento o pelea por el título que tengas estarás acompañada y segura...</p>
														<a href="Productos/P5.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 3-->
									</div> <!--FIN SEGUNDA SECCION -->




						<!-- TERCERA SECCION  -->
						<div id="container"> <!-- contiene los 3 PRIMEROS divs -->
										  <div id="left"> <!-- Producto 1-->
												<div class="ui-card">
													<img src="IMG/Productos/cuerda.png"> 
													<div class="description">
													<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Cuerda Everlast Box Jump.</h3>
														<p>Cuerda para saltar marca everlast, varios colores, ideal para...</p>
														<a href="Productos/P7.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 1-->
										  
										  <div id="right"> <!-- Producto 2-->
												<div class="ui-card">
													<img src="IMG/Productos/cinta22.png">
													<div class="description">
														<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Protector de Pecho.</h3>
														<p>Evita lesiones mientras realizas tu rutina favorita utilizando la Cinta Kinesiológica Go Plus...</p>
														<a href="Productos/P8.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 2-->

										  <div id="center"> <!-- Producto 3-->
												<div class="ui-card">
													<img src="IMG/Productos/protector.png ">
													<div class="description">
													<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Protector bucal para boxeo.</h3>
														<p> En la pelea impresionarás con los mejores golpes, en la vida diaria una sonrisa...</p>
														<a href="Productos/P9.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 3-->
									</div> <!--FIN TERCERA SECCION -->

								<!-- CUARTA SECCION  -->
						<div id="container"> <!-- contiene los 3 PRIMEROS divs -->
										  <div id="left"> <!-- Producto 1-->
												<div class="ui-card">
													<img src="IMG/Productos/guantes2.png"> 
													<div class="description">
													<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Guantes de boxeo para artes marciales mixtas.</h3>
														<p>Entrena con toda comodidad y ligereza sabiendo que tus golpes se están fortaleciendo...</p>
														<a href="Productos/P10.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 1-->
										  
										  <div id="right"> <!-- Producto 2-->
												<div class="ui-card">
													<img src="IMG/Productos/medicinal2.png">
													<div class="description">
														<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">CAP Barbell Bola Medicinal.</h3>
														<p> La bola medicinal de CAP Barbell es una herramienta clásica para fitness...</p>
														<a href="Productos/P11.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 2-->

										  <div id="center"> <!-- Producto 3-->
												<div class="ui-card">
											    <img src="IMG/Productos/kit.png">
													<div class="description">
													<h3 style="-webkit-text-fill-color:#CCCCCC; 
														-webkit-text-stroke: 1px black;">Juego de Boxeo de Doble Extremo</h3>
														<p>Consigue más explosión por tu dinero con el kit de boxeo BoxerPoint...</p>
														<a href="Productos/P12.php">Ver Producto</a> <!-- boton redireccionable -->
													</div>
												</div>
										  </div> <!--FIN Producto 3-->
									</div> <!--FIN CUARTA SECCION -->
									  <br><br>			  	  
		    	</div>
		    </section>
	    </div>

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
	<script>
	  $(function () {
	    $('#TabProducts a:first').tab('show')
	  });
	  $('#TabProducts a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});
	</script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>