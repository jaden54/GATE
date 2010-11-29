<?php
session_start();

if ( !isset($_SESSION['user']) ) {
header('Location : nolog.php');
exit();
}

include("sqlconnect.php");

$i = 1;

$toto = $_SESSION['user'];
$time = time();
$toto ="$toto$time";
if ( isset($_Get['cd']) AND isset($_POST['loc']) ) {

	if($_POST['loc'] == "add") {
		$toto = $GET['cd'];
		connect();
		$req = mysql_query("SELECT COUNT(*) AS qn FROM qcm_elm WHERE code='$toto' ");
		$tab = mysql_fetch_array($req);
		$i = $tab['qn'];
		mysql_close();
		$i++;
	}
}

disconnect();

//$code=$toto;

$code=1;

?>




<br>
<div id="titre"> Ajouter un QCM </div>
<br>
<h2> Etape 1 </h2>
<form method="post" action="etp2.php" name="etp1"><center>

<table style="border-collapse:collapse;border:0px solid #FFFFFF">
  <tr><td align="right">Question : </td><td><input value="" size="25" name="qtext"></td></tr>
   <tr><td align="right">Numéro de la question  : </td><td> <input size="25" name="qnum"></td></tr>
  <tr><td align="right">Nombre de points  : </td><td> <input size="25" name="pt"></td></tr>
  <tr><td align="right">Nombre de Choix  : </td><td> <input size="25" name="chnum"></td></tr>
  <tr><td><input type="hidden" value="<?echo $toto; ?>" ></td><td>&nbsp;</td></tr>
  <tr><td colspan="2" align="center"><input type="submit" value="Etape Suivante" /></td></tr>
</table>

<br><br></center></form>

  <div id="titre">Qcm actuel :  </div>

<?

  include("show.php");
?>