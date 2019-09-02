<?php session_start();?>	
<head>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="css/gallery.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/collection.css" type="text/css" media="all" />
		<title>Knife</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		
</head>
	<body>	
<?php
	$connect = mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db("phpmyadmin");
	
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$login = $_POST['login'];
		$password = $_POST['password'];
		$r_password = $_POST['r_password'];
	if($password == $r_password){
			$password = md5($password);
			$query = mysql_query("INSERT INTO users VALUES('','$username','$login','$password')") or die(mysql_error());
			include "alert.php";
			alert6();
			
?>
<head><meta http-equiv="refresh" content="2;URL=http://test1.ru/Site/index.php" /></head>
<?php	
		}
		else{
			include "alert.php";
			alert5();
			
		}		
	}
?>

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
	

		<div class="bgimg-4 w3-display-container w3-opacity-min">
			<span class="w3-display-middle w3-xxlarge w3-text-white w3-wide">REGISTRATION</span>
		</div>
		<div class="bgimg-4 w3-display-container w3-opacity-min">
			<span class="w3-display-middle w3-xxlarge w3-text-white w3-wide"></span>
		</div>
		<div class="bgimg-4 w3-display-container w3-opacity-min">
			<span class="w3-display-middle w3-xxlarge w3-text-white w3-wide"></span>
		</div>
		<span class="w3-display-middle w3-xlarge w3-text-white w3-wide ">		
			<form method="post" action="register.php">
				<input type="text"  style="margin:1px" name="username" placeholder="| username" required /><br>
				<input type="text"  style="margin:1px"name="login"  placeholder="| login" required /><br>
				<input type="password"  style="margin:1px"name="password" placeholder="| password" required /><br>
				<input type="password" style="margin:1px" name="r_password" placeholder="| repeat password" required /><br>
				<input type="submit" class="w3-button w3-black" style="margin:1px" name="submit" value="Registration" />
			</form>
		</span>
		
	</body>
</html>﻿