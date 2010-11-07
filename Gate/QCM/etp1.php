<?php

$i = 1;

echo '<center><br><br><h2><b><font color="green"> Etape 1 </font></b></h2></center><br>';
echo '<form method="post" action="etp2.php" name="etp1"><center>';

echo '<b><font color="navy">Question '.$i.'</font></b>
<br><input value="Tappez ici le texte de la question '.$i.'" size="100" name="qtext"><br>
<b><font color="navy">Numéro de la question  :</font></b><br> <input value="code" size="20" name="qnum"><br>
<b><font color="navy">Nombre de points  :</font></b><br> <input value="code" size="20" name="pt"><br>
<b><font color="navy">Code QCM  :</font></b><br> <input value="code" size="20" name="code"><br>
<b><font color="navy">Nombre de Choix  :</font></b><br> <input value="nombre" size="20" name="chnum"><br>';

echo '<br><br><br><input type="submit" value="Etape Suivante" /><br>
<br><br></center></form>';

?>