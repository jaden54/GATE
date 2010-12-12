<?php

session_start();

if( !isset($_SESSION['user']) ) {
header('Location  nolog.php');
exit();
}
$code = $_SESSION['user'];

/*
$time1 =time();
$time1 = $time1 - 1291670855;
$code = "$code$time1";
*/

connect();
$req = mysql_query("SELECT COUNT(*) AS nb FROM qcm_list ");
$tab = mysql_fetch_array($req);
$code = $tab['nb']+1;
disconnect();

$nom=$_POST['nom'];
if(isset($nom)) { include('aqcm.php'); }


include("etp0.php");


echo '<div id="titre"> Liste des QCMs </div><br>';

connect();
$req1 = "SELECT * FROM qcm_list ORDER BY code";
$res1 = mysql_query($req1);


echo '<ul>';

while ( $don = mysql_fetch_array($res1) ) {
  echo '<li><p><span id="header">'.$don['nom'].' </span>';
  echo '<a href="accueil.php?page=etp1&cd='.$don['code'].'"><img id="ico" title="Ajouter une question" alt="Ajouter" src="images/icones/add.png" /></a>';
  echo '<a href="accueil.php?page=edit&cd='.$don['code'].'"><img id="ico" title="Afficher" alt="Afficher" src="images/icones/show.png" /></a>';
  echo '<a href="accueil.php?page=etp0&cd='.$don['code'].'"><img id="ico" title="Editer" alt="Editer" src="images/icones/edit.png" /></a>';
  echo '<a href="down.php?cd='.$don['code'].'"><img id="ico" title="Descendre" alt="Descendre" src="images/icones/down.png" /></a>';
  echo '<a href="up.php?cd='.$don['code'].'"><img id="ico" title="Remonter" alt="Remonter" src="images/icones/up.png" /></a>';
  echo '<a href="accueil.php?page=delete&cd='.$don['code'].'"><img id="ico" title="Supprimer" alt="Supprimer" src="images/icones/delete.png" /></a>';
  echo '<a href="accueil.php?page=stats&cd='.$don['code'].'"><img id="ico" title="Statistiques" alt="Statistiques" src="images/icones/stats.png" /></a>';
  echo '<br>auteur : '.$don['auteur'].' / ('.$don['cible'].')</p>';

}

echo '</ul>';

disconnect();

?>
