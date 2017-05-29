<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
echo"<b>";
	$str="Kampus saya adalah STEKOM";
	echo "$str<br>";
	$ganti = str_replace("Saya", "Kami",$str);
	echo $ganti;
echo"</b>";
?>
</body>
</html>
