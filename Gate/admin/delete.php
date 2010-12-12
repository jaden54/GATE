<?php

session_start();

if ( !isset($_SESSION['user']) OR !isset($_SESSION['rang']) ) {
  header('Location : nolog.php');
  exit();
 }


//include("sqlconnect.php");

$code = $_GET['cd'];
$ok = $_GET['ok'];

if(!isset($ok)) {
  echo 'Vous &ecirc;tes sur le point de supprimer le QCM : ';
  echo '<br>&Ecirc;tes vous s&ucirc;r ?';
  echo '<a href="accueil.php?page=delete&cd='.$code.'&ok=1">Oui</a>&nbsp;';
  echo '<a href="accueil.php">Non</a>&nbsp;';
}
else {
  if ($ok==1) {
    connect();
//$req1 = "INSERT INTO qcm_list VALUES( NULL,'$code','$nom','$user','$cible','0','0','0','0')";
//DELETE from qcm_elmt WHERE code='admin428909'
    $req1 = "DELETE FROM qcm_list WHERE code=$code";
    $res1 = mysql_query($req1);
    $req1 = "DELETE FROM qcm_elemt WHERE code=$code";
    $res2 = mysql_query($req1);
    disconnect();
    if ( !$res1 || !$res2 ) {
      echo '<b><font color="red"> Le QCM n\'a pas &eacute;t&eacute; supprim&eacute; ! </font></b><br>';
      echo '<a href="accueil.php">R&eacute;essayer</a>';
    }

    else {
      echo '<font color="darkgreen">Le QCM a bien &eacute;t&eacute; supprim&eacute; ! </font><br>';

      //Redécalage des indices
      connect();
      $req = "SELECT * from qcm_list WHERE code>$code";
      $res = mysql_query($req);
      while($don = mysql_fetch_array($res)) {
	$i = $don['code'];
	mysql_query("UPDATE qcm_list SET code=$i-1 WHERE code=$i");
      }
      disconnect();

      echo '<a href="accueil.php">Retourner &agrave; la page pr&eacute;c&eacute;dente</a>';
    }

  }

  else {
    echo '<b><font color="red"> Le QCM n\'a pas &eacute;t&eacute; supprim&eacute; ! </font></b><br>';
    echo '<a href="accueil.php">Retourner &agrave; la page pr&eacute;c&eacute;dente</a>';
  }

 }

?>