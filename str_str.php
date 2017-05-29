<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
	$email='emailmu@yahoo.com';
	$domain = strstr ($email, '@');
	echo $domain."<br>"; //print yahoo.com
	$mail = strstr ($email, 'm');
	echo $mail; //print mailmu@yahoo.com
echo"</b>";
?>
</body>
</html>
