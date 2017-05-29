<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
echo"<b>";
	$foo = 'hello world!';
	$foo = ucfirst($foo); //Hello World!
	$bar = 'Hello World!';
	$bar = ucfirst($bar); // Hello World!
	$bar = ucfirst(strtolower($bar)); //Hello World!
	echo"$foo <br>$bar";
echo"</br>"
?>
</body>
</html>
