<?php
include 'dbcon/bookdb.php';
if(isset($_POST["login"])){
  $name = $_POST["name"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_admin");
  if(mysqli_num_rows($result) > 0){

    $result2 = mysqli_query($conn, "SELECT * FROM tb_admin WHERE name = '$name'");
    $row = mysqli_fetch_assoc($result2);
    if(mysqli_num_rows($result2) > 0){
    $hashpassword= $row['password'];
    $verified=password_verify($password,$hashpassword);
    if($verified){
        $_SESSION["login"] = true;
        $_SESSION["admin"] = session_id();
        header("Location: adminpanel.php");
      }
    else{
      echo
      "<script> alert('Wrong Password or username'); </script>";
    }
    }
    else{
        echo
        "<script> alert('User Not Found'); </script>";
      }
    
  }
  else{
    $hashpassword= password_hash($password, PASSWORD_DEFAULT);
    $query = "insert into tb_admin (name, password ) values 
    ('$name','$hashpassword')";
    mysqli_query($conn, $query);
    $_SESSION["login"] = true;
    $_SESSION["admin"] = session_id();
    header("Location: adminpanel.php");
  }
}
?>