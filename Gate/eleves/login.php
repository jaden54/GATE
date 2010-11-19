<?php 
if ( isset($_POST['user']) AND  isset($_POST['password']) AND !empty($_POST['user']) AND !empty($_POST['user'])) {

function ip(){ 
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){ 
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];} 
elseif(isset($_SERVER['HTTP_CLIENT_IP'])){ 
$ip = $_SERVER['HTTP_CLIENT_IP'];} 
else{ $ip = $_SERVER['REMOTE_ADDR'];} 
return $ip;}

$user = $_POST['user'];
$password = $_POST['password'];
mysql_connect("localhost","clg-eluard-evry1","ms8nrdfu");
mysql_select_db("clg-eluard-evry1");
$req1 = mysql_query(" SELECT COUNT(*) AS nombre FROM sp_eleves WHERE user='$user' AND password='$password' "); 
$don1 = mysql_fetch_array($req1);
$nombre = $don1['nombre'];
mysql_close();
if ( $nombre == 1 ) {
        session_start(); 
        $_SESSION['user'] = $user; 
		$lcdate = date("d/m/y");
		$lchtime = date("H:i:s");
		$time = time();
		$ip = ip();
		mysql_connect("localhost","clg-eluard-evry1","ms8nrdfu");
		mysql_select_db("clg-eluard-evry1");
		mysql_query(" INSERT INTO logs_eleves VALUES( NULL , '$user' , '$ip' , '$lcdate' , '$lchtime' , '$time' ) ");
		mysql_close();
        header('Location: accueil.php'); 
        exit(); 
       } 
else { echo '<div id="errPHP">Login incorrect</div>'; include 'index.php';}

}
else { echo '<div id="errPHP">Login incomplet</div>'; include 'index.php';}
?>