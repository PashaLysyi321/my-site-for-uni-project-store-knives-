<?php session_start();?>
<?php					
	if (isset($_GET['check'])) {
		 if($_SESSION['varname']){
			 f11();
		 }
	} 
	function f11(){
		$name11 = "Ghostrike Fixed Blade";
		$price11 = 99;
		SetCookie("1/1/1",$name11);
		SetCookie("1/1/2",$price11);
	}

	if (isset($_GET['check1'])) {
		 if($_SESSION['varname']){
			 f12();
		 }
	}  
	function f12(){
		$name12 = "Fixed Knife Black G-10";
		$price12 = 99;
		SetCookie("1/2/1",$name12);
		SetCookie("1/2/2",$price12);
	}
	
	if (isset($_GET['check2'])) {
		if($_SESSION['varname']){
			 f13();
		 }
	} 
	function f13(){
		$name13 = "Kit Carsons M16  Carry";
		$price13 = 75;
		SetCookie("1/3/1",$name13);
		SetCookie("1/3/2",$price13);
	}
	if (isset($_GET['check3'])) {
		 if($_SESSION['varname']){
			 f14();
		 }
	} 
	function f14(){
		$name14 = "ProTech 721";
		$price14 = 99;
		SetCookie("1/4/1",$name14);
		SetCookie("1/4/2",$price14);
	}
	if (isset($_GET['check4'])) {
		 if($_SESSION['varname']){
			 f15();
		 }
	} 
	function f15(){
		$name15 = "Ghostrike Fixed Blade";
		$price15 = 65;
		SetCookie("1/5/1",$name15);
		SetCookie("1/5/2",$price15);
	}
	
	if (isset($_GET['check5'])) {
		if($_SESSION['varname']){
			 f16();	 
		 }
	} 
	function f16(){
		$name16 = "Ghostrike Fixed Blade";
		$price16 = 30;
		SetCookie("1/6/1",$name16);
		SetCookie("1/6/2",$price16);
	}
	
	if (isset($_GET['check6'])) {
		if($_SESSION['varname']){
			 f17(); 
		 }
	} 
	function f17(){
		$name17 = "Ghostrike Fixed Blade";
		$price17 = 35;
		SetCookie("1/7/1",$name17);
		SetCookie("1/7/2",$price17);
	}
	if (isset($_GET['check7'])) {
		 if($_SESSION['varname']){
			 f18(); 
		 }
	} 
	function f18(){
		$name18 = "Ghostrike Fixed Blade";
		$price18 = 30;
		SetCookie("1/8/1",$name18);
		SetCookie("1/8/2",$price18);
	}
	
	if (isset($_GET['check8'])) {
		 if($_SESSION['varname']){
			 f19();	 
		 }
	} 
	function f19(){
		$name19 = "Ghostrike Fixed Blade";
		$price19 = 45;
		SetCookie("1/9/1",$name19);
		SetCookie("1/9/2",$price19);
	}
?>
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
			if (isset($_GET['check']) or isset($_GET['check1'])or isset($_GET['check2'])or isset($_GET['check3'])or isset($_GET['check4'])or isset($_GET['check5'])or isset($_GET['check6'])or isset($_GET['check7'])or isset($_GET['check8'])or isset($_GET['check9'])) {
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
				
		<div class="bgimg-7 w3-display-container w3-opacity-min">
			<div class="w3-display-middle">
				<span class="w3-xxlarge w3-text-white w3-wide">COLLECTION</span>
			</div>
		</div>
		
		
		<div class="text">
			<h3>On this page you can find our score, you can buy anything by adding this item to you basket</h3>
		</div>
			
		<div class="line">
			<span class="w3-xxlarge w3-text-white w3-wide">KNIVES WITH A FIXED BLADE</span>
		</div>
		
	
		<div class="container1">
			<?php
				$name11 = "Ghostrike Fixed Blade";
				$price11 = 99;
			?>
			<h4> <?php echo $name11 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/q1.jpg" class ="scale"/>  
			<h4>Price: <?php echo $price11 ?> $ <a href="coll1.php?check=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name12 = "Fixed Knife Black G-10";
				$price12 = 99;
			?>
			<h4> <?php echo $name12 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/q2.jpg" class ="scale"/> 
			<h4>Price: <?php echo $price12 ?> $ <a href="coll1.php?check1=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		
		<div class="container1">
			<?php
				$name13 = "Kit Carsons M16  Carry";
				$price13 = 75;
			?>
			<h4> <?php echo $name13 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/q3.jpg" class ="scale"/> 
			<h4>Price: <?php echo $price13 ?> $ <a href="coll1.php?check2=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name14 = "Pro-Tech 721";
				$price14 = 99;
			?>
			<h4> <?php echo $name14 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/q4.jpg" class ="scale"/> 
			<h4>Price: <?php echo $price14 ?> $ <a href="coll1.php?check3=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name15 = "Ghostrike Fixed Blade";
				$price15 = 65;
			?>
			<h4> <?php echo $name15 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/q5.jpg" class ="scale"/> 
			<h4>Price: <?php echo $price15 ?> $ <a href="coll1.php?check4=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name16 = "Ghostrike Fixed Blade";
				$price16 = 30;
			?>
			<h4> <?php echo $name16 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/q6.jpg" class ="scale"/> 
			<h4>Price: <?php echo $price16 ?> $ <a href="coll1.php?check5=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name17 = "Ghostrike Fixed Blade";
				$price17 = 35;
			?>
			<h4> <?php echo $name17 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/q7.jpg" class ="scale"/> 
			<h4>Price: <?php echo $price17 ?> $ <a href="coll1.php?check6=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name18 = "Ghostrike Fixed Blade";
				$price18 = 30;
			?>
			<h4> <?php echo $name18 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/q8.jpg" class ="scale"/> 
			<h4>Price: <?php echo $price18 ?> $ <a href="coll1.php?check7=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
		
		<div class="container1">
			<?php
				$name19 = "Ghostrike Fixed Blade";
				$price19 = 45;
			?>
			<h4> <?php echo $name19 ?> <span class="w3-opacity">available</span></h4>
			<img src="css/images/q9.jpg" class ="scale"/> 
			<h4>Price: <?php echo $price19 ?> $ <a href="coll1.php?check8=true" class="w3-button w3-black" width="60%" >Add to Basket</a></h4>	
		</div>
	</body>	
</html>	