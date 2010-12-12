<?php
  //  include("sqlconnect.php");

echo '<a href="accueil.php">Retourner &agrave; la page pr&eacute;c&eacute;dente</a>';

//$code = $_GET['id'];
if (!isset($code)) { $code = $_GET['cd']; } //
//$q = array();
$i = 0;

connect();
$req = mysql_query(" SELECT * FROM qcm_elemt WHERE code=$code AND type='q' ORDER BY qest ASC ");

//echo $code;

while ( $don = mysql_fetch_array($req) ) {
  $i++;
// $q["$i"] = $don['cont'];
// echo 'coucou2 !';

  $qest = $don['qest'];

echo '<form method="post" action="vqcm.php" name="show"><ul>';



echo '<li><h3><b>&nbsp; &nbsp; '.$don['cont'].'</b>&nbsp;&nbsp;';

 echo '<a href="accueil.php?page=addc&cd='.$code.'&qest='.$qest.'"><img id="ico" title="Ajouter un choix" alt="Ajouter" src="images/icones/add.png" /></a>';
 echo '<a href="accueil.php?page=editc&cd='.$code.'&qest='.$qest.'"><img id="ico" title="Editer" alt="Editer" src="images/icones/edit.png" /></a>';
 echo '<a href="down.php?cd='.$code.'&qest='.$qest.'"><img id="ico" title="Descendre" alt="Descendre" src="images/icones/down.png" /></a>';
 echo '<a href="up.php?cd='.$code.'&qest='.$qest.'"><img id="ico" title="Remonter" alt="Remonter" src="images/icones/up.png" /></a>';
 echo '<a href="accueil.php?page=delc&cd='.$code.'&qest='.$qest.'"><img id="ico" title="Supprimer la question" alt="Supprimer" src="images/icones/delete.png" /></a>';


 echo '</h3>';


$h = 0;
//connect();
$req1 = mysql_query(" SELECT * FROM qcm_elemt WHERE code=$code AND qest=$i ORDER BY num ASC ");
while ( $done = mysql_fetch_array($req1) ) {
  if( $done['num'] > 0 ) { // ?publication 
		  if ( $done['pt'] > 0 ) {
		    echo '<br><b><font color="navy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="liste" name="'.$i.'c'.$h.'" value="'.$done['pt'].'" type="checkbox" checked disabled> &nbsp; '.$done['cont'].'</font></b>';
		  }
		  else {
		    echo '<br><b><font color="navy">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="liste" name="'.$i.'c'.$h.'" value="'.$done['pt'].'" type="checkbox" disabled> &nbsp; '.$done['cont'].'</font></b>';
		  }
		  echo '<a href="accueil.php?page=delc&cd='.$code.'&qest='.$qest.'&num='.$done['num'].'"><img id="ico" title="Supprimer la question" alt="Supprimer" src="images/icones/delete.png" /></a>';
		}
		$h++;
 }
//disconnect();

 echo '</ul>';

 }

disconnect();

echo '<br><br></form><br><br>';



?>