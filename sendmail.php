<?php

$ename=$_POST['name'];
$eemail=$_POST['email'];
$esub=$_POST['subject'];
$emes=$_POST['message'];

if($ename==Null)
{
	$message = "Username not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/contact.html"
</script> 
 <?php 
}

if($eemail==Null)
{
	$message = "email not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/contact.html"
</script> 
 <?php 
}


if($esub==Null)
{
	$message = "Subject not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/contact.html"
</script> 
 <?php 
}



if($emes==Null)
{
	$message = "Message not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/contact.html"
</script> 
 <?php 
}



$to      = 'globalhackwf20@gmail.com';
$subject = '$esub';
$message = '$emes';
/* $headers = 'From: $email' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion(); */

mail($to, $subject, $message);
 



?>
