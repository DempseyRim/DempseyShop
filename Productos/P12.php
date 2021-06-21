<?php session_start(); Ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../IMG/Icolog/LOGO.ico" type="image/x-icon" rel="shortcut icon"/> <!-- ICONO DE LA PAGINA   -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
	
    <!-- agregue esto -->
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Bola Medicinal.</title> <!-- NOMBRE PAGINA -->
<link rel="stylesheet" href="../css/styleProduct.css">
</head>

<!--  LOGOTIPOO  -->
<header>
	<div id="logo"> 
	<img src="../IMG/Icolog/LOGO.png" WIDTH=70 HEIGH=70 ALIGN=LEFT>   
	<p align="left"><font face=arial><B><font color=white><font size=6>&nbsp&nbspDempsey Shop</font></font></p
	</div>
 <BR>
<!-- MENU  -->
<div id="nav" align="center"> 
	<ul class="nav">
		<li><a align="center" href="../index.php"><i class="fas fa-home"></i>&nbsp&nbspInicio</a></li>
		<li><a align="center" href="../Tecnicas.html"><i class="fas fa-fist-raised"></i>&nbsp&nbspTécnicas</a></li>  	
		<li><a align="center" href="../product.php"><i class="fas fa-shopping-bag"></i> &nbsp&nbsp Tienda </a></li>	
	</div>  
	<br><br><br>
</header>
    <br><br><br>


<body>
    <div id=imagenes>
        <div class="product" style="margin-left: 3em;">
            <!--IMAGEN GRANDOTA -->
            <br><br><br>
            <div class="img-container">
                <img id="cajitaImagen" src="https://images-na.ssl-images-amazon.com/images/I/81SK-6wy1wL._AC_SL1500_.jpg"> <!-- IMAGEN GRANDE-->
            </div>
            <!--Inicio de imagenes bebes-->
            <div class="product-small-img">
                <img src="https://images-na.ssl-images-amazon.com/images/I/716uHfw3iEL._AC_SL1500_.jpg" onclick="mifuncion(this)"> <!-- imagenes pequenias-->
                <img src="https://images-na.ssl-images-amazon.com/images/I/81SK-6wy1wL._AC_SL1500_.jpg" onclick="mifuncion(this)"> <!-- imagenes pequenias-->
                <img src="https://images-na.ssl-images-amazon.com/images/I/8151icTSJCL._AC_SL1500_.jpg" onclick="mifuncion(this)"> <!-- imagenes pequenias-->
                
            </div>
        </div>
    </div>
<!-- JAVASCRIPT -->
<script type="text/javascript">
    function mifuncion(smallImg){
        var fullImg=document.getElementById("cajitaImagen");
        fullImg.src=smallImg.src;
    }
</script>


  

<!-- Informacion de los productos -->

    <div id="informacion">
        <h2><font size=5><center>Juego de boxeo de doble extremo, pelota de boxeo de doble punta, 
            kit de reflejo de velocidad con cordones totalmente ajustables, 
            saco de boxeo de piel sintética con vendas de mano, 
            kit de instalación completo y bolsa de transporte </h2></center></font>
        <p><font size=4> Descripción</p></font>
        <p><font size=2> 
            Consigue más explosión por tu dinero con el kit de boxeo BoxerPoint, 
            que incluye un par de envolturas protectoras para las manos, 
            una práctica bolsa de viaje para un fácil almacenamiento 
            y una bomba para inflar tu bolso.
        </font>
            <font size=2><center>
            INCLUYE:
           <br> 1 bolsa de doble extremo
           <br> 2 cuerdas elásticas ajustables (105 cm cada uno)           
           <br> 4 cierres de anillo resistentes           
           <br> 1 par de vendas de mano
           <br> 1 bomba y accesorios para inflar
           <br> 1 kit de instalación completo
           <br> 1 bolsa de transporte con cordón
           <br> 1 manual de instrucciones paso a paso (idioma español no garantizado)
           <br> Marca: BOXERPOINT.

            <br><br>Precio: $900</p>
            </font></center>
            
            <center>
            <div>
            <?php  if (isset($_SESSION['nombre'])){  ?>
                <form action="transaccion.php" method="post" id="formulario">
                    <input type="hidden" value="Juego de boxeo de doble extremo" name="prod">
                    <input type="hidden" value="900" name="prec">
                    <input type="number" value="1" name="cant" min=1>
                <button onclick="carrito();" class="btn btn--3">Añadir al carrito</button>
            </form>
                <script type="text/javascript">
        function carrito(){
            alert("Añadido al carrito");
            document.getElementById("formulario").submit();
        }
        </script>
        <?php } else { ?>

            <button onclick="carrito();" class="btn btn--3">Añadir al carrito</button>
                <script type="text/javascript">
            function carrito(){
            alert("Necesitas iniciar sesion");
            location.href='../inicio_de_sesion.php';
        }
        </script>
        <?php } ?>
 
            </div>
            </center>
          
      
    </div>



</body>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</html>