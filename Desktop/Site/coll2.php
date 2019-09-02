<?php session_start();?>
<?php
	if (isset($_GET['ch1'])) {
		 if($_SESSION['varname']){
			 ch11();
		 }
	}
	function ch11(){
		$name21 = "Ghostrike Fixed Blade";
		$price21 = 99;
		SetCookie("2/1/1",$name21);
		SetCookie("2/1/2",$price21);
	}

	if (isset($_GET['ch2'])) {
		 if($_SESSION['varname']){
			ch12();
		 }
	} 
	function ch12(){
		$name22 = "Fixed Knife Black G-10";
		$price22 = 99;
		SetCookie("2/2/1",$name22);
		SetCookie("2/2/2",$price22);
	}
	
	if (isset($_GET['ch3'])) {
		 if($_SESSION['varname']){
			 ch13();
		 }
	} 
	function ch13(){
		$name23 = "Kit Carsons M16  Carry";
		$price23 = 75;
		SetCookie("2/3/1",$name23);
		SetCookie("2/3/2",$price23);
	}
	
	if (isset($_GET['ch4'])) {
		 if($_SESSION['varname']){
			 ch14();
		 }
	}
	function ch14(){
		$name24 = "ProTech 721";
		$price24 = 99;
		SetCookie("2/4/1",$name24);
		SetCookie("2/4/2",$price24);
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
		if (isset($_GET['ch1']) or isset($_GET['ch2'])or isset($_GET['ch3'])or isset($_GET['ch4'])){
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
		
		
		<div class="bgimg-8 w3-display-container w3-opacity-min">
			<div class="w3-display-middle">
				<span class="w3-xxlarge w3-text-white w3-wide">COLLECTION</span>
			</div>
		</div>
		
		<div class="text">
			<h3>On this page you can find our score, you can buy anything by adding this item to you basket</h3>
		</div>
			
		<div class="line">
			<span class="w3-xxlarge w3-text-white w3-wide">FOLDING KNIVES</span>
		</div>
	
		<div class="container1">
			<?php
				$name21 = "Ghostrike Fixed Blade";
				$price21 = 99;
			?>
			<h4> <?php echo $name21 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/w1.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price21 ?> $ <a href="coll2.php?ch1=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>

		<div class="container1">
			<?php
				$name22 = "Fixed Knife Black G-10 ";
				$price22 = 99;
			?>
			<h4> <?php echo $name22 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/w2.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price22 ?> $ <a href="coll2.php?ch2=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name23 = "Kit Carsons M16  Carry";
				$price23 = 99;
			?>
			<h4> <?php echo $name23 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/w3.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price23 ?> $ <a href="coll2.php?ch3=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name24 = "Pro-Tech 721";
				$price24 = 99;
			?>
			<h4> <?php echo $name24 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/w4.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price24 ?> $ <a href="coll2.php?ch4=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
	</body>	
</html>	