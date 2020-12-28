<!-- Q.7) Write a PHP program to display a digital clock which displays the current time of the server. -->

<!DOCTYPE html>
<html>
	<head>
		<!-- Meta refresh is a method of instructing a web browser to automatically refresh the current web page after a given time interval(Here, 1 second), using an HTML meta element with the http-equiv parameter set to "refresh" and a content parameter giving the time interval in seconds. -->
		<meta http-equiv="refresh" content="1">
		<style>
			p {
				color: white;
				font-size: 80px;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}

			body {
				background-color: black;
			}
		</style>
		
		<!-- Get our country's timezone -->
		<?php date_default_timezone_set("Asia/Kolkata"); ?>
		<!-- The PHP date() function is used to format a date and/or a time. -->
		<p> <?php echo date("h:i:s A"); ?> </p>

	</head>
</html>

