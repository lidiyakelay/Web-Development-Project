<?php
  include '../bookdb.php';  
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $numpeople = $_POST["numpeople"];
  $description = $_POST["description"];
  $date = $_POST["date"];
  $userid= $_SESSION['id'];
  
  
 
  $sql = "insert into table_booking (name, phone, numpeople, description, date, userid ) values 
  ('$name', '$phone', '$numpeople', '$description', '$date', '$userid')";
  $conn->query($sql);
  $conn->close();
  header("location: resevation.php");
  
?> 