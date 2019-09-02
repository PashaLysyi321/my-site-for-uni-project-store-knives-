<?php session_start();?>
<?php
	if (isset($_GET['x1'])) {
		 if($_SESSION['varname']){
			 x11();
		 }
	}
	function x11(){
		$name51 = "Ghostrike Fixed Blade";
		$price51 = 199;
		SetCookie("5/1/1",$name51);
		SetCookie("5/1/2",$price51);
	}
	if (isset($_GET['x2'])) {
		 if($_SESSION['varname']){
			 x22();
		 }
	} 
	function x22(){
		$name52 = "Fixed Knife Black G-10";
		$price52 = 150;
		SetCookie("5/2/1",$name52);
		SetCookie("5/2/2",$price52);
	}
	if (isset($_GET['x3'])) {
		  if($_SESSION['varname']){
			 x33();
		 }
	} 
	function x33(){
		$name53 = "Kit Carsons M16  Carry";
		$price53 = 199;
		SetCookie("5/3/1",$name53);
		SetCookie("5/3/2",$price53);
	}
	if (isset($_GET['x4'])) {
		 if($_SESSION['varname']){
			 x44();
		 }
	} 
	function x44(){
		$name54 = "ProTech 721";
		$price54 = 95;
		SetCookie("5/4/1",$name54);
		SetCookie("5/4/2",$price54);
	}
?>		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<head>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="css/gallery.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/collection.css" type="text/css" media="all" />
		<title>Knife</title>
	</head>
	<body>
		<div class="icon1">
			<table>
				<tr>
					<a href="index.php" class="w3-button w3-black" target = "_self">HOME</a> 
					<a href="index.php#news" class="w3-button w3-black" target = "_self">NEWS</a>			
					<a href="collection.php" class="w3-button w3-black" target = "_self">COLLECTION</a> 
					<a href="gallery.php" class="w3-button w3-black" target = "_self">GALLERY</a> 				
					<a href="author.php?couter=<?php echo $_COOKIE['couter']?>" class="w3-button w3-black" target = "_self">AUTHOR</a> 
					<a href="login.php" class="w3-button w3-black" target = "_self">LOGIN</a>
					<?php				
						if($_SESSION['varname']){
							?>
							<a href="ownpage.php" class="w3-button w3-black" target = "_self">OWNPAGE</a>
							<?php
						}
					?>
				</tr>
			</table>
		</div>
		
		<?php					
			if (isset($_GET['x1']) or isset($_GET['x2'])or isset($_GET['x3'])or isset($_GET['x4'])) {
				if($_SESSION['varname']){
					 include "alert.php";
					 alert3();
				}
			else{ 
				include "alert.php";
				alert2();
			}
			}
		?>
		
		<div class="bgimg-11 w3-display-container w3-opacity-min">
			<div class="w3-display-middle">
				<span class="w3-xxlarge w3-text-black w3-wide">COLLECTION</span>
			</div>
		</div>
		
		<div class="text">
			<h3>On this page you can find our score, you can buy anything by adding this item to you basket</h3>
		</div>
			
		<div class="line">
			<span class="w3-xxlarge w3-text-white w3-wide">SELF-DEFENCE KNIVES</span>
		</div>
	
		<div class="container1">
			<?php
				$name41 = "Ghostrike Fixed Blade";
				$price41 = 199;
			?>
			<h4> <?php echo $name41 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/t1.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price41 ?> $ <a href="coll5.php?x1=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name42 = "Fixed Knife Black G10";
				$price42 = 150;
			?>
			<h4> <?php echo $name42 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/t2.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price42 ?> $ <a href="coll5.php?x2=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name43 = "Kit Carsons M16  Carry";
				$price43 = 199;
			?>
			<h4> <?php echo $name43 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/t3.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price43 ?> $ <a href="coll5.php?x3=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>		
		
		<div class="container1">
			<?php
				$name44 = "ProTech 721";
				$price44 = 95;
			?>
			<h4> <?php echo $name44 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/t4.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price44 ?> $ <a href="coll5.php?x4=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>	
			
	</body>	
</html>	