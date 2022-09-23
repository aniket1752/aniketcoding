<?php
include('dbConnection.php');

$data=file_get_contents("php://input");
$mydata=json_decode($data,true);                //true is for associative array
$name=isset($mydata['name']);  
$email=isset($mydata['email']);
$mob=isset($mydata['mob']);

// echo($name );   
$sql = "INSERT INTO `student`(`name`, `email`, `mobile`) VALUES ('$name','$email','$mob')"; 
$result = $conn->query($sql);
if ($result == TRUE) {  
    echo("Data inserted successfully");
}else{
  echo "Error:". $sql . "<br>". $conn->error;
} 
$conn->close(); 


// if(!empty($name) && !empty($email)&& !empty($mob)){
//     $sql= "INSERT INTO student (name, email,mobile) VALUES (`$name,` `$email`, '$mob') ";

//     if($conn->query($sql) ==TRUE){

//         echo("Record Saved");
//     }
    
//     else("Record is not saved");
     
// }
// else{
//     echo("fill all fields");
// }

?>