<?php

$cd = $_GET['cd'];
$qest = $_GET['qest'];
$num = $_GET['num'];

if (isset($num)) {
  connect();
  $req = "DELETE from qcm_elemt WHERE code=$cd AND qest=$qest AND num=$num";
  $res = mysql_query($req);
  disconnect();
  if (!$res) { echo 'Erreur, Pas de modifications'; }
  else { echo 'Entr&eacute;e supprim&eacute;e<br>';}


  connect();
  $req = "SELECT * from qcm_elemt WHERE code=$cd AND qest=$qest AND num>$num";
  $res = mysql_query($req);
  while($don = mysql_fetch_array($res)) {
    $i = $don['code'];
    mysql_query("UPDATE qcm_elemt SET num=$i-1 WHERE code=$cd AND qest=$qest AND num=$i");
  }
  disconnect();


  echo '<a href="accueil.php?page=edit&cd='.$cd.'">Revenir &agrave; la page pr&eacute;c&eacute;dente</a>';
 }
 else {
   connect();
   $req = "DELETE from qcm_elemt WHERE code=$cd AND qest=$qest";
   $res = mysql_query($req);
   disconnect();
   if (!$res) { echo 'Erreur, Pas de modifications'; }
   else { echo 'Entr&eacute;e supprim&eacute;e<br>';}
   echo '<a href="accueil.php?page=edit&cd='.$cd.'">Revenir &agrave; la page pr&eacute;c&eacute;dente</a>';

   connect();
   $req = "SELECT * from qcm_elemt WHERE code=$cd AND qest>$qest";
   $res = mysql_query($req);
   while($don = mysql_fetch_array($res)) {
     $i = $don['code'];
     mysql_query("UPDATE qcm_elemt SET qest=$i-1 WHERE code=$cd AND qest=$i");
   }
   disconnect();

 }


?>