<?php
    include 'registration_database.php' ;
 // Taking all 3 values from the form data(input)
    // if(isset($_POST['fname'])){
    //    $fname = $_POST['fname'];
    //    }

    // if(isset($_POST['uname'])){
    //    $uname = $_POST['uname']; 
    //  }

    // if(isset($_POST['email'])){ 
    //     $email = $_POST['email']; 
    //   }
    $fname =  $_POST['fname'];
    $uname = $_POST['uname'];
    $email =  $_POST['email'];
    
    // Performing insert query execution
     $sql = "INSERT INTO employee_data  VALUES ('$fname','$uname','$email')";

     if(mysqli_query($conn, $sql)){
         echo "<h3>data stored in a database successfully.</h3>";
      } 
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>
    