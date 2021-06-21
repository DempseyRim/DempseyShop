<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Smail
 *
 * @author obedese
 */
class Smail {
    function Enviar($to,$message){
    require("class.phpmailer.php");
    require("class.smtp.php");

$email_user = "TU_EMAIL";
$email_password = "TU_PASSWORD";
$the_subject = "Contraseña RSOMA";
$address_to =$to;
$from_name = "RsOma";
$phpmailer = new PHPMailer();
// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = "rsomaproject@gmail.com";
$phpmailer->Password = "123porti"; 
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;
$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email
$phpmailer->Subject = $the_subject;	
$phpmailer->Body .="<h1 style='color:#3498db;'>Hola Mundo!</h1>";
$phpmailer->Body .= "<p>$message</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer->IsHTML(true);
if (!$phpmailer->send()) {
    echo "Mailer Error: " . $phpmailer->ErrorInfo;
} else {
    echo "Message sent!";
}
    }
 

}
