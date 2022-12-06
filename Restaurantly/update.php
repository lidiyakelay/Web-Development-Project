<?php
  include 'dbcon/bookdb.php';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $numpeople = $_POST["numpeople"];
  $description = $_POST["description"];
  $date = $_POST["date"];
  $sql = "update table_booking set name='$name', phone='$phone', numpeople='$numpeople', description='$description', date='$date' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: resevation.php");
?>