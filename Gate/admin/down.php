<?php

session_start();

if ( !isset($_SESSION['user']) OR !isset($_SESSION['rang']) ) {
  header('Location : nolog.php');
  exit();
 }


include("sqlconnect.php");

$code = $_GET['cd'];
$qest = $_GET['qest'];


if (empty($qest)) {

  connect();

  $req1 = "SELECT COUNT(*) AS nb FROM qcm_list";
  $res = mysql_query($req1);
  $don = mysql_fetch_array($res);
  $n = $don['nb'];

  disconnect();



if ($code < $n) {

connect();

$req1 = "UPDATE qcm_list SET code=0 WHERE code=$code";
mysql_query($req1);
$req1 = "UPDATE qcm_list SET code=$code WHERE code=$code+1";
mysql_query($req1);
$req1 = "UPDATE qcm_list SET code=$code+1 WHERE code=0";
mysql_query($req1);


$req1 = "UPDATE qcm_elemt SET code=0 WHERE code=$code";
mysql_query($req1);
$req1 = "UPDATE qcm_elemt SET code=$code WHERE code=$code+1";
mysql_query($req1);
$req1 = "UPDATE qcm_elemt SET code=$code+1 WHERE code=0";
mysql_query($req1);

disconnect();

 }


header('Location: accueil.php');


 }

 else {


   connect();

   $req1 = "SELECT COUNT(*) AS nb FROM qcm_elemt WHERE code=$code AND type='q'";
   $res = mysql_query($req1);
   $don = mysql_fetch_array($res);
   $n = $don['nb'];

   disconnect();


   if ($qest < $n) {

     connect();
     
     $req1 = "UPDATE qcm_elemt SET qest=0 WHERE code=$code AND qest=$qest";
     mysql_query($req1);
     $req1 = "UPDATE qcm_elemt SET qest=$qest WHERE code=$code AND qest=$qest+1";
     mysql_query($req1);
     $req1 = "UPDATE qcm_elemt SET qest=$qest+1 WHERE code=$code AND qest=0";
     mysql_query($req1);
     
     disconnect();

   }



   header("Location: accueil.php?page=edit&cd=$code");


 }

?>