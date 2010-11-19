<?php
include('haut.php');
	 
echo	'<div id="corps">';

			if (!empty($_GET['page'])) { 
				$page = $_GET['page'];
			}
			else {
				$page = "defaut";
			}
			
			$pages_disponibles = array("");

			if (in_array($page, $pages_disponibles)) {

				echo '<h1> Bienvenue sur le site du collège Paul Eluard</h1>';
	
			
			}
			else {
				if ($page == "contenu") {
					$id = $_GET['id'];
					if ($id == 1) {
			echo '	<h1>Voyages scolaires</h1>';
					}
					else if ($id == 2) {
					
				echo '	<h1>Conseils de classe et réunions</h1>';
					}
					else if ($id == 3) {
					
				echo '	<h1>Ressources du collège</h1>';
						
					}
					else if ($id == 4) {
						
				echo '	<h1>Clubs et associations</h1>';
					
					}
					else if ($id == 5) {
						
						echo '	<h1>UNSS et compétitions</h1>';
						
					}
					else if ($id == 6) {
					 
					 echo '	<h1>Visite du collège</h1>';
						
					}

				}
				else {
		echo '	
		<h1> Bienvenue sur le site du collège Paul Eluard</h1>
		
		<p>Le collège a été ouvert à la rentrée 1985 avec pour commencer les niveaux 6ème et 5ème. Puis ouverture aux classes de 4ème et de  3ème les deux années suivantes. En 1990 un troisième bâtiment (le C) à été construit pour faire face à l’augmentation de l’effectif qui a atteint plus de 1000 élèves en 1995. L’ouverture d’un cinquième collège à Evry a permis de ramener l’effectif à 350 élèves actuellement.</p>
		<p>Une grande rénovation a eu lieu entre 2007 et 2009 avec l’agrandissement du bâtiment, la modification de certaines salles et l’élargissement des couloirs.</p>
		<h2>News</h2>';

				}
			}

	
	
echo '</div>';

echo '</div>
		<div id="pied_de_page">
			<center><strong><p class="nom_projet"> WIPS\'INT 2010-2011 </p></center></strong>
		</div>

	</body>
</html>';

?>