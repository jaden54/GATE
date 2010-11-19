<div id="droite">
	<?php
	$req = mysql_query('SELECT id, corps FROM article ORDER BY id DESC LIMIT 5');
	while ($data = mysql_fetch_assoc($req)) {
		//echo '<p><a href="index.php?page=article&id='.$data['id'].'">Lien vers l\'article</a> ';
		//echo "</p>";
		echo $data['corps'];
		//echo " <a href=\"supprimer.php?id=".$data['id']."\">(supprimer)</a>";
		echo "<hr />";
	}
	?>
</div>
