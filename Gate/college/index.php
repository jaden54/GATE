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

				echo '<h1> Bienvenue sur le site du coll�ge Paul Eluard</h1>';
	
			
			}
			else {
				if ($page == "contenu") {
					$id = $_GET['id'];
					if ($id == 1) {
			echo '	<h1>Voyages scolaires</h1>';
					}
					else if ($id == 2) {
					
				echo '	<h1>Conseils de classe et r�unions</h1>';
					}
					else if ($id == 3) {
					
				echo '	<h1>Ressources du coll�ge</h1>';
						
					}
					else if ($id == 4) {
						
				echo '	<h1>Clubs et associations</h1>';
					
					}
					else if ($id == 5) {
						
						echo '	<h1>UNSS et comp�titions</h1>';
						
					}
					else if ($id == 6) {
					 
					 echo '	<h1>Visite du coll�ge</h1>';
						
					}

				}
				else {
		echo '	
		<h1> Bienvenue sur le site du coll�ge Paul Eluard</h1>
		
		<p>Le coll�ge a �t� ouvert � la rentr�e 1985 avec pour commencer les niveaux 6�me et 5�me. Puis ouverture aux classes de 4�me et de  3�me les deux ann�es suivantes. En 1990 un troisi�me b�timent (le C) � �t� construit pour faire face � l�augmentation de l�effectif qui a atteint plus de 1000 �l�ves en 1995. L�ouverture d�un cinqui�me coll�ge � Evry a permis de ramener l�effectif � 350 �l�ves actuellement.</p>
		<p>Une grande r�novation a eu lieu entre 2007 et 2009 avec l�agrandissement du b�timent, la modification de certaines salles et l��largissement des couloirs.</p>
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