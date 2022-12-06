<?php
include 'dbcon/bookdb.php';
if(isset($_POST["login"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR useremail = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    $hashpassword= $row['password'];
    $verified=password_verify($password,$hashpassword);
    if($verified==true){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.php");
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
?>