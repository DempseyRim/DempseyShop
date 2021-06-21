<?php
     include('../db.php');
    session_start();
    Ob_start();
    $producto=$_POST["prod"];
    $precio=$_POST["prec"];
    $cantidad=$_POST["cant"];
    $cliente="";
    $consulta="SELECT*FROM usuarios_box WHERE Correo = '".$_SESSION["correo"]."';";
    echo ("correo: " .$_SESSION['correo']);
    $resultado=mysqli_query($conexion,$consulta);
    while($filas1=mysqli_fetch_assoc($resultado)){
    $cliente=$filas1['Id_usuarios'];
}
    
    $total=$precio*$cantidad;

    $consulta = "INSERT INTO `carrito` (`producto`, `precio`, `cantidad`, `id_cliente`,`total`) VALUES ('$producto', '$precio', '$cantidad', '$cliente','$total')";
    $resultado=mysqli_query($conexion,$consulta);
    header("location: ../datatable.php");
    ?>