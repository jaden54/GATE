<?php

$cd = $_GET['cd'];

include("sqlconnect.php");

connect();


$req="UPDATE qcm_list SET auteur='admin' WHERE code=$cd ";
$res = mysql_query($req);

disconnect();

header("Location: accueil.php");


?>