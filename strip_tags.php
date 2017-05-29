<html>
<head>
<title>Mengenal Fungsi String</title>
</head>
<body>
<?php
echo"<b>";
$pesan = "<dive style=\" font-size:70\">Hacked</div>";
echo"$pesan <br>"; //sebelum strip_tags()
echo strip_tags ($pesan) ; //sesudah strip_tags()
echo"</b>";
?>
</body>
</html>
