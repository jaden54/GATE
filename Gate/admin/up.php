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

if ($code > 1) {

connect();

$req1 = "UPDATE qcm_list SET code=0 WHERE code=$code";
mysql_query($req1);
$req1 = "UPDATE qcm_list SET code=$code WHERE code=$code-1";
mysql_query($req1);
$req1 = "UPDATE qcm_list SET code=$code-1 WHERE code=0";
mysql_query($req1);


$req1 = "UPDATE qcm_elemt SET code=0 WHERE code=$code";
mysql_query($req1);
$req1 = "UPDATE qcm_elemt SET code=$code WHERE code=$code-1";
mysql_query($req1);
$req1 = "UPDATE qcm_elemt SET code=$code-1 WHERE code=0";
mysql_query($req1);

disconnect();

 }


 header('Location: accueil.php');


 }

 else {

   if ($qest > 1) {

     connect();

     $req1 = "UPDATE qcm_elemt SET qest=0 WHERE code=$code AND qest=$qest";
     mysql_query($req1);
     $req1 = "UPDATE qcm_elemt SET qest=$qest WHERE code=$code AND qest=$qest-1";
     mysql_query($req1);
     $req1 = "UPDATE qcm_elemt SET qest=$qest-1 WHERE code=$code AND qest=0";
     mysql_query($req1);

     disconnect();

   }



header("Location: accueil.php?page=edit&cd=$code");


 }

?>