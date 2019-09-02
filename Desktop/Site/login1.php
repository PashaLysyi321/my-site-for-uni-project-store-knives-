<?php session_start();?>	


<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="css/gallery.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/collection.css" type="text/css" media="all" />
	<title>Knife</title>
</head>

<body>
		<?php
			$connect = mysql_connect('localhost','root','') or die(mysql_error());
			mysql_select_db("phpmyadmin");
			
			if(isset($_POST['enter'])){	
				$e_login = $_POST['e_login'];
				$e_password = md5($_POST['e_password']);
				$query = mysql_query("SELECT*FROM users WHERE login = '$e_login'");
				$user_data = mysql_fetch_array($query);
				
				$_SESSION['usname'] = $e_login;
				
				
				if($user_data['password'] == $e_password){
					include "alert.php";
					alert8();
					
					$_SESSION['varname'] = 2;
					if( $e_password == md5(admin) and $e_login == admin){
						?>
							<head><meta http-equiv="refresh" content="2;URL=http://test1.ru/Site/AdminPage/admin.php" /></head>
						<?php
					}
					else{
						?>
							<head><meta http-equiv="refresh" content="2;URL=http://test1.ru/Site/index.php" /></head>
						<?php
					}
				}
				else{
					include "alert.php";
					alert7();
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
				</tr>
			</table>
		</div>
	
		<div class="icon1">
			<div class="bgimg-5 w3-display-container w3-opacity-min">
				<span class="w3-display-middle w3-xlarge w3-text-white w3-wide ">	
					<form method="post" action="login1.php">
						<input type="text"  style="margin:1px"name="e_login"  placeholder="| login" required /><br>
						<input type="password"  style="margin:1px"name="e_password" placeholder="| password" required /><br>
						<input type="submit" class="w3-button w3-black" style="margin:1px" name="enter" value="Enter" />
					</form>	
				</span>	
			</div>
		</div>
		
		<div class="icon1">
			<div class="bgimg-5 w3-display-container w3-opacity-min">	
			</div>
		</div>
		
		<div class="icon1">
			<div class="bgimg-5 w3-display-container w3-opacity-min">	
			</div>
		</div>
	</body>
</html>﻿