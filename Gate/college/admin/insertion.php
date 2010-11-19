<?php include("conf.php"); ?>
<?php
	if ($_POST['corps'] != "") {
		mysql_query('INSERT INTO article (corps) VALUES ("'.$_POST['corps'].'")');
		header('Location: '.BASE_URL.'/admin/');
	}
	else  {
		echo "Un champ est vide";
	}
?>
