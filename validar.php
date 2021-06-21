<?php
$correo=$_POST['correo'];
$password=$_POST['password'];

include('db.php');

$consulta="SELECT * FROM usuarios_box where Correo='$correo' and Contraseña='$password'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

session_start();
Ob_start();
if($filas){
    $nombre="";
    $correo="";
    while($filas1=mysqli_fetch_assoc($resultado)){$nombre=$filas1['Nombre']; $correo=$filas1['Correo'];}
    $_SESSION['nombre']=$nombre;
    $_SESSION['correo']=$correo;
    header("location: index.php");
}
else{
    ?>
    <?php
    include("inicio_de_sesion.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>