<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['company'])   ||
   empty($_POST['phone'])     ||
   empty($_POST['ext'])       ||
   empty($_POST['cellphone']) ||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   empty($_POST['datepicker-13'])||
   empty($_POST['calle'])     ||
   empty($_POST['numero'])    ||
   empty($_POST['sector'])    ||
   empty($_POST['referencia'])||
   empty($_POST['name2'])     ||
   empty($_POST['company2'])  ||
   empty($_POST['numero2'])   ||
   empty($_POST['message2'])  ||
   empty($_POST['cobro'])     ||
   empty($_POST['sdo-nombre'])||
   empty($_POST['funda'])     ||
   empty($_POST['sobre'])     ||
   empty($_POST['paquete'])   ||
   empty($_POST['otro'])      ||
   empty($_POST['calle2'])    ||
   empty($_POST['numero3'])   ||
   empty($_POST['sector2'])   ||
   empty($_POST['referencia2'])||
   empty($_POST['paquetes'])     ||

   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$ext = $_POST['ext'];
$cellphone = $_POST['cellphone'];
$ext = $_POST['ext'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['ext'];$ext = $_POST['datepicker-13'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$sector = $_POST['sector'];
$referencia = $_POST['referencia'];
$name2 = $_POST['name2'];
$company2 = $_POST['company2'];
$numero2 = $_POST['numero2'];
$message2 = $_POST['message2'];
$cobro = $_POST['cobro'];
$sdo = $_POST['sdo-nombre'];
$funda = $_POST['funda'];
$sobre = $_POST['sobre'];
$paquete = $_POST['paquete'];
$otro = $_POST['otro'];
$calle2 = $_POST['calle2'];
$numero3 = $_POST['numero3'];
$sector2 = $_POST['sector2'];
$referencia2 = $_POST['referencia2'];
$paquetes = $_POST['paquetes'];

// Create the email and send the message
$to = 'carlos.garciadm@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nNombre: $name\n\nEmpresa: $company\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>