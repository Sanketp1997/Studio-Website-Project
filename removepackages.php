<?php
$link = mysqli_connect("localhost", "root", "", "tenpm");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
 }
 ?>
 
 <html>
 <head>
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 
 <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
 <link rel="stylesheet" href="ssss.css">

 
 <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

	
	<style>
	

	
	</style>
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">



 </head>
 <body>
 <!-- Header Area Start -->
    <header class="header-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="aindex.html"><b>10Pm Productions</b></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index1.html">Home <span class="sr-only">(current)</span></a>
                                    </li>
									
									<li class="nav-item active">
                                        <a class="nav-link" href="golden1.php">Packages <span class="sr-only">(current)</span></a>
                                    </li>
                                   
								   <li class="nav-item active">
                                        <a class="nav-link" href="adminpackages.php"> Add Package <span class="sr-only">(current)</span></a>
                                    </li>
									
									<li class="nav-item active">
                                        <a class="nav-link" href="removepackages.php">Remove Package <span class="sr-only">(current)</span></a>
                                    </li>
								   
                                    <li class="nav-item">
                                        <a class="nav-link" href="vieworders.php">View Orders</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                                    </li> -->
                              <!--        <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                               -->     <!--  <li class="nav-item">
                                        <a class="nav-link" href="contact.html">contact</a>
                                    </li> -->
									 <li class="nav-item">
                                        <a class="nav-link" href="index.html">Logout</a>
                                    </li> 
                                </ul>
                                <!-- Search Form -->
                               <!--  <div class="header-search-form ml-auto">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div>
                                --> <!-- Search btn -->
                               <!--  <div id="searchbtn">
                                    <img src="img/core-img/search.png" alt="">
                                </div> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
 </body>
 
 </html>
 
 
 <?php
 echo "</br>";
 
 echo "</br>";
 $sql="select * from add_package";
 
 $result = mysqli_query($link, $sql);
echo "<center>";
 while($row = mysqli_fetch_assoc($result))
{
echo "PACKAGE : ".$row['p_name'];?><form  method="post" >
<input type="hidden" value="<?php  echo $row['p_name']; ?>" name="pname"/>
<input type="submit" value="Remove" name="remove"/>
</form>


<?php } 	

echo "</center>";
 
 
if(isset($_POST['remove'])){
		$pname=$_POST['pname'];
	$sql="delete  from add_package where p_name='$pname'";
	mysqli_query($link,$sql);	
	
	
	
		$message = "Package Removed";
  echo "<script type='text/javascript'>alert('$message');</script>";
  
  
  ?>	
	<script language="javascript">
    window.location.href = "http://localhost/studio/removepackages.php";
</script> 		
	
	<?php
	
}


?>
