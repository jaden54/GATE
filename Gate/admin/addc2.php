<?php

$cont = $_POST['cont'];
$pt = $_POST['pt'];
$cd = $_POST['cd'];
$qest = $_POST['qest'];
$num = $_POST['num'];

include("sqlconnect.php");

if ( isset($_POST['pt']) ) {$pt = 1; }

connect();
$req = "INSERT INTO qcm_elemt VALUES( NULL,'$cd','$cont','$qest','c','$num','$pt')";
$res = mysql_query($req);
disconnect();

//update coeff

header("Location: accueil.php?page=edit&cd=$cd");

?>