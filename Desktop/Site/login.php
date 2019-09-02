<?php session_start();?>	
	<head>
		<meta charset="UTF-8">
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
	
		<div class="icon1">
			<div class="bgimg-5 w3-display-container w3-opacity-min">
				<div class="w3-display-middle">
					<a href="login1.php" class="w3-button w3-black w3-xlarge" target = "_self">LOGIN</a>
				</div>
			</div>
		</div>
		
		<div class="icon1">
			<div class="bgimg-5 w3-display-container w3-opacity-min">
				<div class="w3-display-middle">
					<a href="register.php" class="w3-button w3-black w3-xlarge" target = "_self">REGISTRATION</a>
				</div>
			</div>
		</div>
		
		<div class="icon1">
			<div class="bgimg-5 w3-display-container w3-opacity-min">
				<div class="w3-display-middle">
				</div>
			</div>
		</div>
	</body>
</html>﻿