<!DOCTYPE html>
<html>
  
<head>
    <title>Database Page</title>
</head>
  
<body>
    <center>
        <?php
    // include 'form-validation.php' ;

        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "registration_form";

        // // Create connection
        // $conn = new mysqli($servername, $username, $password, $dbname);
        // // Check connection
        // if ($conn->connect_error) {
        //   die("Connection failed: " . $conn->connect_error);
        // }
        // servername => localhost
        // username => root
        // password => empty
        // database name => registration_form 
        $conn = mysqli_connect("localhost", "root", "", "registration_form");
          
       // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 4 values from the form data(input)
        $name =  $_REQUEST['fname'];
        $uname = $_REQUEST['uname'];
        $email =  $_REQUEST['email'];

     /*   $sql = "SELECT * FROM employee_data";
        $result = $conn->query($sql);
            // var_dump($result);
        if (mysqli_num_rows($result) > 0) {
  // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
         echo "fname: " . $row["Name"]. " - Name: " . $row["Username"]. " " . $row["Email"]. "<br>";
      }
        // if ($result->num_rows > 0) {
        //   // output data of each row
        //   while($row = $result->fetch_assoc()) {
        //     echo "fname: " . $row["fname"]. " - Name: " . $row["uname"]. " " . $row["email"]. "<br>";
        //   }
        } else {
          echo "0 results";
        }
        $conn->close();*/
       
          
        // Performing insert query execution
        // here our table name is employee_data -->
       $sql = "INSERT INTO employee_data  VALUES ('$name','$uname','$email')";

       if(mysqli_query($conn, $sql)){
           echo "<h3>data stored in a database successfully." 
               . " Please browse your localhost php my admin" 
               . " to view the updated data</h3>"; 
  
           echo nl2br("\n$name\n $uname\n "
               . "$email");
       } else{
           echo "ERROR: Hush! Sorry $sql. " 
               . mysqli_error($conn);
       }
          
         mysqli_close($conn);
         ?>
    </center>
</body>
  
</html>