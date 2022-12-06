<?php
include 'dbcon/bookdb.php';
if(!empty($_SESSION["id"])){
  header("Location: home.php");
}
if(isset($_POST["submit"])){
  $fullname = $_POST["fullname"];
  $username = $_POST["username"];
  $useremail = $_POST["useremail"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR useremail = '$useremail'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $hashpassword= password_hash($password, PASSWORD_DEFAULT);
      $query = "insert into tb_user (fullname, username, useremail, password ) values 
      ('$fullname', '$username', '$useremail', '$hashpassword')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>