<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
	$foo = 'hello world!';
	$foo = ucwords($foo); //Hello World!
	$bar = 'Hello World!';
	$bar = ucwords($bar); // Hello World!
	$bar = ucwords(strtolower($bar)); //Hello World!
	echo"$foo <br>$bar";
echo"</br>"
?>
</body>
</html>
