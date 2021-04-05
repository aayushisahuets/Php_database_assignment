<?php
    include("config.php");
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) {
        $fname =  $_POST['fname'];
        $uname = $_POST['uname'];
        $email =  $_POST['email'];
    }
    // Performing insert query execution
    $sql = "INSERT INTO employee_data  VALUES ('$fname','$uname','$email')";

     if(mysqli_query($conn, $sql)){
         echo "<h3>data stored in a database successfully.</h3>";
      } 
     else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

    //performing select query execution
    $result = mysqli_query($conn,"SELECT * FROM employee_data");
    echo "<table border='1' >
            <tr>
            <td align=center><b>Name</b></td>
            <td align=center><b>Username</b></td>
            <td align=center><b>Email</b></td>";
     while($row = mysqli_fetch_array($result))
    {   
        // $sno=1;
    echo "<tr>";
        echo "<td align=center>$row[0]</td>";
        echo "<td align=center>$row[1]</td>";
        echo "<td align=center>$row[2]</td>";
        
    echo "</tr>";
        // $sno++;
    }
    echo "</table>";

    mysqli_close($conn);
 ?>