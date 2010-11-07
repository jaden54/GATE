<?php

echo '<br><form method="post" action="act1.php" name="form1"><center>';
for ($i=1;$i<=20;$i++) {

echo '<br><b><font color="navy">Question
'.$i.'</font></b>
&nbsp; &nbsp;&nbsp;<br><input
value="Tappez ici le texte de la question '.$i.'" size="100"
name="q'.$i.'"><br>';

}



echo '<br><br><input type="submit" value="Send" /><br />
<br><br></center></form>';
?>