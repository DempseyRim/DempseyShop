<?php 
 include('db.php');
 session_start();
 Ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carrito de Compras</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/tabla.css">
  <link rel="stylesheet" href="css/tarjeta.css">
	<link href="IMG/Icolog/LOGO.ico" type="image/x-icon" rel="shortcut icon"/> <!-- ICONO DE LA PAGINA   -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

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
<body style="background-color:#DFE4EB; color:gray;">
	<div class="page-container">
		<nav class="full-reset nav-phonestore">
           <div class="logo tittles-pages"> 
		    <font face=impact><font color=white><font size=6>Dempsey Shop</font></font>
		    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp			
		   <img src="IMG/Icolog/LOGO.png" WIDTH=70 HEIGH=70 ALIGN=LEFT>  <!-- Logo -->
           </div>
            <ul class="list-unstyled full-reset navigation-list">
                <!--BTN Regresar -->
                <li>
                <a id="tooltip" href="product.php">
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fas fa-undo-alt"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Regresar</span>
                    </a> 
                </li> <!-- FIN BTN Regresar -->

                <?php  if (isset($_SESSION['nombre'])){  ?>
                <!--Cerrar Sesion -->
                <li>
                <a id="tooltip" href="cerrar_sesion.php">
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fas fa-sign-out-alt"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Salir</span>
                </a>
            </li>
				<!--Carrito de compras -->
                <li>
                    <a id="tooltip" href="datatable.php">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fas fa-shopping-cart" ></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <span id="tooltip-box" style="font-family: 'Poppins', sans-serif; color:white;">Carrito</span>
                    </a>
                </li>
                <?php } else{  ?>

                <li><a href="inicio_de_sesion.php">&nbspIniciar Sesión</a></li>
                <?php }  ?>
            </ul>
            <i class="fa fa-bars visible-xs btn-mobile"></i>
            
            </nav>
</body>

<!-- Carrito de compras -->
    <body id ="body2">    
    <br><br> 
    <div id="contenedorinfo"> 
    <center> <b style="font-family: 'Poppins', sans-serif; color:black;"><font size=5>Carrito de Compras</font> </b> </center>
        <div id="main-container"  style="font-family: 'Poppins', sans-serif; padding-top:0px;">
        <table id="example" class="mdl-data-table" width=100% style="padding-top:0px;">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>     
                
            <tbody width=100%>
                <?php
                $consulta = "SELECT * FROM `carrito` JOIN usuarios_box WHERE Correo='".$_SESSION["correo"]."'AND Id_usuarios=id_cliente;";
                $resultado = mysqli_query($conexion,$consulta);
                $total=0;
                while($fila = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$fila['producto']."</td>";
            echo "<td>".$fila['cantidad']."</td>";
            echo "<td>".$fila['precio']."</td>";
            $total=$total+$fila['cantidad']*$fila['precio'];
            echo "</tr>";
        }
            
        ?> 
        </tbody>
        </table>
    

        <table style="background:none; color:black;"> 
        <tr><td> 
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp
            
        
            <b> Total :&nbsp$</b>  
        
         <?php echo "$total"; ?> 
        </td></tr></table>

        
        <div id="VaciaryActualizar">
            <!--Vaciar carrito --> <br>
            <div id="espacio1"><a href="delete.php" style="color:red; text-decoration:none; font-weight:bold;">
                <i class="fas fa-trash-alt" style="color:red; font-weight:bold;"></i> &nbsp Vaciar carrito</a>
            </div> 
            <!--FIN Vaciar carrito -->

            <!-- Actualizar carrito -->    
            <div id="espacio1"><a href="#" onClick="location.href=location.href" style="color:#2870FF; text-decoration:none; font-weight:bold;">
                <i class="fas fa-redo" style="color:#2870FF; font-weight:bold;"></i> &nbsp Actualizar</a>
            </div>
        </div>


    </div>
    <!-- FIN CARRITO-->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Datos -->   
    <center> 
        <b style="font-family: 'Poppins', sans-serif; color:black;">
            <font size=3> <i class="fas fa-exclamation-triangle" style="color:red;"></i>
                Completa la siguiente informacion para proceder con tu compra.
            </font> 
        </b> 
    </center>   
    <br>

