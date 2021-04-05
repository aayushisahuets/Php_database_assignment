<!DOCTYPE html>
<html>
<head>
    <style>  
		.error {color: #FF0001;}  
	</style>  
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
	
<body>
	<div class="text-center">
		<form method="post" name="registration"  id="registration" action="database_connection.php">

			<h2 class="pt-4">REGISTRATION FORM</h2>
			<hr class="bg-light">

			<!-- <input type="text" name="search" id="search" placeholder="Search Name"> -->
			<!-- <input type="button" value="Search" id="search_value"><br> -->
			<!-- <button id="showData">Show User Data</button><br> -->

 
			<label for="fname"><b>Name</b></label>
			<i class="fas fa-user-circle"></i>
			<input type="text" class="pr-3 mt-3 mx-5" id="fname" name="fname" placeholder="Enter name"><br>
	        <!-- <span class="error-msg"><?php echo $nameErr; ?></span>-->

			<label for="uname"><b>Username</b></label>
			<i class="fas fa-user-circle"></i>
			<input type="text" class="pr-3 mt-3 mx-5" id="uname" name="uname" placeholder="Enter username"><br>
	        <!-- <span class="error-msg"><?php echo $unameErr; ?></span><br> -->

			<label for="email"><b>Email</b></label>
			<i class="fa fa-envelope"></i>
			<input type="text" class="pr-3 mt-3 mx-5" id="email" name="email" placeholder="Enter email"><br>
	        <!-- <span class="error-msg"><?php echo $emailErr; ?></span><br> -->


			<label for="pwd"><b>Password</b></label>
			<i class="fas fa-lock"></i>
			<input type="password" class="pr-3 mt-3 mx-5" id="pwd" name="pwd" placeholder="Enter password"><br>
	        <!-- <span class="error-msg"><?php echo $passwrdErr; ?></span><br> -->


			<label for="cpwd"><b>Conform Password</b></label>
			<i class="fas fa-lock"></i>
			<input type="password" class="pr-3 mt-3 mx-5" id="cpwd" name="cpwd" placeholder="Enter conform password"><br>
	        <!-- <span class="error-msg"><?php echo $cpasswrdErr; ?></span><br> -->


			<input type="submit" name="submit" id="submit" value="Register"/>
		</form>
 	</div>
    <table border="1" align="center">
       <tr>
           <td> <input type="button" id="showData" value="Display All Data" /> </td>
       </tr>
    </table>
 	<div id="table-container"></div>
 	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="form-validation.js"></script> 
	<script type="text/javascript" src="ajax-script.js"></script> 
 </body>
</html>