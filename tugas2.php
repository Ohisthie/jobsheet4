<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	;
	$text[0]="PHP <b>PERTAMA</b> kali <b>DIBUAT</b> oleh <b>RASMUS</b> Lerdorf <b>PADA</b> tahun <b>1995</b>.";
	$text[1]="Pada <b>WAKTU</b>itu <b>PHP</b> bernama <b>FI</b> (Form <b>INTERPRETED</b>). Pada <b>SAAT</b> tersebut <b>PHP</b>";
	$text[2]="adalah <b>SEKUMPULAN</b> script <b>YANG</b> digunakan <b>UNTUK</b> mengolah <b>DATA</b> form <b>DARI</b> web";
	
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
