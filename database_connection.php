<?php
    include("config.php");
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ( !isset($_REQUEST['action']) ) {
        die("No operation specified");
    }

    switch ($_REQUEST['action']) {
        case 'store_employee':
            if (isset($_POST['submit'])) {
                $fname =  $_POST['fname'];
                $uname = $_POST['uname'];
                $email =  $_POST['email'];
            // Performing insert query execution
                $sql = "INSERT INTO employee_data  VALUES ('$fname','$uname','$email')";

                 if(mysqli_query($conn, $sql)){
                    header("location: /assignment/Php_database_assignment-main/registration-form.php");
                     // echo "<h3>data stored in a database successfully.</h3>";
                  } 
                 else{
                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 }
            }
          
        break;

        case 'fetch_data':

            if ( isset($_REQUEST['action']) && $_REQUEST['action'] == 'fetch_data' ) {
            //performing select query execution
                $result = mysqli_query( $conn, "SELECT * FROM employee_data" );
                $empTable =  "<table border='1' class='table table-striped'>
                    <tr>
                    <th align=center width=20%><b>Name</b></th>
                    <th align=center width=20%><b>Username</b></th>
                    <th align=center width=30%><b>Email</b></th>";
            while($row = mysqli_fetch_array($result))
            {   
                // $sno=1;
                $empTable .= "<tr>";
                $empTable .= "<th align=center>$row[0]</th>";
                $empTable .= "<th align=center>$row[1]</th>";
                $empTable .= "<th align=center>$row[2]</th>";
                $empTable .= "</tr>";
                // $sno++;
            }
            $empTable .= "</table>";

            $response = array("success" => 1, "empTable" => $empTable);

            echo json_encode($response);        
            }
        break;
        
        default:
            echo "No action performed :";
            break;
    }



    mysqli_close($conn);
 ?>