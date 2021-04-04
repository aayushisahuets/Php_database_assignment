<?php
	//include 'database_connection.php';
// Handle AJAX request (start)
// if( isset($_POST['ajax']) && isset($_POST['fname']) ){
//  echo $_POST['fname'];
//  exit;
// }
// Handle AJAX request (end)
?>
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
		<form method="post" name="registration"  id="registration" action="">

			<h2 class="pt-4">REGISTRATION FORM</h2>
			<hr class="bg-light">

			<input type="text" name="search" id="search" placeholder="Search Name">
			<input type="button" value="Search" id="search_value"><br>

			<label for="fname"><b>Name</b></label>
			<i class="fas fa-user-circle"></i>
			<input type="text" class="pr-3 mt-3 mx-5" id="fname" name="fname" placeholder="Enter name"><br>
	<!-- 	    <span class="error-msg"><?php echo $nameErr; ?></span><br>
	 -->
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

 	<table class="table table-striped table-hover">
        <thead>
            <tr>
				<th>S.NO.</th>
                <th>NAME</th>
                <th>USERNAME</th>
				<th>EMAIL</th>
            </tr>
        </thead>

		<tbody>
            
			<?php
				include 'database_connection.php';
			
			$sql = "SELECT * FROM employee_data";
  			$result = $conn->query($sql);
        	if (mysqli_num_rows($result) > 0) {
				$i=1;

		while($row = mysqli_fetch_assoc($result)) {

	?>
        		<tr id="<?php echo $row["id"]; ?>">
				<td><?php echo $i; ?></td>
				<td><?php echo $row["fname"]; ?></td>
				<td><?php echo $row["uname"]; ?></td>
				<td><?php echo $row["email"]; ?></td>
			</tr>
			<?php
				$i++;
				}
			}
			?>

		</tbody>
	</table>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="form-validation.js"></script> 
 </body>
</html>