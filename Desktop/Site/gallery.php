<?php session_start();?>
<?php $_COOKIE['couter'];?>
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
		
		
		<div class="bgimg-3 w3-display-container w3-opacity-min">
			<div class="w3-display-middle">
				<span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
			</div>
		</div>
		
		<div class="w3-content w3-container w3-padding-64" id="portfolio">
			<h3 class="w3-center" color = "grey">PHOTOS</h3>
			<p class="w3-center"><em>Here you can find the best pictures<br> of cold weapons from different sources</em></p>
			<p class="w3-center"><em>Above this collection amazing photographers worked such as David Barnett, Newton Helmut, <br> Yuri Arkurs, Irwin Penn, Andreas Gursky, Ansel Adams, Sebastian Salgadu, Steve McCarry</em></p><br>		
		</div>
	
	
		<div class="w3-row-padding w3-center">
				<div class="w3-col m3">
				  <img src="css/images/u1.jpg" class="pict" alt="knife">
				</div>

				<div class="w3-col m3">
				  <img src="css/images/u9.jpg" class="pict" alt="knife">
				</div>

				<div class="w3-col m3">
				  <img src="css/images/u10.jpg"class="pict" alt="knife">
				</div>

				<div class="w3-col m3">
				  <img src="css/images/u4.jpg" class="pict" alt="knife">
				</div>
	    </div>

	    <div class="w3-row-padding w3-center w3-section">
				<div class="w3-col m3">
				  <img src="css/images/u5.jpg" class="pict" alt="knife">
				</div>

				<div class="w3-col m3">
				  <img src="css/images/u6.jpg" class="pict" alt="knife">
				</div>

				<div class="w3-col m3">
				  <img src="css/images/u7.jpg" class="pict" alt="knife">
				</div>

				<div class="w3-col m3">
				  <img src="css/images/u8.jpg" class="pict" alt="knife">
				</div>
		</div>
		
		<div class="w3-center">
			<p><em>Thank you for watching</em></p><br>
		</div>
	
	</body>
</html>﻿
	