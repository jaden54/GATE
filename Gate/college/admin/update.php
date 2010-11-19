<?php include("conf.php"); ?>
<?php
	if ($_POST['corps'] != "") {
		mysql_query('UPDATE article SET corps = ("'.$_POST['corps'].'") WHERE id = "'.$_GET['id'].'"');
		header('Location: '.BASE_URL.'/admin/');
	}
	else  {
		echo "Un champ est vide";
	}
?>
