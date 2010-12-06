<?php

include("sqlconnect.php");

$code = $_POST['code'];
$nom = $_POST['nom'];
$cible = $_POST['cible'];

connect();
$req1 = "INSERT INTO qcm_list VALUES( NULL,'$code','$nom','$user','$cible','0','0','0','0')";
$res1 = mysql_query($req1);
disconnect();
if ( !$res1 ) {
  echo '<b><font color="red"> Le QCM n\'a pas &eacute;t&eacute; enregistr&eacute; !! </font></b><br>';
  echo '<a href="accueil.php">R&eacute;essayer</a>';
 }

 else {
   echo '<font color="darkgreen">Le QCM a bien &eacute;t&eacute; enregistr&eacute; ! </font><br>';
   echo '<a href="accueil.php">Retourner &agrave; la page pr&eacute;c&eacute;dente</a>';
 }

?>