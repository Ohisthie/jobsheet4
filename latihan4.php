<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	;
	$text[0]="PHP pertama kali dibuat oleh Rasmus Lerdorf pada tahun 1995.";
	$text[1]="Pada waktu itu PHP bernama FI (Form Interpreted). Pada saat tersebut PHP";
	$text[2]="adalah sekumpulan script yang digunakan untuk mengolah data form dari web";
	
	echo"<b> Menggunakan fungsi str_replace:</b><br>
	".str_replace(" ","",$text[0])."<br>
	".str_replace(" ","",$text[1])."<br>
	".str_replace(" ","",$text[2])."<br>
	
	<br><br> Menggunakan proses perulangan:<br></b>";
	
	for($y=0;$y<=3;$y++)
	{ $x=0;
		while ($x<strlen($text[$y]))
		{
			if(substr($text[$y],$x,1)<>" ")
			{
			echo substr($text[$y],$x,1);
			}
			$x++;
		}
		echo"<br>";
	}
	
?>
</body>
</html>