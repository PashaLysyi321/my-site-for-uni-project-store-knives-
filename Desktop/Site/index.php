<?php session_start();?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	
					
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">	
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
		
		<img src="css/images/first.jpg" class="im" alt =""/> 
		<a name="news"></a>
		<div class="container">
			<h3><b> News!</b></h3>
			<h4>New butterfly knife design! <span class="w3-opacity">April 9, 2018</span></h4>
			<p>Balisong, a butterfly knife, is a folding knife with a blade hidden in the folded position in the handle, formed by two longitudinal halves with a U-shaped cross section, pivotally connected to the blade shank.<p>
			<p>Look at this gesign!<p>
			<img src="css/images/news.jpg" class="im"  alt =""/> 
		</div>
		<div class="container">
			<h3><b>News!</b></h3>
			<h4>Butterfly Comb! <span class="w3-opacity">Marth 24, 2018</span></h4>
			<p>Want to give a loved one an original gift? A comb in the form of a knife is an excellent option. This idea is very similar to a folding butterfly knife. The tilting handle of the comb is identical to the handle of the knife.<p>
			<p>Look at this gesign!<p>
			<img id="test" src="css/images/news2.jpg" class = "pic2"  alt =""/> 
		</div>
		<div class="container2">	
			<h3><b>News!</b></h3>
			<h4>Dangerous knife. New work of Andrew Gene! <span class="w3-opacity">June 10, 2018</span></h4>
			<p>These photos are selected from a series of retailer product shots I took on black backgrounds. Each piece was set on a large sheet of plate glass and suspended above a large black, studio background. Lastly the images were retouched in Photoshop.<p>
			<p>Look at this gesign!<p>
			<img src="css/images/news4.jpg" class = "pic3" alt =""/> 
			<img src="css/images/news5.jpg" class = "pic3" alt =""/>
		</div>		
	</body>
</html>﻿