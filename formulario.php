<html></html><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link href="IMG/IcoLog/LOGO.ico" type="image/x-icon" rel="shortcut icon"> <!-- ICONO DE LA PAGINA   -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crea tu cuenta</title> <!-- NOMBRE PAGINA -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link href="css/form2.css" rel="stylesheet">
</head>

<body>      

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

<section class="contact-box">
        <div class="row no-gutters bg-dark">

            <div class="col-xl-5 col-lg-12 register-bg"> <!-- Dispositivos grandes -->
            <div class="position-absolute testimonial p-4">
                <p class="lead text-light"> <center><p class="lead text-light">"El boxeo es el deporte más duro y solitario del mundo "</p></center></p>
            </div>
            </div>

 <div class="col-xl-7 col-lg-12">
         <div class="container align-self-center p-6">
             <h1 class="font-weight-bold mb-3"> Crear Cuenta </h1>
             <?php session_start(); ?>
             <?php if (isset($_SESSION['mensaje'])){ echo $_SESSION['mensaje']; unset($_SESSION['mensaje']);} ?>
            <p class="text-muted mb-5"><font face=Arial>Ingresa la siguiente informacion para registrarte </p></font>
               
            <form action="registro.php" method="POST" id="formulario">
                <div class="form-row mb-2">

                            <div class="form-group  col-mf-6" id="grupo_nombre">
                                <label for="nombre" class="font-weigth-bold"> Nombre </label>
                                    
                                <div class="form-group-input">
                                        <input type="text" class="form-control" required name="nombre" id="nombre" placeholder="Tu nombre" required >
                                        <i class=" form_val_estado fas fa-times-circle"></i>
                                </div>
                                     <p class="form_input_error">El nombre solo debe contener letras.</p>
                            </div>
                                

                            <div class="form-group col-mf-6" id="grupo_apellido">
                                    <label for="apellido" class="font-weigth-bold"> Apellido </label>
                                   
                                    <div class="form-group-input">
                                        <input type="text" class="form-control" required name="apellido" id="apellido" placeholder="Tu apellido">
                                        <i class="form_val_estado fas fa-times-circle"></i>
                                    </div>

                                    <p class="form_input_error">El apellido solo debe contener letras.</p>
                            </div>

                </div>

                            <div class="form-group mb-2" id="grupo_correo">
                                <label for= "correo" class="font-weigth-bold">Correo Electronico</label>
                                
                                <div class="form-group-input">
                                    <input type="email" class="form-control" required name="correo" id="correo" placeholder="ejemplo@gmail.com">
                                    <i class="form_val_estado fas fa-times-circle"></i>
                                </div>

                                <p class="form_input_error">El correo electronico debe contener letras, arroba, guion y/o punto.</p>

                            </div>
                            

                                <div class="form-group mb-3" id="grupo_password">
                                    <label for="password" class="font-weigth-bold">Contraseña</label>
                                    
                                    <div class="form-group-input">
                                        <input type="password" class="form-control" required name="password" id="password">
                                        <i class="form_val_estado fas fa-times-circle" ></i>
                                    </div>

                                    <p class="form_input_error">La contraseña tiene que ser de 8 a 16 digitos.</p>

                                </div>


                                <div class="form-group mb-3" id="grupo_password2">
                                    <label for="password2" class="font-weigth-bold">Repetir Contraseña</label>
                                    
                                    <div class="form-group-input">
                                        <input type="password" class="form-control" required name="password2" id="password2">
                                        <i class="form_val_estado fas fa-times-circle"></i>
                                    </div>

                                    <p class="form_input_error">Las contraseñas no coinciden, vuelva a escribirla.</p>
                                        
    <br>

                        <!-- AVISO DE PRIVACIDAD -->

                                        <div class="form-group mb-5">
                                            <div class="form-check"> <br>
                                                <input class="form-check-input" type="checkbox" name="terminos" id= "terminos">
                                                <label class="form-check-label text-muted"> <font face=Arial><font size=3>Al seleccionar esta casilla aceptas nuestro aviso de 
                                                    privacidad y los terminos y condiciones </font></font>     
                                                    
                                                </label>
                                            </div>
                                        </div>


                    <!-- MENSAJE DE ERROR  -->
                <center>
                    <div class="mensaje_error" id="mensaje_error">
                        <p><i class="fas fa-exclamation-triangle" style="color: rgb(197, 5, 5); "></i> <b>&nbspERROR:</b> Por favor rellene todos los campos.</p>
                    </div>
                </center>
                   <BR>


                <!-- BOTON -->
                <center>
                        <input type="submit" class="btn btn-primary width-100" value="Registrate" onclick="submit()">
                        
                    <!-- MENSAJE DE EXITO  -->
                    <p class="form-group-exitoso" id="form-group-exitoso"> <i class="fas fa-check" style="color: rgb(27, 197, 5);"></i> &nbspFormulario enviado exitosamente </p>
                    </center> 
                 <BR><br>
                </form>                         
              <!--  <small class="d-inline-block text-muted mt-5"> Todos los derechos reservados | </small>--> 
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
                    <br><br><br>
    			</div>
    		</div>
    	</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/formulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>