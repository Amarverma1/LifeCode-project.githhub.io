<?php
  $email = $_POST['email'];

  //datbase connection
  $conn = new mysqli('localhost','root','','registration'); 
  if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into users_registration(email,)values(?)");

    $stmt->bind_param("s",$email);
    $stmt->execute();
    header("Location: /submit.html");
    $stmt-> close();
    $conn-> close();
}

?>