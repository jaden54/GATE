<script type="text/javascript" src="javascript/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>

<div id="droite">
	<h3>Insertion</h3>
	<form method="post" action="actions/insertion.php">
		Auteur : <input type="text" name="auteur" /><br />
		Corps : <textarea name="corps"></textarea>
		<input type="submit" value="Envoyer" />	
	</form>
</div>
