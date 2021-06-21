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
<title>Protector de Pecho.</title> <!-- NOMBRE PAGINA -->
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
                <img id="cajitaImagen" src="../IMG/Productos/pecho.png"> <!-- IMAGEN GRANDE-->
            </div>
            <!--Inicio de imagenes bebes-->
            <div class="product-small-img">
                <img src="https://images-na.ssl-images-amazon.com/images/I/61gr532ZZoL._AC_SL1478_.jpg" onclick="mifuncion(this)"> <!-- imagenes pequenias-->
                <img src="../IMG/Productos/pecho.png" onclick="mifuncion(this)"> <!-- imagenes pequenias-->
                <img src="https://images-na.ssl-images-amazon.com/images/I/71bFr%2BWklBL._AC_SL1482_.jpg" onclick="mifuncion(this)"> <!-- imagenes pequenias-->
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
        <h2><font size=6><center>Protección De Cuerpo MMA (Reversible) </h2></center></font>
        <p><font size=5> Descripción</p></font>
        <p><font size=3>El cuero patentado Maya Hide es armadura en sí mismo y le durará una carrera.(CE Certificado Aprobado).
          <br>  Las correas con elástico incorporan un gancho-y-lazo con la correa de nylon, asegurando un ajuste eficiente y cómodo.
        </font><br><br><br>
            <font size=2><center>
            Color: Rojo/Azul
            <br>Talla: L.
            <br>Marca: RDX.
            <br>Material: Nylon
            <br>Medidas:40.6 x 25.4 x 10.2 cm</p>
            <br><br>Precio: $2,300</p>
            </font></center><br><br>
            
            <center>
            <div>
            <?php  if (isset($_SESSION['nombre'])){  ?>
                <form action="transaccion.php" method="post" id="formulario">
                    <input type="hidden" value="Protección De Cuerpo MMA (Reversible)" name="prod">
                    <input type="hidden" value="2300" name="prec">
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