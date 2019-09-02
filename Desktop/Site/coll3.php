<?php session_start();?>
<?php
	if (isset($_GET['m1'])) {
		if($_SESSION['varname']){
			 f31();
		 }
	}
	function f31(){
		$name31 = "Ghostrike Fixed Blade";
		$price31 = 199;
		SetCookie("3/1/1",$name31);
		SetCookie("3/1/2",$price31);
	}
	if (isset($_GET['m2'])) {
		 if($_SESSION['varname']){
			 f32();
		 }
	} 
	function f32(){
		$name32 = "Fixed Knife Black G-10";
		$price32 = 150;
		SetCookie("3/2/1",$name32);
		SetCookie("3/2/2",$price32);
	}
	if (isset($_GET['m3'])) {
		 if($_SESSION['varname']){
			 f33();
		 }
	} 
	function f33(){
		$name33 = "Kit Carsons M16  Carry";
		$price33 = 199;
		SetCookie("3/3/1",$name33);
		SetCookie("3/3/2",$price33);
	}
	if (isset($_GET['m4'])) {
		 if($_SESSION['varname']){
			 f34();
		 }
	}
	function f34(){
		$name34 = "ProTech 721";
		$price34 = 95;
		SetCookie("3/4/1",$name34);
		SetCookie("3/4/2",$price34);
	}
	if (isset($_GET['m5'])) {
		 if($_SESSION['varname']){
			 f35();
		 }
	} 
	function f35(){
		$name35 = "Ghostrike Fixed Blade";
		$price35 = 65;
		SetCookie("3/5/1",$name35);
		SetCookie("3/5/2",$price35);
	}
	if (isset($_GET['m6'])) {
		 if($_SESSION['varname']){
			 f36();
		 }
	} 
	function f36(){
		$name36 = "Ghostrike Fixed Blade";
		$price36 = 30;
		SetCookie("3/6/1",$name36);
		SetCookie("3/6/2",$price36);
	}
	if (isset($_GET['m7'])) {
		 if($_SESSION['varname']){
			 f37();
		 }
	}
	function f37(){
		$name37 = "Ghostrike Fixed Blade";
		$price37 = 135;
		SetCookie("3/7/1",$name37);
		SetCookie("3/7/2",$price37);
	}
	if (isset($_GET['m8'])) {
		 if($_SESSION['varname']){
			 f38();
		 }
	} 
	function f38(){
		$name38 = "Ghostrike Fixed Blade";
		$price38 = 80;
		SetCookie("3/8/1",$name38);
		SetCookie("3/8/2",$price38);
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
			if (isset($_GET['m1']) or isset($_GET['m2'])or isset($_GET['m3'])or isset($_GET['m4'])or isset($_GET['m5'])or isset($_GET['m6'])or isset($_GET['m7'])or isset($_GET['m8'])) {
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
				
		<div class="bgimg-9 w3-display-container w3-opacity-min">
			<div class="w3-display-middle">
				<span class="w3-xxlarge w3-text-black w3-wide">COLLECTION</span>
			</div>
		</div>
		
		<div class="text">
			<h3>On this page you can find our score, you can buy anything by adding this item to you basket</h3>
		</div>
			
		<div class="line">
			<span class="w3-xxlarge w3-text-white w3-wide">MULTIFUCTIONAL KNIVES</span>
		</div>
			
		<div class="container1">
			<?php
				$name31 = "Ghostrike Fixed Blade";
				$price31 = 199;
			?>
			<h4> <?php echo $name31 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/e1.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price31 ?> $ <a href="coll3.php?m1=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name32 = "Fixed Knife Black G10";
				$price32 = 150;
			?>
			<h4> <?php echo $name32 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/e2.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price32 ?> $ <a href="coll3.php?m2=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name33 = "Kit Carsons M16  Carry";
				$price33 = 199;
			?>
			<h4> <?php echo $name33 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/e3.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price33 ?> $ <a href="coll3.php?m3=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name34 = "ProTech 721";
				$price34 = 95;
			?>
			<h4> <?php echo $name34 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/e4.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price34 ?> $ <a href="coll3.php?m4=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name35 = "Ghostrike Fixed Blade";
				$price35 = 65;
			?>
			<h4> <?php echo $name35 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/e5.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price35 ?> $ <a href="coll3.php?m5=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name36 = "Ghostrike Fixed Blade";
				$price36 = 30;
			?>
			<h4> <?php echo $name36 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/e6.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price36 ?> $ <a href="coll3.php?m6=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name37 = "Ghostrike Fixed Blade";
				$price37 = 135;
			?>
			<h4> <?php echo $name37 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/e7.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price37 ?> $ <a href="coll3.php?m7=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name38 = "Ghostrike Fixed Blade";
				$price38 = 80;
			?>
			<h4> <?php echo $name38 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/e8.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price38 ?> $ <a href="coll3.php?m8=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
	</body>	
</html>	