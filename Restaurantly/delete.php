<?php
  include 'dbcon/bookdb.php';
  $id = $_GET['id'];
  $sql = "delete from table_booking where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: resevation.php");
?>