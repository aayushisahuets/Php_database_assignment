<?php
// Handle AJAX request (start)
if( isset($_POST['ajax']) && isset($_POST['name']) ){
 echo $_POST['name'];
 exit;
}
// Handle AJAX request (end)
?>
<!DOCTYPE html>
<html>
<head>
	<!-- <style>  
		.error {color: #FF0001;}  
	</style>  --> 
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
	<?php 
	include 'form-validation.php';
	?>
<body>
	<div class="text-center">
	<!--<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
-->
	<form method="post" action="registration_database.php">

		<h2 class="pt-4">REGISTRATION FORM</h2>
		<hr class="bg-light">

		<input type="text" name="search" id="search" placeholder="Search Name">
		<input type="button" value="Search" id="search_value"><br>

		<label for="fname"><b>Name</b></label>
		<i class="fas fa-user-circle"></i>
		<input type="text" class="pr-3 mt-3 mx-5" name="fname" placeholder="Enter name"><br>
	    <span class="error-msg"><?php echo $nameErr; ?></span><br>

		<label for="uname"><b>Username</b></label>
		<i class="fas fa-user-circle"></i>
		<input type="text" class="pr-3 mt-3 mx-5" name="uname" placeholder="Enter username"><br>
        <span class="error-msg"><?php echo $unameErr; ?></span><br>

		<label for="email"><b>Email</b></label>
		<i class="fa fa-envelope"></i>
		<input type="text" class="pr-3 mt-3 mx-5" name="email" placeholder="Enter email"><br>
        <span class="error-msg"><?php echo $emailErr; ?></span><br>


		<label for="pwd"><b>Password</b></label>
		<i class="fas fa-lock"></i>
		<input type="password" class="pr-3 mt-3 mx-5" name="pwd" placeholder="Enter password"><br>
        <span class="error-msg"><?php echo $passwrdErr; ?></span><br>


		<label for="cpwd"><b>Conform Password</b></label>
		<i class="fas fa-lock"></i>
		<input type="password" class="pr-3 mt-3 mx-5" name="cpwd" placeholder="Enter conform password"><br>
        <span class="error-msg"><?php echo $cpasswrdErr; ?></span><br>


		<input type="submit" name="submit" value="Register"/>
	</form>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script>
		 jQuery(document).ready(function(){
		   jQuery('#search').keyup(function(){
		     var name =jQuery('#search').val();

		    jQuery.ajax({
		      type: 'post',
		      data: {ajax: 1,name: name},
		      success: function(response){
		      jQuery('#search_value').text('name : ' + response);
		      }
		     });
		    });
		  });
  	</script>

	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
</body>
</html>