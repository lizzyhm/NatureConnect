<?php
	session_start();
?>

<!DOCTYPE>
<!-- 
Nature Connect - Basic Website:
	Sarah E.
	Rebeca R.
	Elizabeth H.M.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NatureConnect - Log In/Sign Up</title>
    <style>
		html {background-color: #83af9b;}
		body {font-family: 'Times New Roman', serif; display: flex;	flex-direction: column;	justify-content: center; align-items: center; text-align: center; margin: 0; min-height:100vh; }
		header {background-color: #8A9A5B; padding: 10px 0; color: white;  width: 100%;}
		.header {width: 100%; color: black; background-color: #8A9A5B; text-align: center; padding: 5px; padding-bottom: 20px; box-sizing: border-box; margin-top: 0; }
		nav a {margin: 0 15px; text-decoration: none; }
		.main {background: #D2B48C ; width: 100%; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; flex-grow: 1; }
		.container { display: flex; flex-direction: column; padding: 10px; width: 800px; align-items:center; text-align: center;}
		form {display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%;}
		input {margin: 10px 0; }
		.form-group {display: flex; align-items: center; margin: 10px 0; }
		label {margin-right: 10px; width: 100px; text-align: right;}
		input[type="username"] {width: 150px; }
		input[type="password"] {width: 150px; }
		input[type="submit"] {margin-top: 15px; }
		.footer {width: 100%; color: black; background-color: #8A9A5B; text-align: center; padding: 5px; padding-top: 20px;	box-sizing: border-box; }
		footer {background-color: #8A9A5B; text-align: center; padding: 10px 0; color: white; width: 100%; }
    </style>
</head>
<body>
	<?php
		$user = "";
		$pw = "";
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$user = $_POST['user'];
			if (empty($user)){
				$empname = "Name is required";
			}
			else {
				$_SESSION['user'] = $user;
			}
			$pw1 = $_POST['pw1'];
			
			header("Location: success_login.php");
			exit;
		}
	?>
	<div class="header">
		<?php
			include "header.php";
		?>
	</div>
    <div class="main">
        <h2>Log In</h2>
		<div class="container">
			<form action="login.php" method="POST">
				<div class="form-group">
					<label for="user">Username: </label>
					<input type="username" id="user" name="user" required value="<?php echo htmlspecialchars($user); ?>" />
				</div>
				<div class="form-group">
					<label for="pw">Password: </label>
					<input type="password" id="pw" name="pw" required value="<?php echo $pw; ?>" />
				</div>
				<button type="submit">Log In</button>
			</form>
		</div>
        <a href="signup.php">Need to Sign Up? Click Here!</a>
    </div>
    <div class="footer">
	<?php
		include "footer.php";
	?>
    </div>
</body>
</html>
