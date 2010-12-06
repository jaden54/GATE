<?php 
session_start();

if (!isset($_SESSION['user'])) { 

   header ('Location: index.php'); 

   exit();  

}

$user = $_SESSION['user'];

$nom = 0;
$pnom = 0;
$sx = 0;
$bd = 0;
$clss = 0;
$ptel = 0;
$mail = 0;
$tel = 0;

echo '<html>
<head>
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<title>::: Le Coin Des Elèves Du Collège Paul Eluard :::</title>
</head>
<body style="color: rgb(0, 0, 0); background-color: rgb(59, 72, 73);"
alink="#000099" link="#000099" vlink="#990099">
<br>
<br>
<br>
<table
style="text-align: left; width: 636px; background-color: white; height: 500px; margin-left: auto; margin-right: auto;"
border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr background="images/title.jpg">
<td colspan="3" rowspan="1"
style="vertical-align: top; height: 87px;"><big><big><span
style="font-family: Comic Sans MS;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
&nbsp;&nbsp; <span style="color: white;">Collège Paul Eluard d\'Evry</span></span></big></big><br>
</td>
</tr>
<tr>
<td style="vertical-align: top; width: 2px;"><br>
</td>
<td style="vertical-align: top; height: 3px;"
background="images/menu-bg.PNG"><br>
</td>
<td style="vertical-align: top; width: 2px;"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top;">
<table
style="text-align: left; width: 624px; margin-left: auto; margin-right: auto; height: 319px;"
border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td colspan="1" rowspan="3" style="vertical-align: top;"><span
style="font-family: Times New Roman,Times,serif; font-weight: bold;"><br>
</span><br>
<span
style="font-family: Times New Roman,Times,serif; font-weight: bold;"></span>
<div style="text-align: center;"><span
style="font-family: Times New Roman,Times,serif; font-weight: bold; color: rgb(44, 97, 169);">Connexion
réussie !!</span><br>
<span style="font-weight: bold;"></span></div>
<br>
&nbsp;&nbsp;&nbsp;&nbsp; <span
style="text-decoration: underline; color: rgb(0, 102, 0);">Profile de
l\'élève :</span><br style="text-decoration: underline;">
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span
style="color: rgb(69, 86, 102); text-decoration: underline;">Informations
d\'identités :</span><br>
<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; -&nbsp; Nom&nbsp; :
&nbsp; <span style="color: rgb(204, 0, 0);">'.$nom.'</span><br>
&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-&nbsp; Prénom&nbsp; : &nbsp; <span style="color: rgb(204, 0, 0);">'.$pnom.'</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-&nbsp; Titre :&nbsp; <span style="color: rgb(204, 0, 0);">'.$sx.'</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-&nbsp; Date de naissance : <span style="color: rgb(204, 0, 0);">'.$bd.'</span><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span
style="color: rgb(69, 86, 102); text-decoration: underline;">Classe :</span><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
- Classe :&nbsp; <span style="color: rgb(204, 0, 0);">'.$clss.'</span><br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span
style="color: rgb(69, 86, 102); text-decoration: underline;">Contact :</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-&nbsp; Portable :&nbsp; <span style="color: rgb(204, 0, 0);">'.$ptel.'</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-&nbsp; Mail :&nbsp; <span style="color: rgb(0, 0, 102);">'.$mail.'</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-&nbsp; Tél fixe : <span style="color: rgb(51, 102, 102);">'.$tel.'</span><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</td>
<td style="vertical-align: top; width: 2px; height: 20px;"><br>
</td>
<td colspan="1" rowspan="2"
style="vertical-align: top; text-align: center; height: 150px; width: 190px;"><br>
<table
style="text-align: left; width: 180px; height: 60px; margin-left: auto; margin-right: auto;"
border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 160px; height: 60px; background-color: rgb(213, 209, 225); text-align: center;"><big
style="color: rgb(77, 67, 102);">'.$user.'</big><br>
<a href="deconnexion.php"><small>Déconnexion</small></a></td>
</tr>
</tbody>
</table>
<br>
<big><span style="font-family: Comic Sans MS;"><span
style="color: rgb(204, 0, 0);">M</span><span
style="color: rgb(102, 51, 102);">E</span><span
style="color: rgb(71, 142, 142);">N</span><span
style="color: rgb(0, 0, 102);">U</span></span></big><br>
<br>
<table
style="text-align: left; width: 120px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 120px; text-align: center; background-color: rgb(255, 214, 254);"><a
href="accueil.php"><span style="text-decoration: underline;">Accueil</span></a><br>
</td>
</tr>
</tbody>
</table>
<br>
<table
style="text-align: left; width: 120px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 120px; text-align: center; background-color: rgb(255, 214, 254);"><a
href="profile.php"><span style="text-decoration: underline;">Profile</span></a><br>
</td>
</tr>
</tbody>
</table>
<br>
<table
style="text-align: left; width: 120px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 120px; text-align: center; background-color: rgb(255, 214, 254);"><a
href="devoirs.php"><span style="text-decoration: underline;">Devoirs</span></a><br>
</td>
</tr>
</tbody>
</table>
<br>
<table
style="text-align: left; width: 120px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 120px; text-align: center; background-color: rgb(255, 214, 254);"><a
href="cours.php"><span style="text-decoration: underline;">Cours</span></a><br>
</td>
</tr>
</tbody>
</table>
<br>
<table
style="text-align: left; width: 120px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 120px; text-align: center; background-color: rgb(255, 214, 254);"><a
href="agenda.php"><span style="text-decoration: underline;">Agenda</span></a><br>
</td>
</tr>
</tbody>
</table>
<br>
<table
style="text-align: left; width: 120px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 120px; text-align: center; background-color: rgb(255, 214, 254);"><a
href="scolarite.php"><span style="text-decoration: underline;">Scolarité</span></a><br>
</td>
</tr>
</tbody>
</table>
<br>
<table
style="text-align: left; width: 120px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 120px; text-align: center; background-color: rgb(255, 214, 254);"><a
href="forum.php"><span style="text-decoration: underline;">Forum</span></a><br>
</td>
</tr>
</tbody>
</table>
<br>
<table
style="text-align: left; width: 120px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 120px; text-align: center; background-color: rgb(255, 214, 254);"><a
href="messagerie.php"><span style="text-decoration: underline;">Messagerie</span></a><br>
</td>
</tr>
</tbody>
</table>
<br>
<table
style="text-align: left; width: 120px; margin-left: auto; margin-right: auto;"
border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td
style="vertical-align: middle; width: 120px; text-align: center; background-color: rgb(255, 214, 254);"><a
href="liens.php"><span style="text-decoration: underline;">Liens</span></a><br>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td colspan="1" rowspan="1"
style="vertical-align: top; background-color: rgb(213, 209, 225);"><br>
<br>
</td>
</tr>
<tr>
</tr>
</tbody>
</table>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
<tr>
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top; height: 40px;"
background="images/footln.PNG"><br>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
<tr background="images/foot.PNG">
<td style="vertical-align: top;"><br>
</td>
<td style="vertical-align: top; height: 30px; text-align: center;"><small>©&nbsp;
Copyright&nbsp; Collège Paul&nbsp; Eluard&nbsp; tous les droits réservés</small><br>
</td>
<td style="vertical-align: top;"><br>
</td>
</tr>
</tbody>
</table>
<br>
<br>
</body>
</html>';

?>
