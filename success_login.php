<?php
	session_start();
	$user = htmlspecialchars($_SESSION['user']);
?>
<!DOCTYPE>
<!-- 
Nature Connect - Basic Website:
	Sarah E.
	Rebeca R.
	Elizabeth H.M.
-->
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Success</title>
	<style>
		html {background-color: #8B4513;}
		body {font-family: 'Times New Roman', serif; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; margin: 0; min-height:100vh; }
		.header {width: 100%; color: black; background-color: #8A9A5B; text-align: center; padding: 5px; box-sizing: border-box; margin-top: 0; }
		header {background-color: #8A9A5B; width: 100%;}
		nav a {margin: 0 15px; color: #white;text-decoration: none; }
		.main {background: #D2B48C; width: 100%; box-sizing: border-box; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; flex-grow: 1; }
		p {font-size: 20px; }
		b {color: #e84a5f;}
		.footer {width: 100%; color: black; background-color: #8A9A5B; text-align: center; padding: 5px; padding-top: 20px; box-sizing: border-box; }
		footer {background-color: #8A9A5B; text-align: center; padding: 10px 0; color: white; width: 100%; }	
	</style>
</head>
<body>
	<div class="header">
		<?php
			include "header.php";
		?>
	</div>
	<div class="main">
		<p>Congratulations, <b><?php echo $user; ?></b>, you have successfully logged in!</p>
	</div>
	<div class="footer">
		<?php
			include "footer.php";
		?>
	</div>
</body>
</html>
