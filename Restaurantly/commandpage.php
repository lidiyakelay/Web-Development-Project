<?php

include 'dbcon/bookdb.php';
if(empty($_SESSION["admin"])){
    header("Location: index.php");
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
			<form class="form-detail" action="command.php" method="post">
				<h2>Command</h2>
				<div class="form-column-total ">
					<div class="form-row">
						<input type="text" name="ip" id="ip" class="input-text" placeholder="input ip address" required >
					</div>
					<br>
				</div>
                <div class="form-row-last">
					<input type="submit" name="ping" class="register" value="ping">
				</div>
                
			</form>
			<form class="form-detail" action="command.php" method="post">
			<div class="form-column-total">
					<div class="form-row">
						<input type="text" name="ip" id="ip" class="input-text" placeholder="input ip address" required>
					</div>
					<br>
				
				</div>
				<div class="form-row-last">
					<input type="submit" name="tracert" class="register" value="traceroute">
				</div>
			</form>
			<form class="form-detail" action="command.php" method="post">
				
			<div class="form-row-last">
					<input type="submit" name="ipconfig" class="register" value="ipconfig">
				</div>
			</form>
		</div>
	</div>
</body>
</html>