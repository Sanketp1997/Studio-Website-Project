<?php
#include_once 'connect.php';

$link = mysqli_connect("localhost", "root", "", "tenpm");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


#echo "register";
$un = $_POST['username'];
$pw1 = $_POST['password_1'];
#$pw2 = $_POST['password_2'];

/* echo $un;
echo $pw1; */
if($un==Null)
{
	$message = "Username not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/login.html"
</script> 
 <?php #	header('Location: http://localhost/studio/register.html'); 
}

else if($pw1==Null)
{
$message = "Password not Entered.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  
  ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/login.html"
</script> 
 <?php 
   #header('Location: http://localhost/studio/register.html'); 
  
}
/* else if($pw1!=$pw2)
{
	$message = "Password not matched.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  
  ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/register.html"
</script> 
 <?php 
  # header('Location: http://localhost/studio/register.html'); 
} */

else{
$sql= "SELECT * FROM registration WHERE u_name LIKE '$un'";

$result = $link->query($sql);

if($result->num_rows == 0)
	
	{
			$message = "User not Found.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  
  ?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/login.html"
</script> 
 <?php 
	}
else 
{
	$row = $result->fetch_assoc();
	$dbun= $row["u_name"];
	$dbpass =  $row["password"];
	#$pc=$row["package"];
	#echo $pc;
	if($dbpass != $pw1)
	{
	
			$message = "Password not matched.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 ?>
 
 <script language="javascript">
    window.location.href = "http://localhost/studio/login.html"
</script>  
 <?php 
   
	}
	
	else{
		
		session_start();
		
		$_SESSION["sessionun"]=$un;
		#$_SESSION["session"]='$un';
		
		
	

		
		 ?>
 
 <script language="javascript">
    window.location.href = "http://localhost/studio/index1.php"
</script>  
 <?php 
		
	}
	
	
	}
		
/* if(mysqli_query($link, $sql)){
    $message = "Registration Successful.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
	
	?>
 
<script language="javascript">
    window.location.href = "http://localhost/studio/login.html"
</script> 
 <?php 
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} */
}
 #header('Location: http://localhost/studio/register.html'); 
mysqli_close($link);

?>