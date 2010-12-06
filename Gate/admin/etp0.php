<?php

session_start();

if( !isset($_SESSION['user']) ) {
header('Location  nolog.php');
exit();
}
$code = $_SESSION['user'];
$time1 =time();
$time1 = $time1 - 1291670855;
$code = "$code$time1";

include("sqlconnect.php");

$nom=$_POST['nom'];
if(isset($nom)) { include('aqcm.php'); }


echo '<div id="titre"> Ajouter un QCM </div>

<h2> Etape 0 </h2>
<form method="post" action="accueil.php?page=aqcm" name="etp0"><center>

<table style="border-collapse:collapse;border:0px solid #FFFFFF">
    <tr><input type="hidden" value="'.$code.'" size="25" name="code"></td></tr>
    <tr><td align="right">Nom du QCM : </td><td><input value="" size="25" name="nom"></td></tr>
    <tr><td align="right">Classe concern&eacute;e : </td><td> <input size="25" name="cible"></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Etape Suivante" /></td></tr>
</table>

<br><br></center></form>

<div id="titre"> Liste des QCMs </div><br>';

connect();
$req1 = "SELECT * FROM qcm_list";
$res1 = mysql_query($req1);


while ( $don = mysql_fetch_array($res1) ) {
  echo '<br><span id="header">'.$don['nom'].' </span> (<a href="accueil.php?page=etp1&cd='.$don['code'].'">Editer</a>) <br>auteur : '.$don['auteur'].' / ('.$don['cible'].')</p><br>';

}
disconnect();

?>
