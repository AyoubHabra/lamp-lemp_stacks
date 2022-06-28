<html>
    <head><title>OPS TEAM</title></head>
    <body>
	<h1>Pilot</h1>
	<?php
	$dbserver = "localhost";
	$dbuser = "user";
	$dbpassword = "pass";
	echo ("Never expose your passwords !!!");

	$conn = new mysqli($dbserver, $dbuser, $dbpassword);

	if (mysqli_connect_error()) {
	    echo ("Database connection failed: " . mysqli_connect_error());
	} else {
	    echo ("Database connection succeeded.");
	}
	?>
	<?php phpinfo(); ?>
    </body>
</html>         
