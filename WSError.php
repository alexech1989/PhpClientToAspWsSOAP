<html>
  <head>
		<title>.:: Error ::.</title>
	</head>
	<body>
		<?php
			if (isset($_SESSION["ws_message_error"])) {
				echo $_SESSION["ws_message_error"]; 
			}
		?>
	</body>
</html>
