<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	;
	$text[0]="<u><b>PHP</b></u> pertama kali dibuat oleh <b><i>**Rasmus Lerdorf**</i></b> pada tahun 1995.";
	$text[1]="Pada waktu itu <u><b>PHP</b></u> bernama FI (Form Interpreted). Pada saat tersebut <u><b>PHP</b></u>";
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