<!-- INICIO de los datos aquiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii me quede -->   
    <div class="contenedor" style="font-family: 'Poppins', sans-serif;">
        <section class="tarjeta" id="tarjeta">
            <!--Frente de la tarjeta -->
            <div class="delantera">
                <div class="logo-marca" id="logo-marca">
                    <!-- logo VISA O MASTERCARD -->
                </div>
                <!--chip-->
                <img src="IMG/Tarjeta/chip-tarjeta.png" class="chip" alt="">

                <div class="datos">
                    <div class="grupo" id="numero">
                        <p class="label">Numero tarjeta</p>
                        <p class="numero">#### #### #### ####</p>
                    </div>

                    <div class="flexbox">
                        <div class="grupo" id="nombre">
                            <p class="label">Nombre de la tarjeta</p>
                            <p class="nombre">Juan Perez</p>
                        </div>
                    

                        <div class="grupo" id="expiracion">
                            <p class="label">Expiracion</p>
                            <p class="expiracion"> <span class="mes">MM</span>  / <span class="year">AA</span></p>
                        </div>

                    </div>
                </div>
            </div>

            <!--Detras de la tarjeta -->
            <div class="trasera">
                <div class="barra-magnetica"> </div>
                <div class="datos">
                    <div class="grupo" id="firma">
                        <p class="label">Firma</p>
                        <div class="firma">
                            <p></p>
                        </div>
                    </div>

                    <div class="grupo" id="ccv">
                        <p class="label"> CCV</p>
                        <p class="ccv"></p>
                    </div>

                </div>
                <p class="leyenda">
                    Esta tarjeta es intransferible, su uso se rige de acuerdi a lo establecido en su respectivo contrato.
                </p>

                <div class="grupo" id="telefono">
                    <div class="telefono"> 
                        <p> </p>
                    </div>
                </div>

                <a href="" class="link-banco">wwww.tubanco.com</a>
                
            </div>

        </section>


        <!-- Boton de desplazamiento -->
        <div class="contenedor-btn">
            <button class="btn-abrir-formulario"  id="btn-abrir-formulario">
                <i class="fas fa-plus"></i>
            </button>
        </div>


        <!-- Formulario -->
        
        <form action="confirma.php" method="POST" id="formulario-tarjeta" class="formulario-tarjeta">
            <div class="grupo">
                <label for="inputNumero">Numero de Tarjeta</label>
                <input type="text" id="inputNumero" maxlength="19" autocomplete="off">
            </div>

            <div class="grupo">
                <label for="inputNombre">Nombre</label>
                <input type="text" id="inputNombre" maxlength="19" autocomplete="off">
            </div>

            <div class="flexbox">
                <div class="grupo expira">
                    <label for="selectMes">Expiracion</label>
                    <div class="flexbox">
                        <div class="grupo-select">
                            <select name="mes" id="selectMes">
                            <option disabled selected> Mes </option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>

                        <div class="grupo-select">
                            <select name="year" id="selectYear">
                            <option disabled selected> Año </option>
                            </select>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                </div>

                <div class="grupo ccv">
                    <label for="inputCCV"> CCV </label>
                    <input type="text" id="inputCCV" maxlength="3">
                </div>
            </div>

            <div class="grupo direccion">
                <label for="inputDireccion">Direccion</label>
                <input type="text" id="inputDireccion" name="inputDireccion" maxlength="50" autocomplete="off">
            </div>

            <div class="grupo cp">
                <label for="inputCP"> C.P </label>
                <input type="text" id="inputCP" name="inputCP" maxlength="5">
            </div>

<!-- BOTON CONFIRMAR COMPRA -->
<a style="text-decoration:none"><div ALIGN="CENTER" ><button onclick="submit()" class="btn btn--3">Confirmar Comprar</button></div></a>

<?php  if(isset($_SESSION['mensaje'])){
        echo ($_SESSION['mensaje']);
        unset($_SESSION['mensaje']);
    } ?>  

</form>
         </form>
    
         <br>

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

    
    </div>
    
    <!-- FIN de los datos -->       

  


    
    
  


    

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.foundation.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script></script>
    	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>  
        <script src="js/tarjeta.js"></script>



        
  </body>


  
</html>

    