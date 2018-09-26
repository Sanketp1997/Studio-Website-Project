<?php
#include_once 'connect.php';

$link = mysqli_connect("localhost", "root", "", "tenpm");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


#echo "register";
$un = $_POST['username'];
$pw1 = $_POST['password_1'];
$pw2 = $_POST['password_2'];
$emailid = $_POST['email'];
$cont = $_POST['contact'];

if($un==Null)
{
	$message = "Username not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/register.html"
</script> 
 <?php #	header('Location: http://localhost/studio/register.html'); 
}

else if($emailid==Null)
{
	$message = "Email Id not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/register.html"
</script> 
 <?php #	header('Location: http://localhost/studio/register.html'); 
}


else if($cont==Null)
{
	$message = "Contact Number not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/register.html"
</script> 
 <?php #	header('Location: http://localhost/studio/register.html'); 
}




else if($pw1==Null || $pw2==Null)
{
$message = "Password not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  
  ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/register.html"
</script> 
 <?php 
   #header('Location: http://localhost/studio/register.html'); 
  
}
else if($pw1!=$pw2)
{
	$message = "Password not matched.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  
  ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/register.html"
</script> 
 <?php 
  # header('Location: http://localhost/studio/register.html'); 
}

else{
$sql= "INSERT INTO registration (u_name,password,contact_no,email_id) VALUES ('$un','$pw1','$cont','$emailid')";


if(mysqli_query($link, $sql)){
    $message = "Registration Successful.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	
	?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/login.html"
</script> 
 <?php 
	
} else{
    $message = " User already exist.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  
  ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/register.html"
</script> 
 <?php 
}
}
 #header('Location: http://localhost/studio/register.html'); 
mysqli_close($link);

?>