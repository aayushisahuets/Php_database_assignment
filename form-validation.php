<?php  
    include 'registration_database.php' ;

// define variables to empty values  
$nameErr = $unameErr = $emailErr = $passwrdErr = $cpasswrdErr = "";  
$fname = $uname = $email = $pwd = $cpwd = "";  

    //Name validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $name = $_POST['fname'];
        if (empty($_POST["fname"])) {
            $nameErr = "This field is required";
        } 
        else {
            if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }
        }
// }

    //Username Validation 
    if (empty($_POST["uname"])) {  
         $unameErr = "This field is required";  
    } 
    else {  
            $uname = ($_POST["uname"]);  
            if (!preg_match("/^[a-zA-Z0-9_]{8,15}$/",$uname)) {  
                $unameErr = "Username contains alphabets,numbers and underscore.(e.g.-Test_123)";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "This field is required";  
    } 
    else {  
            $email = ($_POST["email"]);  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  

    //Password Validation 
    if (empty($_POST["pwd"])) {  
         $passwrdErr = "This field is required";  
    } 
    else {  
            $pwd = ($_POST["pwd"]);  
            if (!preg_match("/^[a-zA-Z0-9_$!@]{8,15}$/",$pwd)) {  
                $passwrdErr = "Password contains alphabets,numbers and special characters.";  
            }  
    }  

    //Conform Password validation
    if (isset($_POST["pwd"]) === isset($_POST["cpwd"])) {  
         $cpasswrdErr = "Password matches!!";  
    } 
    else{
        $cpasswrdErr = "Password does not match!!";
    }
}

// function ($data) {  
//   $data = trim($data);  
//   $data = stripslashes($data);  
//   $data = htmlspecialchars($data);  
//   return $data;  
// }

?>