<?php

include("sqlconnect.php");

$size = 0;
$out = "";
$i = 0;
$v = 0;

while ($v < 1 ) {
connect();
$result = mysql_query("show table status");
$row = mysql_fetch_array($result);
$size = $row['Data_length'];
disconnect();
	
$size = round(($size/1024)/1024, 1);
$qst = "La crise économique de 1929 touche seulement en 1931 la France et moins profondément ";
connect();
mysql_query ("INSERT INTO test VALUES( NULL,'$qst')");
disconnect();
if ( $size > 1 ) { $v = 2; }
$i++;
}

echo $i ."<br>\n";
echo "Total MySQL db size: $size";
?>