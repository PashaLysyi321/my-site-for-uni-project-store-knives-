<?php session_start();?>
<?php
				$couter = isset($_COOKIE['couter']) ? $_COOKIE['couter'] : 0 ;
				$couter++;
				setcookie("couter" , $couter);
?>
<!DOCTYPE html ">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/gallery.css" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/slider/style1.css">
		<link rel="stylesheet" href="css/collection.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">	
		<script src = "sweetalert.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<title>Knife</title>
		
	</head>
	<body>	
	<?php 
			$couter = $_GET['couter'];
			if ($couter == 100){
			include "alert.php";
			alert4();
			}
	?>
	<script>
			function mail(){	
				Swal({
					position: 'midle',
					type: 'success',
					title: 'I`m waiting for your message',
					showConfirmButton: false,
					timer: 1500
				})
			}
	</script>
	
	
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
			<span class="w3-display-middle w3-xxlarge w3-text-white w3-wide">AUTHOR</span>
		</div>
		
		<div class="text">
			<h3  colour = "grey">Some information about me</h3>
			<p>I`m a student of the Kiev Polytechnic University, Faculty of Applied Mathematics. I am very interesting person, because I try to develop comprehensively. </em></p>
			<p>I spend my time on:</p>
			<div class="combinator">	
				<ul>
					 <li>study and my homework</li>
					 <li>collecting knives  </li>
				     <li>playing guitar </li>
					 <li>reading books(Some of my favorite):</li>
					 <ul type="circle">
						<li>"Hawking universe"</li>
						<li>"The future is not that before"</li>
						<li>"Hundred Years of Solitude"</li>
					 </ul>
					 <li>making crazy things that suddenly come into my head and my whole world becomes brighter and thirsts to translate this idea into reality</li>
				</ul>
			</div>
		</div>

		<div class="text">
			<h3>Some photo of me</h3>
		</div>	
			
		<div class="all">
			<input checked type="radio" name="respond" id="desktop">
				<div id="slider">
						<input checked type="radio" name="slider" id="switch1">
						<input type="radio" name="slider" id="switch2">
						<input type="radio" name="slider" id="switch3">
						<input type="radio" name="slider" id="switch4">
					<div id="slides">
						<div id="overflow">
							<div class="image">
								<article><img src="css/slider/1.jpg"></article>
								<article><img src="css/slider/2.jpg"></article>
								<article><img src="css/slider/3.jpg"></article>
								<article><img src="css/slider/4.jpg"></article>
							</div>
						</div>
					</div>
					<div id="controls">
						<label for="switch1"></label>
						<label for="switch2"></label>
						<label for="switch3"></label>
						<label for="switch4"></label>
						
					</div>
					<div id="active">
						<label for="switch1"></label>
						<label for="switch2"></label>
						<label for="switch3"></label>
						<label for="switch4"></label>
					</div>
				</div>
		</div>
		
		<div class="text">
		
			<h3> If you want to contact me, write on mail</h3>
			<a href="mailto:lysyi.palos@gmail.com" onclick="mail()" class="w3-button w3-black" >Mail</a>	
			<br></br>
									
			<div style="height:50px;padding:16px;width:100%;background-color: <?php echo $name?>"></div>
			
			<h3> Please leave a comment</h3>
			
			<form action="" method="POST">
				<label> Name: 
					<input type="text" name="Name" class="Input" style="width: 225px" required>
				</label>
				<br><br>
				<label> Comment: <br>
					<textarea name="Comment" class="Input" style="width: 300px" required></textarea>
				</label>
				<br><br>
				<input type="submit" target = "_self" name="Submit" class="w3-button w3-black" value="Submit Comment" class="Submit">
		    </form>
		   
		   
		   <?php
	 
			 if($_POST['Submit']){
				 print "<h1>Your comment has been submitted!</h1>";

				 $Name = $_POST['Name'];
				 $Comment = $_POST['Comment'];

				 $old = fopen("comments.txt", "r+t");
				 $old_comments = fread($old, 1024);
				  
				 $write = fopen("comments.txt", "w+");
				 $string = "<b>#".$Name."</b><br>".$Comment."<br>\n".$old_comments;
				 fwrite($write, $string);
				 fclose($write);
				 fclose($old);
			 }

			 $read = fopen("comments.txt", "r+t");
			 echo "<br><br><h3>Comments<hr></h3>".fread($read, 1024);
			 fclose($read);
			?>
		
		</div>		
	</body>
</html>﻿

		
		
		