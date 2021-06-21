<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link href="IMG/IcoLog/LOGO.ico" type="image/x-icon" rel="shortcut icon"> <!-- ICONO DE LA PAGINA   -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio de sesion</title> <!-- NOMBRE PAGINA -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="css/form2.css" rel="stylesheet">
</head>


	<!--  LOGOTIPOO  -->
    <header>
	<div id="logo"> 
	<img src="IMG/Icolog/LOGO.png" WIDTH=70 HEIGH=70 ALIGN=LEFT>   
	<p align="left"><font face=arial><B><font color=white><font size=6>&nbsp&nbspDempsey Shop</font></font></p
	</div>
 
<!-- MENU  -->
<div id="nav" align="center"> 
	<br>
	<ul class="nav">
		<li><a align="center" href="index.php"><i class="fas fa-home"></i>&nbsp&nbsp Inicio</a></li>
		<li><a align="center" href="Tecnicas.html"><i class="fas fa-fist-raised"></i>&nbsp&nbsp Técnicas</a></li>  	
		<li><a align="center" href="product.php"><i class="fas fa-shopping-bag"></i> &nbsp&nbsp Tienda </a></li>	
	</div>  
	<br><br>
</header>
   


<!-- Cuerpecito -->
<body>
<section class="contact-box">
        <div class="row no-gutters bg-dark">

            <div class="col-xl-5 col-lg-12 register-bg"> <!-- Dispositivos grandes -->
            <div class="position-absolute testimonial p-4">
          <center><p class="lead text-light">"El boxeo es el deporte más duro y solitario del mundo "</p></center>
            </div>
            </div>

 <div class="col-xl-7 col-lg-12">
         <div class="container align-self-center p-6">
            <br><br><br><br>
             <h1 class="font-weight-bold mb-3"> Iniciar Sesión </h1>
          
            <p class="text-muted mb-5"><font face=Arial>Ingresa tus datos de inicio de sesión </p></font>
                <form action="validar.php" method="post" id="formulario">
                    <div class="form-group mb-2" id="grupo_correo">
                        <label for= "correo" class="font-weigth-bold">Correo Electronico</label>
                        
                        <div class="form-group-input">
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="ejemplo@gmail.com">
                            <i class="form_val_estado fas fa-times-circle"></i>
                        </div>
                        <p class="form_input_error">El correo electronico debe contener letras, arroba, guion y/o punto.</p>
                    </div>
                    

                        <div class="form-group mb-3" id="grupo_password">
                            <label for="password" class="font-weigth-bold">Contraseña</label>
                            
                            <div class="form-group-input">
                                <input type="password" class="form-control" name="password" id="password">
                                <i class="form_val_estado fas fa-times-circle" ></i>
                            </div>

                            <p class="form_input_error">La contraseña tiene que ser de 8 a 16 digitos.</p>

                        </div>
                                <button onclick="submit()" class="btn btn-primary width-100">Iniciar</button>
                                <button onclick="location.href='formulario.php'" class="btn btn-primary width-100">Registrate</button>
                                <br><br><br>
                                <p><a href="recover.php">¿Se te olvido la constraseña?</a></p>
                </form>
                <div>                        
                        <small class="d-inline-block text-muted mt-5"> Todos los derechos reservados  </small>
                        </div>
            </div>
        </div>
    </div>
</section>


	<!-- Pie de pagina -->
    <footer class="footer">
    		<div class="container-fluid">
    			<div class="col-xs-12 text-center" style="background-color:#131111;">
    				<br><br>
					Informacion de Contacto
					<br><br>
					Correo: dempsheyshopoficial@gmail.com
                    <br><br><br><br>
    			</div>
    		</div>
    	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/formularioinicio.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  </body>
</html>