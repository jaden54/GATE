<?php

include("sqlconnect.php");

$code = $_POST['code'];
$chnum = $_POST['chnum'];
$q = addslashes($_POST['qtext']);
$qn = $_POST['qnum'];
$pt = $_POST['pt'];

echo '<center><br><h2><b><font color="green"> Etape 2 </font></b></h2></center><br>';

connect();
$req1 = "INSERT INTO qcm_elemt VALUES( NULL,'$code','$q','$qn','q','0','$pt')";
$res1 = mysql_query($req1);
disconnect();
if ( !$res1 ) {
echo '<b><font color="red"> La question n\'a pas été enregistré !! </font></b><br>';
echo "Réssayer"; 
}

else {
echo '<center><font color="darkgreen">La question a bien été enregistrée ! Maintenant il reste à saisir les choix de réponse !</font><br>';
}


echo '<br><form method="post" action="../qcm/etp3.php" name="etp2">';
echo '<table
style="text-align: left; width: 750px; margin-left: auto; margin-right: auto;"
border="2" cellpadding="0" cellspacing="0">
<tbody>';
for ($i=1;$i<=$chnum;$i++) {

echo '<tr align="center">
<td style="vertical-align: middle; text-align: center;">';

echo '<br><b><font color="navy">Choix &nbsp; '.$i.'</font></b><br>
<input value="Tappez ici le texte du Choix '.$i.'" size="100" name="'.$i.'"><br>
<b><font color="red"> Cocher la case suivante si c\'est une bonne réponse <br></font></b><input type="checkBox" value="" size="20" name="p'.$i.'"><br><br>';

echo '</td>
</tr>';

}

echo '</tbody>
</table>';

echo '<input  type="hidden" value="'.$code.'" name="code" />
<input  type="hidden" value="'.$chnum.'" name="chnum" />
<input  type="hidden" value="'.$qn.'" name="qnum" />';
echo '<br><br><input type="submit" value="Etape Suivante" /><br>
<br><br></center></form>';


?>
