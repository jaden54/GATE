<?php
  //include("sqlconnect.php");

  //$code = $_GET['id'];
if (!isset($code)) { $code = $_GET['id']; } //
$q = array();
$i = 0;

connect();
$req = mysql_query(" SELECT * FROM qcm_elemt WHERE code=$code AND type='q' ORDER BY qest ASC ");
while ( $don = mysql_fetch_array($req) ) {
$i++;
$q["$i"] = $don['cont'];
}
disconnect();
echo '<form method="post" action="vqcm.php" name="show">';

for ($j=1;$j<=$i;$j++) {
echo '<br><h3><b>&nbsp; &nbsp; '.$j.')- '.$q["$j"].'</b></h3>';
$h = 0;
connect();
$req1 = mysql_query(" SELECT * FROM qcm_elemt WHERE code=$code AND qest=$j ORDER BY num ASC ");
while ( $done = mysql_fetch_array($req1) ) {
		if( $done['num'] > 0 ) {
		echo '<br><b><font color="navy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="'.$j.'c'.$h.'" value="'.$done['pt'].'" type="checkbox"> &nbsp; '.$done['cont'].'</font></b>';
		}
		$h++;
}
disconnect();

}

echo '<input  type="hidden" value="'.$code.'" name="code" />
	<input  type="hidden" value="'.$i.'" name="qnum" />';

echo '<br><br><input type="submit" value="Valider les réponses!" /><br>
<br><br></form><br><br>';



?>