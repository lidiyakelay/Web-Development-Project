<?php
  include '../bookdb.php';  
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $numpeople = $_POST["numpeople"];
  $description = $_POST["description"];
  $date = $_POST["date"];
  
 
  $sql = "insert into table_booking (name, phone, numpeople, description, date ) values 
  ('$name', '$phone', '$numpeople', '$description', '$date')";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>