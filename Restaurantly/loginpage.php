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
	<title>Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style2.css"/>
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('images/form-v9.jpg')">
			<form class="form-detail" action="login.php" method="post">
				<h2>Login</h2>
				<div class="form-column-total ">
					<div class="form-row">
						<input type="text" name="usernameemail" id="usernameemail" class="input-text" placeholder="Email or Username" required >
					</div>
					<br>
				</div>
				<div class="form-column-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="password should be 8-16 character"  minlength="8" maxlength="16" required>
					</div>
					<br>
				
				</div>
				<div class="form-row-last">
					<input type="submit" name="login" class="register" value="Login">
				</div>
                <div class="form-row-last">
                <a href="Registrationpage.php" style="color:#FF0000;">Don't have an account?</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>