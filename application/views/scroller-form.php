<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main">
		<?php

		echo form_open('transmit');

		echo form_label('Name', 'name') . "<br>";
		echo form_input('name', '') . "<br>";
		echo "<br>";
		echo form_label('Email', 'email') . "<br>";
		echo form_input('email', '') . "<br>";
		echo "<br>";
		echo form_label('Enter Your Request Below', 'request') . "<br>";
		echo form_textarea('request', '') . "<br>";
		echo "<br>";
		echo form_submit('submit', 'Submit');

		echo form_close();

		?>
	</div>
</body>
</html>