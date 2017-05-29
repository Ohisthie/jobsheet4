<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
	;
	$text[0]="PHP(3) pertama(7) kali(4) dibuat(6) oleh(4) Rasmus(6) Lerdorf(7) pada(4) tahun(5) 1995(5).";
	$text[1]="Pada(4) waktu(5) itu(3) PHP(3) bernama(7) FI(2) (Form(5) Interpreted)(3). Pada(4) saat(4) tersebut(8) PHP(3)";
	$text[2]="adalah(6) sekumpulan(10) script(6) yang(4) digunakan(9) untuk(5) mengolah(8) data(4) form(4) dari(4) web(3)";
	
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