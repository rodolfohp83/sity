<?php
$name = $_POST['name'] ;
$phone = $_POST['phone'] ;
$email = $_POST['email'] ;
$textarea = $_POST['textarea'] ;

    $Body = "Hola Siti Consultoria - Contacto";
    $Body .= "\n";
	$Body .= "\n";
    $Body .= "Mi Nomnbre es: ";
    $Body .= $name;
	$Body .= "\n";
	$Body .= "Mi Teléfono: ";
    $Body .= $phone;
	$Body .= "\n";
	$Body .= "Mi Email: ";
    $Body .= $email;
	$Body .= "\n";
	$Body .= "Mensaje: ";
    $Body .= $textarea;
	
   $header = 'From: ' . $email . " \r\n";
   $para = 'info@siticonsultoria.com';
   $asunto = 'Siti Mensaje - Contacto';

  mail($para, $asunto, utf8_decode($Body), $header);
  
//   echo "<script>alert('Tu mensaje ha sido enviado correctamente')</script>";
echo "<script> window.location='thankyou.php'; </script>";
?><script type="text/javascript">
window.parent.location="http://www.siticonsultoria.com";
</script>
