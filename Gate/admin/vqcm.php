<?php
include("sqlconnect.php");
$user = "user";
$code = $_POST['code'];
$i = $_POST['qnum'];
$qpt = array();
$tot = 0;
$ntot = 0;
$rep = "";
$k = 0;
connect();
$req = mysql_query(" SELECT * FROM qcm_elemt WHERE code=$code AND type='q' ORDER BY num ASC ");
while ( $don = mysql_fetch_array($req) ) {
$k++;
$qpt["$k"] = $don['pt'];
$tot = $tot + $don['pt'];
}
disconnect();

for ($j=1;$j<=$i;$j++) {
$sq = 0;
$h = 0;
$p = 0;
connect();
$req1 = mysql_query(" SELECT * FROM qcm_elemt WHERE code=$code AND qest=$j ORDER BY num ASC ");
while ( $done = mysql_fetch_array($req1) ) {
// Possiblité de dépublier une question
		if( $done['num'] > 0 ) {
			if ( isset( $_POST[''.$j.'c'.$h.''] ) ) {
			$sq = $sq + $_POST[''.$j.'c'.$h.''];
			}
		}

		$rep = ''.$rep.''.$j.'c'.$h.',';		
		$h++;
}
disconnect();
$nt = 0;
if ( $sq > 0 ) {
$nt = $sq * $qpt["$j"];
}

$ntot = $ntot + $nt;

}
$rnote = $ntot/$tot;
$note = round( $rnote , 2 );
$n10 = round( 10 * $note , 2 );
$n20 = round( 20 * $note , 2 );

$date = date("d/m/y");
$hdate = date("h:i:s");
$vdate = "$date à $hdate";


connect();
$rq1 = "INSERT INTO qcm_notes VALUES( NULL,'$code','$user','$rep','$note','$vdate','$ntot')";
$rs1 = mysql_query($rq1);
disconnect();
if ( !$rs1 ) {
echo '<b><font color="red"> La réponse n\'a pas été enregistrée !! </font></b><br>';
echo "Réssayer"; 
}
else {
echo '<br><br><br>';
echo '<center><b><font color="green">Réponse bien enregistrée !!</font></b>
<br><br><b><font color="blue">Ta note sur 10 est : '.$n10.' </font></b>
<br><b><font color="blue">Ta note sur 20 est : '.$n20.' </font></b></center>';
}





?>