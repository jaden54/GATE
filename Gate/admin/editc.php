<?php
session_start();

if ( !isset($_SESSION['user']) OR !isset($_SESSION['rang']) ) {
header('Location : nolog.php');
exit();
}

//include("sqlconnect.php");

$user=$_SESSION['user'];
$cd = $_GET['cd'];
$qest=$_GET['qest'];


connect();
$req="SELECT * FROM qcm_elemt WHERE code=$cd AND qest=$qest AND type='c' ORDER BY num ASC";
$res = mysql_query($req);
while ($don = mysql_fetch_array($res)) {
  $chnum=$don['num'];
 }
disconnect();

connect();
$req="SELECT * FROM qcm_elemt WHERE code=$cd AND qest=$qest AND type='q'";
$res = mysql_query($req);
$don = mysql_fetch_array($res);
disconnect();

//$code=$_POST['code'];
//<tr><td align="right">Numéro de la question : </td><td><input value="'.$i.'" size="25" name="qtest"></td></tr>


echo '<a href="accueil.php?page=edit&cd='.$cd.'"> Revenir à l\'écran précédent </a>
<br><br><br>
<div id="titre"> Modifier une question </div>
<br>
<h2> Etape 1 </h2>
<form method="post" action="editc2.php" name="etp2"><center>

<table style="border-collapse:collapse;border:0px solid #FFFFFF">
  <tr><td colspan="2"><input type="hidden" value="'.$don['qtest'].'" name="qtest"></td></tr>
  <tr><td align="right">Texte de la question : </td><td><input value="'.$don['cont'].'" size="25" name="cont"></td></tr>
  <tr><td align="right">Nombre de points  : </td><td> <input value="'.$don['pt'].'" size="25" name="pt"></td></tr>
  <tr><td colspan="2"><input type="hidden" name="code" value="'.$cd.'" /></td></tr>
  <tr><td colspan="2"><input type="hidden" name="chnum" value="'.$chnum.'" /></td></tr>
  <tr><td colspan="2"><input type="hidden" name="qest" value="'.$qest.'" /></td></tr>
</table>

<table
style="text-align: left; width:95%; margin-left: auto; margin-right: auto;"
border="2" cellpadding="0" cellspacing="0">
<tbody>';


connect();
$req="SELECT * FROM qcm_elemt WHERE code=$cd AND qest=$qest AND type='c' ORDER BY num ASC";
$res = mysql_query($req);


while ($don = mysql_fetch_array($res)) {

echo '<tr align="center">
<td style="vertical-align: middle; text-align: center;padding:10px">';

 $i=$don['num'];

echo '<br><b><font color="navy">Choix &nbsp; '.$i.'</font></b><br>
<input value="'.$don['cont'].'" size="30" name="'.$i.'"><br>
<b><font color="red"> Cocher la case suivante si c\'est une bonne réponse <br></font></b>';

 if ($don['pt']>0) {
echo '<input type="checkBox" value="" size="20" name="p'.$i.'" checked><br><br>';
 }
 else {
   echo '<input type="checkBox" value="" size="20" name="p'.$i.'"><br><br>';
 }

echo '</td>
</tr>';
}

echo '</tbody>
</table>


 <input type="submit" value="Mettre &agrave; jour" />
<br><br></form>';

//  <div id="titre">Qcm actuel :  </div>';

 





?>