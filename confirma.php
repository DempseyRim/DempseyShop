<?php
include('db.php');
include('datatable.php');
$direc=$_POST['inputDireccion'];
$cp=$_POST['inputCP'];

if(empty($direc) || empty($cp)){
    $_SESSION['mensaje']='Los campos no pueden estar vacios';
    ?>
    <a onload=location.reload();></a>
    <?php
    }

else if(isset($_SESSION["correo"])){

$to      = $_SESSION['correo'];
$subject    = 'Ticket de compra';
$message   = "Se ha recibido tu compra con estos datos de envio: 
-----------------------------------------------------------------------
|                    Direccion: $direc                                |
|                    Codigo postal: $cp                               |
|                    Con un total de $total pesos                      |
-----------------------------------------------------------------------";
$headers = 'From: DempseyShop';

if (mail($to, $subject, $message, $headers)){
    ?>
    <script type="text/javascript">
        alert("Ticket enviado al correo");
        location.href='datatable.php';
        </script>
        <?php
} else {
    ?>
    <script type="text/javascript">
        alert("Error al enviar ticket");
        location.href='datatable.php';
        </script>
        <?php
}
$cliente="";
$consulta="SELECT*FROM usuarios_box WHERE Correo = '".$_SESSION["correo"]."';";
$resultado=mysqli_query($conexion,$consulta);
while($filas1=mysqli_fetch_assoc($resultado)){
$cliente=$filas1['Id_usuarios'];}
$consulta = "DELETE FROM `carrito` WHERE id_cliente='$cliente'";
$resultado = mysqli_query($conexion,$consulta);  
}
?>