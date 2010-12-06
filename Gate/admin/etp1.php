<?php
session_start();

if ( !isset($_SESSION['user']) OR !isset($_SESSION['rang']) ) {
header('Location : nolog.php');
exit();
}

include("sqlconnect.php");

if ( isset($cd) ) {
		$toto = $cd;
		$toto = html_entity_decode($toto);
$i = 1;
$user = $_SESSION['user'];
		connect();
		$req = mysql_query("SELECT COUNT(*) AS isok FROM qcm_list WHERE code='$toto' AND auteur='$user' ");
		$tab = mysql_fetch_array($req);
		$ok = $tab['isok'];
		disconnect();
		if ( $ok ) {
					connect();
					$req = mysql_query("SELECT COUNT(*) AS qn FROM qcm_elemt WHERE code='$toto' AND type='q' ");
					$tab = mysql_fetch_array($req);
					$i = $tab['qn'];
					disconnect();		
		
		}
		$i++;



}

$code=$toto;

$code=$_POST['code'];

echo '<a href="accueil.php"> Revenir à l\'écran précédent </a>
<br><br><br>
<div id="titre"> Ajouter une question </div>
<br>
<h2> Etape 1 </h2>
<form method="post" action="accueil.php?page=etp2" name="etp1"><center>

<table style="border-collapse:collapse;border:0px solid #FFFFFF">
  <tr><td align="right">Numéro de la question : </td><td><input value="'.$i.'" size="25" name="qtest"></td></tr>
  <tr><td align="right">Texte de la question : </td><td><input value="" size="25" name="qtext"></td></tr>
  <tr><td align="right">Nombre de points  : </td><td> <input size="25" name="pt"></td></tr>
  <tr><td align="right">Nombre de Choix  : </td><td> <input size="25" name="chnum"></td></tr>
  <tr><td><input type="hidden" name="code" value="'.$cd.'" ></td><td>&nbsp;</td></tr>
  <tr><td colspan="2" align="center"><input type="submit" value="Etape Suivante" /></td></tr>
</table>

<br><br></center></form>

  <div id="titre">Qcm actuel :  </div>';

?>