<?php
	session_start();
	$user = htmlspecialchars($_SESSION['user']);
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Success</title>
	<link rel="stylesheet" href="styles.css">
	<style>
		body {background-color: #fecea8; display: flex; justify-content: center; align-items: center;}
		p {font-size: 20px; }
		b {color: #e84a5f}
	</style>
</head>
<body>
	<header>
        <h1>NatureConnect</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="about.html">About Us</a>
            <a href="resources.html">Resources</a>
            <a href="login.php">Log In/Sign Up</a>
        </nav>
    </header>
	<p>Congratulations, <b><?php echo $user;?></b>, you have successfully signed up!</p>
</body>
</html>