<?php

$name=$_POST['name'];
$nbq=$_POST['nbq'];
$mat=$_POST['mat'];


include("../admin/header.php");

echo '<br><form method="post" action="act1.php" name="form1"><center>';
for ($i=1;$i<=$nbq;$i++) {

echo '<br><b><font color="navy">Question
'.$i.'</font></b>
&nbsp; &nbsp;&nbsp;<br><input
value="Tappez ici le texte de la question '.$i.'"
name="q'.$i.'"><br>';

}

echo '<br><br><input type="submit" value="Send" /><br />
<br><br></center></form>';

include("../admin/footer.php");

?>