<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('db.php');
session_start();
Ob_start();
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$password=$_POST['password'];

if(empty($nombre) || empty($apellido) || empty($correo)|| empty($password)){
$_SESSION['mensaje']='Los campos no pueden estar vacios';
?>
<script>
      function load() {
        window.location="formulario.php";
      }
      window.onload = load;
    </script>
    <?php
}

else{
if(strlen($password) < 8 || strlen($password) > 16 || strlen($correo) < 1){
    $_SESSION['mensaje']='Tus contraseñas tienen que tener mas caracteres';
    header("location: formulario.php");
}

if (preg_match("/\d/", $nombre.$apellido)) 
    {
    $_SESSION['mensaje']='Los nombres no pueden tener numeros';
    header("location:formulario.php");
    }

$consulta="SELECT*FROM usuarios_box where Correo='$correo'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['mensaje']='El usuario ya existe, intente con otro';
    header("location:formulario.php");
}
else{
$consulta= "INSERT INTO `usuarios_box` (`Nombre`, `Apellido`, `Correo`, `Contraseña`) 
VALUES ('$nombre', '$apellido', '$correo', '$password');";
$resultado=mysqli_query($conexion,$consulta);
include('sendEmail.php');
$to      = $correo;
$subject    = 'Cuenta DempseyShop';
$message   = 'Correo registrado con exito';
$headers = 'From: DempseyShop';

if (mail($to, $subject, $message, $headers)){
    ?>
    <script type="text/javascript">
        alert("Correo enviado");
        location.href='inicio_de_sesion.php';
        </script>
        <?php
} else {
    ?>
    <script type="text/javascript">
        alert("Error al enviar");
        location.href='inicio_de_sesion.php';
        </script>
        <?php
} 
}
}
?>
