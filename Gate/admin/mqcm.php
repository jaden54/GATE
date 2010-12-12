<?php

session_start();

if ( !isset($_SESSION['user']) OR !isset($_SESSION['rang']) ) {
  header('Location : nolog.php');
  exit();
 }


//include("sqlconnect.php");

$code = $_POST['code'];
$nom = $_POST['nom'];
$cible = $_POST['cible'];

if (!empty($nom) && !empty($cible)) {

connect();
//$req1 = "INSERT INTO qcm_list VALUES( NULL,'$code','$nom','$user','$cible','0','0','0','0')";
$req1 = "UPDATE qcm_list SET nom='$nom',cible='$cible' WHERE code=$code";
$res1 = mysql_query($req1);
disconnect();
if ( !$res1 ) {
  echo '<b><font color="red"> Le QCM n\'a pas &eacute;t&eacute; mis &agrave; jour !! </font></b><br>';
  echo '<a href="accueil.php">R&eacute;essayer</a>';
 }

 else {
   echo '<font color="darkgreen">Le QCM a bien &eacute;t&eacute; mis &agrave; jour ! </font><br>';
   echo '<a href="accueil.php">Retourner &agrave; la page pr&eacute;c&eacute;dente</a>';
 }

 }

 else {

   echo "QCM non d&eacute;fini<br>";
   echo '<a href="accueil.php">Retourner &agrave; la page pr&eacute;c&eacute;dente</a>';

 }

?>