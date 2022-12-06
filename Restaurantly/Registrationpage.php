<?php

include 'dbcon/bookdb.php';
if(!empty($_SESSION["id"])){
    header("Location: home.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font2.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style2.css"/>
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" >
			<form class="form-detail" action="registration.php" method="post">
				<h2>Registration</h2>
				<div class="form-column-total ">
					<div class="form-row">
						<input type="text" name="fullname" id="fullname" class="input-text" placeholder="Your Name" required>
					</div>
					
					<div class="form-row">
						<input type="text" name="username" id="username" class="input-text" placeholder="Your Username" required >
					</div>
				
					<div class="form-row">
						<input type="text" name="useremail" id="useremail" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
					
				</div>
				<div class="form-column-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="password should be 8-16 character"  pattern="\d{8,16}" required>
					</div>
					
					<div class="form-row">
						<input type="password" name="confirmpassword" id="confirmpassword" class="input-text" placeholder="password should be 8-16 character"  pattern="\d{8,16}" required>
					</div>
					
				</div>
				<div class="form-row-last">
					<input type="submit" name="submit" class="register" value="Register">
				</div>
                <div class="form-row-last">
                <a href="loginpage.php" style="color:#FF0000;">Have an account?</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>