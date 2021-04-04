<?php

include("registration_database.php");

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
     // mysqli_close($conn);


// $db=$conn;
// fetch query
// function fetch_data(){
 // global $db;
     mysqli_select_db($conn,"ajax-script.js");
  $sql="SELECT * from employee_data ORDER BY id DESC";
  $result=mysqli_query($conn, $sql);
  // if(mysqli_num_rows($result)>0){
    // $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    // return $row;  
        
  // }else{
    // return $row=[];
  // }
// }
// $fetchData= fetch_data();
// show_data($fetchData);

// function show_data($fetchData){
 echo '<table border="1">
        <tr>
            <th>S.No</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Email</th>
            
        </tr>';
while ($data = mysqli_fetch_array($result)) {
  
 // if(count($fetchData)>0){
      $sn=1;
      // foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$sn."</td>;
          <td>".$data['fname']."</td>;
          <td>".$data['uname']."</td>;
          <td>".$data['email']."</td>;
   </tr>";
       
  $sn++; 
}
// else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
// }
  echo "</table>";
  mysqli_close($conn);
// }

?>