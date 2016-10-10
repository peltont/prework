<html>
	<head>
		<title>Completed Prework.</title>
	</head>
	<body>
		<p>I completed the prework.  sorta...</p>
		<?php
		$username ="Trevor Pelton";
		function longdate($timestamp)
		{return date("l F jS T", $timestamp);
		}
		echo longdate(time());
		?>
	</body>
</html>