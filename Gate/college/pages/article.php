<div id="droite">
	<?php
	$req = mysql_query('SELECT id, auteur, corps FROM news WHERE id = "'.$_GET['id'].'" LIMIT 1');
	$data = mysql_fetch_assoc($req);
	echo '<p>De '.$data['auteur'];
	echo "</p>";
	echo $data['corps'];
	echo " <a href=\"actions/supprimer.php?id=".$data['id']."\">(supprimer)</a>";
	?>
</div>
