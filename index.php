<!DOCTYPE html>
<!-- 
Nature Connect :
	Sarah E.
	Rebeca R.
	Elizabeth H.M.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NatureConnect - Home</title>
    <style>
		html {background-color: #83af9b;}
		body {font-family: 'Times New Roman', serif; display: flex;	flex-direction: column;	justify-content: center; align-items: center; text-align: center; margin: 0; min-height:100vh; }
		header {background-color: #8A9A5B; padding: 10px 0; color: white; position: fixed; width: 100%;}
		.header {width: 100%; color: black; background-color: #8A9A5B; text-align: center; padding: 5px; box-sizing: border-box; margin-top: 0; }
		nav a {margin: 0 15px; text-decoration: none; }
		.main {background: #D2B48C ; width: 100%; box-sizing: border-box; text-align: center; margin-top: 15px; display: flex; flex-direction: column; align-items: center; justify-content: center; flex-grow: 1; }
		.footer {width: 100%; color: black; background-color: #8A9A5B; text-align: center; padding: 5px; padding-top: 20px;	box-sizing: border-box; }
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
        <h2>Welcome to NatureConnect</h2>
        <p>Your gateway to connecting with the natural world. Join us in exploring the beauty of nature and finding ways to protect our environment.</p>
    </div>
     <div class="footer">
	<?php
		include "footer.php";
	?>
    </div>
</body>
</html>
