<?php session_start();?>
	
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
		
		<div class="bgimg-2 w3-display-container w3-opacity-min">
			<span class="w3-display-middle w3-xxlarge w3-text-white w3-wide">COLLECTION</span>
		</div>
		
		
		<div class="text">
			<h3>On this page you can find our score, you can buy anything by adding this item to you basket</h3>
		</div>
			
		<div class="line">
			<span class="w3-xxlarge w3-text-white w3-wide">KNIFE</span>
		</div>	

		
		<div class="container1">
			<h4>Knives with a fixed blade <span class="w3-opacity">available</span></h4>
			<p><a href="coll1.php"><img src="css/images/fixed0.jpg" class="im"  alt="Пример"></a></p>
		</div>
		<div class="container1">
			<h4>Folding knives <span class="w3-opacity">available</span></h4>
			<p><a href="coll2.php"><img src="css/images/folding0.jpg" class="im"  alt="Пример"></a></p>
		</div>
		<div class="container1">
			<h4>Multifunctional knives <span class="w3-opacity">available</span></h4>
			<p><a href="coll3.php"><img src="css/images/Multifunctional0.jpg" class="im"  alt="Пример"></a></p>
		</div>
		<div class="container1">
			<h4>Throwing knives <span class="w3-opacity">available</span></h4>
			<p><a href="coll4.php"><img src="css/images/throwing0.jpg" class="im"  alt="Пример"></a></p>
			</div>
		<div class="container1">
			<h4>Self-defense <span class="w3-opacity">available</span></h4>
			<p><a href="coll5.php"><img src="css/images/Self-defense0.jpg" class="im"  alt="Пример"></a></p>
		</div>
	</body>
</html>﻿