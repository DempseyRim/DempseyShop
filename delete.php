<?php
include('db.php');
session_start();
Ob_start();
$cliente="";
$consulta="SELECT*FROM usuarios_box WHERE Correo = '".$_SESSION["correo"]."';";
$resultado=mysqli_query($conexion,$consulta);
while($filas1=mysqli_fetch_assoc($resultado)){
$cliente=$filas1['Id_usuarios'];}
$consulta = "DELETE FROM `carrito` WHERE id_cliente='$cliente'";
$resultado = mysqli_query($conexion,$consulta);  
?>

<script type="text/javascript">
        alert("Borrado con exito");
        location.href='datatable.php';
        </script>