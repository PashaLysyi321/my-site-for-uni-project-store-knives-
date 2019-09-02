<script src = "sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<?php
	function alert(){?>
	<script>
		Swal({
			position: 'midle',
			type: 'success',
			title: 'Your purchase has been successfully processed',
			showConfirmButton: false,
			timer: 1500
		})
	</script>
	<meta http-equiv="refresh" content="2; url=index.php">
	<?php } 


function alert1(){?>
<script>
	Swal({
	  type: 'error',
	  title: 'Oops...',
	  text: 'Your Basket is empty',
	})
</script>
<?php } 

function alert2(){?>
<script>
	Swal({
	  type: 'error',
	  title: 'Oops...',
	  text: 'Firstly you need to registrer',
	})
</script>
<?php } 

function alert3(){?>
<script>
	Swal({
		position: 'midle',
		type: 'success',
		title: 'Your item added to card',
		showConfirmButton: false,
		timer: 1500
	})
</script>
<?php } 

function alert4(){?>
<script>
	Swal('You our 100 visitor, congratulation!!!')
</script>
<?php } 


function alert5(){?>
<script>
	Swal(
	  'Password?',
	  'Password must splitalit',
	  'question'
	)
</script>
<?php } 


function alert6(){?>
<script>
	Swal({
		position: 'midle',
		type: 'success',
		title: 'You are registered!!',
		showConfirmButton: false,
		timer: 1500
	})
</script>
<?php } 


function alert7(){?>
<script>
	Swal({
	  type: 'error',
	  title: 'Oops...',
	  text: 'Wrong login or password',
	})
</script>
<?php } 


function alert8(){?>
<script>
	Swal({
		position: 'midle',
		type: 'success',
		title: 'You are log in!!',
		showConfirmButton: false,
		timer: 1500
	})
</script>
<?php } 

?>