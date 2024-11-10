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
		header {background-color: #8A9A5B; padding: 10px 0; color: white; position: fixed; width: 100%;}
		.header {width: 100%; color: black; background-color: #8A9A5B; text-align: center; padding: 5px; box-sizing: border-box; margin-top: 0; }
		nav a {margin: 0 15px; text-decoration: none; }
		.main {background: #D2B48C ; width: 100%; box-sizing: border-box; text-align: center; margin-top: 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; flex-grow: 1; }
		.container { display: flex; flex-direction: column; padding: 10px; width: 800px; align-items:center; text-align: center;}
		form {display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%;}
		input {margin: 10px 0; }
		.form-group {display: flex; align-items: center; margin-right: 50px; margin-top:10px;}
		label {margin-right: 5px; width: 180px; text-align: right;}
		input[type="submit"] {margin-top: 50px; }
		.footer {width: 100%; color: black; background-color: #8A9A5B; text-align: center; padding: 5px; padding-top: 20px;	box-sizing: border-box; }
		footer {background-color: #8A9A5B; text-align: center; padding: 10px 0; color: white; width: 100%; }
		.error {color: #fe4365; font-weight: bold; margin-left: 10px; clear: none; }
	</style>
</head>
<body>
	<?php
		// for the name validation error 
		$empname = "";
		// for the password validation error
		$errpw1 = "";
		// for the re-enter password validation error
		$errpw2 = "";
		$user = "";
		$pw1 = "";
		$pw2 = "";
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$user = $_POST['user'];
			$pw1 = $_POST['pw1'];
			$pw2 = $_POST['pw2'];
			
			if (empty($user)){
				$empname = "Name is required";
			}
			else {
				$_SESSION['user'] = $user;
			}
			
			// validating the new password
			// the php documentation for empty: https://www.php.net/manual/en/function.empty.php
			if (empty($pw1)){
				$errpw1 = "Password is required";
			}
			// the php documentation for preg_match: https://www.php.net/manual/en/function.preg-match.php
			// used w3 school for the php regular expression patterns: https://www.w3schools.com/php/php_regex.asp
			// the preg_match and regex was used for the rest of the validation code
			else if (preg_match("/\s/", $pw1)) {
				$errpw1 = "Password must not contain spaces";
			}
			// the php documentation for strlen: https://www.php.net/manual/en/function.str-contains.php
			else if (strlen($pw1) < 8) {
				$errpw1 = "Password must be at least 8 characters long";
			}
			else if (!preg_match("/[A-Z]/", $pw1)) {
				$errpw1 = "Password must contain a capital letter.";
			}
			else if (!preg_match("/[a-z]/", $pw1)) {
				$errpw1 = "Password must contain a lowercase letter";
			}
			else if (!preg_match("/[0-9]/", $pw1)) {
				$errpw1 = "Password must contain a number";
			}
			else if (strcmp($pw1, $pw2) != 0){
				// error
				$errpw2 = "Passwords do not match";
			}
			else {
				header("Location: success_signup.php");
				exit;
			}
		}
	?>
    <div class="header">
	<?php
		include "header.php";
	?>
    </div>
    <div class="main">
        <h2>Sign Up</h2>
	<div class="container">
        	<form action="signup.php" method="POST">
			<div class="form-group">
				<label for="n">Name: </label>
				<input type="name" id="n" name="n" required />
			</div>
			<div class="form-group">
				<label for="e">Email: </label>
				<input type="email" id="e" name="e" />
			</div>
			<div class="form-group">
				<label for="num">Phone Number: </label>
				<input type="number" id="num" name="num"/>
			</div>
			<div class="form-group">
				<label for="user">Username: </label>
				<input type="username" id="user" name="user" required />
				<label class="error"><?php echo $user?></label>	
            		</div>
			<div class="form-group">
				<label for="pw1">Password: </label>
				<input type="password" id="pw1" name="pw1" required />
				<label class="error"><?php echo $pw1?></label>	
			</div>
			<div class="form-group">
				<label for="pw2">Re-Enter Password: </label>
				<input type="password" id="pw2" name="pw2" required />
				<label class="error"><?php echo $pw2?></label>
            		</div>
			<button type="submit">Sign Up</button>
        	</form>
	</div>
    </div>
     <div class="footer">
	<?php
		include "footer.php";
	?>
    </div>
</body>
</html>
