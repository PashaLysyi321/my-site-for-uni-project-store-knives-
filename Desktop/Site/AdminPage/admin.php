<?php session_start();?>	


<html>
	<head>
		<link rel="stylesheet" href="admincss.css" type="text/css" media="all" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">	
		<title>ADMIN</title>
	</head>
	
	<body>
					<a href='../index.php' class="w3-button w3-black" target = "_self">HOME</a> 
					<a href="../index.php#news" class="w3-button w3-black" target = "_self">NEWS</a>		
					<a href="../collection.php" class="w3-button w3-black" target = "_self">COLLECTION</a> 
					<a href="../gallery.php" class="w3-button w3-black" target = "_self">GALLERY</a> 				
					<a href="../author.php?couter=<?php echo $_COOKIE['couter']?>" class="w3-button w3-black" target = "_self">AUTHOR</a> 
					<a href="../login.php" class="w3-button w3-black" target = "_self">LOGIN</a>
					
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="babkiCourse.js"></script>
		
		<div id="frstprgph">
			<p>HI ADMIN, it`s your own page, so you can do what u want, enjoy yourself</p>
		</div>
		
		<?php
			$hour = (int)date("G");
			$min = (int)date("i");
			if($hour >=7&&$hour<=10){
				
			?>
				<div id="frstprgph">
					<?php
						echo "GOOD MOORNING!! <br>";
					?>
				</div>
			<?php
			
			}
			elseif($hour >=11&&$hour<=17){
				?>
				<div id="frstprgph">
					<?php
						echo "HAVE A NICE DAY!! <br>";
					?>
				</div>
				<?php
			}
			elseif($hour >=18&&$hour<=22){
				?>
				<div id="frstprgph">
					<?php
						echo "GOOD EVENING!! <br>";
					?>
				</div>
				<?php
			}
			elseif($hour =23||$hour =24 || $hour>=1&&$hour<=6){
				?>
				<div id="frstprgph">
					<?php
						echo "GOOD NIGHT!! <br>";
					?>
				</div>
				<?php
			}
		?>
			<div id="frstprgph">
				<?php
					echo "Time:$hour:$min ";
				?>
			</div>
			
		
		<br></br>
		
		<div id ="butt">
			<a href="C:\Users\Оксана\Desktop\Site\index.php" class="w3-button w3-black" target = "_self">HOME</a>
		</div>	
		
		<script>
			$(document).on('click', '#buttonfor5ball', function() {
				$.get('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json', function(data) {
					var courseNow = data[27]["rate"];
					document.getElementById("CourseNow").innerHTML = courseNow;
					console.log(courseNow);
				});
			});
		</script>
		
		<br></br>
		
		<div id ="butt">
			<button class="w3-button w3-black" id='buttonfor5ball'>DOLLAR RATE</button>	
		</div>
		
		<div class="w3-black" id="CourseNow"></div> 
		
		<div id="apii">
			<canvas id="myChart"></canvas>
		</div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
	
		<div id="frstprgph">
			<?php
				echo "Peoples, who check in<br>";
			?>
		</div>
		
		<?php
			$link = mysqli_connect('localhost','root','','phpmyadmin');
			$sql = mysqli_query($link, 'SELECT id, username FROM `users`');
		    while ($result = mysqli_fetch_array($sql)) {
				echo "user id: {$result['id']} name: {$result['username']}<br>";
			}
		?>
		
	</body>
</html>