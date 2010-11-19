<?php
include('conf.php');
$id = intval($_GET['id']);
if ($id != 0) {
	mysql_query('DELETE FROM article WHERE id = '.$id);
	header('Location: '.BASE_URL.'/admin/');
} else {
	echo "ID mal formaté";
}
?>
