<?php

include("sqlconnect.php");

$code = $_POST['code'];
$chnum = $_POST['chnum'];
$qn = $_POST['qnum']; //addslashes ?

$nv = 0;
$nf = 0;

for ($i=1;$i<=$chnum;$i++){
if (isset($_POST["p$i"])) { $nv++; }
else { $nf++; }
}


echo '<center><br><br><br><h2><b><font color="green"> Etape 3 </font></b></h2></center><br>';

for ($i=1;$i<=$chnum;$i++) {
$c = $_POST["$i"];
if ( isset($_POST["p$i"]) ) { $pt = 1/$nv ; }
else { $pt = 0-1/$nf ; }
connect();
$req2 = "INSERT INTO qcm_elemt VALUES( NULL,'$code','$c','$qn','c','$i','$pt')";
$res2 = mysql_query($req2);
disconnect();

if ( !$res2 ) { echo '<b><font color="red"> Le choix '.$i.' n\'a pas été enregistré !! </font></b><br>'; }

}

echo '<center><b><font color="green"> Les choix ont bien été enregistrés !! </font></b><br><br><br>';

echo '<a href="accueil.php?page=etp1&cd=$code">Revenir au QCM actuel</a><br>';

//echo 'Revenir au QCM actuel <br>';
echo '<a href="accueil.php">Revenir à la liste de vos QCMs <br></a>';
//echo 'Aller à l\'accueil QCM <br>';
echo '<br><br><br></center>';


?>