<?php 
 $link = mysqli_connect("localhost", "root", "", "tenpm");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	
}
	
 ?>
<html>
<head>
<title>Packages</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="main.css">
</head>
<body>



<div class="tabs is-centered" id="tab_header">
  <ul>
    <li class="item is-active" data-option="1"><a>Silver</a></li>
    <li class="item" data-option="2"><a>Gold</a></li>
	<li class="item" data-option="3"><a>Diamond</a></li>
    <li class="item" data-option="4"><a>Platinum</a></li>
	<?php
		
		$sql="select * from add_package";
		$result=mysqli_query($link,$sql);
		$i=5;
		while($re=mysqli_fetch_assoc($result)){
			?>
			
			 <li class="item" data-option="<?php echo $i?>"><a> <?php echo $re['p_name'];

				$i++;?></a></li>	 
			
	<?php	}
		?>
	
  </ul>
</div>
<div class="box" id="tab_container">
  <div class="container_item is-active" data-item="1">
  <ul id="silver">
	<li>Duration=1 slot (6 hour)morning/evening</li>
	<li>2-3 location with 2 different costumes</li>
	<li>30 edited photos in soft copy</li>
	<li>11 photos pre-wedding photobook</li>
	<li>Signature pre-wedding photo frame[Qulity-1]</li>
	<li>Photo slide show video</li>
	<li>transport(optional)</li>
</ul>
</br>
<b><h3>Price = INR 10,000 (Transport Exclusive) </h3></b>
</br>
</br>
<center>
	<a class="button is-primary" href="login.html">Select </a>
</center>
 </div>
  <div class="container_item" data-item="2"> 
    <ul id="gold">
	<li>Duration=1 Day(24 hour)</li>
	<li>Stay provided </li>
	<li>3-5 location with 3 different costumes</li>
	<li>40 edited photos in soft copy</li>
	<li>21 photos pre-wedding photobook</li>
	<li>pre-wedding cinematic movie(length=2 min)</li>
	<li>Signature pre-wedding photo frame[Qulity-2]</li>
	<li>Photo slide show video</li>
	<li>transport(optional)</li>
</ul>
</br>
<b><h3>Price = INR 18,000 (Transport Exclusive) </h3></b>
</br>
</br>
<center>
	<a class="button is-primary"  href="login.html">Select</a>
	
</center>
  </div>
  <div class="container_item" data-item="3">
  <ul id="diamond">
	<li>Duration=2 Day(Weekend)</li>
	<li>Stay provided </li>
	<li>6-7 location with 7 different costumes  </br>
	(2 OUTFITS PROVIDED BY US )</li>
	<li>60 edited photos in soft copy</li>
	<li>35 photos pre-wedding photobook</li>
	<li>pre-wedding cinematic movie(length=2 min)</li>
	<li>Signature pre-wedding photo frame[Qulity-3]</li>
	<li>Photo slide show video</li>
	<li>transport provided</li>
</ul>
</br>
<b><h3>Price = INR 35,000 (Transport Exclusive) </h3></b>
</br>
</br>
<center>
	<a class="button is-primary"  href="login.html">Select</a>
</center>
  </div>
  <div class="container_item" data-item="4"> 
     <ul id="platinium">
	<li>Duration=3-4 Day(Weekend)</li>
	<li>Stay provided </li>
	<li>8-10 location with different costumes  </br>
	(3 OUTFITS PROVIDED BY US )</li>
	<li>100 edited photos in soft copy</li>
	<li>40 photos pre-wedding photobook</li>
	<li>pre-wedding cinematic movie(length=5 min)</li>
	<li>Signature pre-wedding photo frame[Qulity-5]</li>
	<li>Photo slide show video</li>
	<li>transport provided</li>
</ul>
</br>
<b><h3>Price = INR 55,000 (Transport Exclusive) </h3></b>
</br>
</br>
<center>
	<a class="button is-primary"  href="login.html">Select</a>
</center>
  </div>
  
	<?php 
	 $t=5;
	 $p=0;
	 $sql1="select * from add_package";
	 $re=mysqli_query($link,$sql1);
	 while($idd=mysqli_fetch_assoc($re))
	 { 
	
			#print_r($idd['id']);
	 
	 	if($t<=$i)
		{	
			#error_reporting(0);
			//echo $p;
		/* $sql="select * from add_package where id=$idd[$p]";
		$result=mysqli_query($link,$sql);	
		$re=mysqli_fetch_assoc($result); */
	 ?>

	<div class="container_item" data-item="<?php echo $t?>"> 
     <ul >
	
			
			 <li ><?php echo "Duration:".$idd['duration'] ; ?></li>	 
			 <li ><?php echo "Location:".$idd['location'] ; ?></li>	 
			 <li ><?php echo "Softcopies:".$idd['softcopy'] ; ?></li>	 
			 <li ><?php echo "Number of Pre-Photos:".$idd['pre_photos'] ; ?></li>	 
			 <li ><?php echo "Video:".$idd['video'] ; ?></li>	 
			 <li ><?php echo "Quality:".$idd['quality'] ; ?></li>	 
			
		
	
	
</ul>

	
</br>


<b><h3>Price = <?php echo $idd['price'];?> (Transport Exclusive) </h3></b>
</br>
</br>
<center>
	<a class="button is-primary"  href="login.html">Select</a>
</center>
  </div>
  <?php	$t++;#$p++;
	 
	 
			}}
		?>
	
	
  
  
  
  
  
  
  
  
</div>

<script>

$(document).ready(function () {
  $('#tab_header ul li.item').on('click', function () {
    var number = $(this).data('option');
    $('#tab_header ul li.item').removeClass('is-active');
    $(this).addClass('is-active');
    $('#tab_container .container_item').removeClass('is-active');
    $('div[data-item="' + number + '"]').addClass('is-active');
  });
});
</script>
</body>
</html>