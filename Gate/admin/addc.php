<?php

$cd = $_GET['cd'];
$qest=$_GET['qest'];

connect();
$req="SELECT COUNT(*) AS num from qcm_elemt WHERE code=$cd AND qest=$qest AND type='c'";
$res = mysql_query($req);
$don = mysql_fetch_array($res);
$num = $don['num'] + 1;
disconnect();

echo '<br><form method="post" action="addc2.php" name="etp2">';
echo '<table
style="text-align: left; width:95%; margin-left: auto; margin-right: auto;"
border="2" cellpadding="0" cellspacing="0">
<tbody>';

echo '<tr align="center">
<td style="vertical-align: middle; text-align: center;padding:10px">';

echo '<br><b><font color="navy">Choix &nbsp; '.$num.'</font></b><br>
<input value="Tapez ici le texte du Choix '.$num.'" size="30" name="cont"><br>
<b><font color="red"> Cocher la case suivante si c\'est une bonne réponse <br></font></b><input type="checkBox" value="" size="20" name="pt"><br><br>';

echo '</td>
</tr>';



echo '</tbody>
</table>';

echo '<input  type="hidden" value="'.$cd.'" name="cd" />
<input  type="hidden" value="'.$num.'" name="num" />
<input  type="hidden" value="'.$qest.'" name="qest" />';
echo '<br><br><input type="submit" value="Etape Suivante" /><br>
<br><br></center></form>';


echo '<a href="accueil.php?page=edit&cd='.$cd.'">Annuler</a><br>'; 


?>
