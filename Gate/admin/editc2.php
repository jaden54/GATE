<?php

 include("sqlconnect.php");
/*
qtest
contq
ptq

contc(num)
     ptc (pi)


*/



$code = $_POST['code'];
$chnum = $_POST['chnum'];
$qn = $_POST['qest']; //addslashes ?
$contq = $_POST['cont'];
$ptq = $_POST['pt'];

connect();
$req = "UPDATE qcm_elemt SET cont='$contq',pt=$ptq WHERE code=$code AND qest=$qn AND type='q'";
//echo $req.'<br>';
$res = mysql_query($req);
disconnect();


$nv = 0;
$nf = 0;

for ($i=1;$i<=$chnum;$i++){
if (isset($_POST["p$i"])) { $nv++; }
else { $nf++; }
}


//echo '<center><br><br><br><h2><b><font color="green"> Etape 3 </font></b></h2></center><br>';

for ($i=1;$i<=$chnum;$i++) {
$c = $_POST["$i"];
if ( isset($_POST["p$i"]) ) { $pt = 1/$nv ; }
else { $pt = 0-1/$nf ; }
connect();
$req2 = "UPDATE qcm_elemt SET cont='$c',pt=$pt WHERE code=$code AND type='c' AND qest=$qn AND num=$i";
// echo $req2.'<br>';
$res2 = mysql_query($req2);
disconnect();

//if ( !$res2 ) { echo '<b><font color="red"> Le choix '.$i.' n\'a pas été enregistré !! </font></b><br>'; }

}
/*
echo '<center><b><font color="green"> Les choix ont bien été enregistrés !! </font></b><br><br><br>';

echo '<a href="accueil.php?page=etp1&cd='.$code.'">Revenir au QCM actuel</a><br>';

//echo 'Revenir au QCM actuel <br>';
echo '<a href="accueil.php">Revenir à la liste de vos QCMs <br></a>';
//echo 'Aller à l\'accueil QCM <br>';
echo '<br><br><br></center>';
*/

header("Location: accueil.php?page=edit&cd=$code");

?>