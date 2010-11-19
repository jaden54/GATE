<?php include('haut.php'); ?>

<div id="corps">
	<p class="reponse">1. Quelle est la situation en URSS après la guerre civile en 1921 ?</p>
	<?php
		$total = 0;
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ1'])) {
			if ($_POST['réponseQ1'] == 'r1')  {
				$repOk = 3;
			}
			else {
				$repPasOk = 2;
				$repOk = 1;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Catastrophique</strong>
	
	<p class="reponse">2. Quelle politique va donc mener Lénine pour permettre le redressement économique de L’ URSS après la guerre civile ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ2'])) {
			if ($_POST['réponseQ2'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">La NEP</strong>
	
	<p class="reponse">3. Qu’est-ce que la NEP ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ3'])) {
			if ($_POST['réponseQ3'] == 'r2')  {
				$repOk = 3;
			}
			else {
				$repPasOk = 2;
				$repOk = 1;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Une nouvelle politique économique qui est un retour partiel au capitalisme</strong>

	<p class="reponse">4. La NEP qui est un retour partiel au capitalisme permet (3 cases à cocher )</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse41'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse42'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse43'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse44'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse45'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>L’existence de petites entreprises industrielles et commerciales privées
	<br/>Aux paysans de vendre leur surplus
	<br/>L’appel aux capitaux étrangers et aux ingénieurs étrangers</strong>
	
	<p class="reponse">5. La NEP permet le redressement économique de l’URSS</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ5'])) {
			if ($_POST['réponseQ5'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Vrai</strong>

	<p class="reponse">6. A la mort de Lénine en 1924, quel homme réussit à s’imposer à la tete de l’URSS ?</p>
	<?php
		$total = 0;
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ6'])) {
			if ($_POST['réponseQ6'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Joseph Staline</strong>
	
	<p class="reponse">7. La collectivisation est ...</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ7'])) {
			if ($_POST['réponseQ7'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">La mise en commun des moyens de production et d’échanges , ce qui entraine la suppression de la propriété privée</strong>
	
	<p class="reponse">8. Staline va collectiviser l’économie soviétique en (2 cases à cocher) ...</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse81'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse82'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse83'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse84'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Faisant la collectivisation des terres agricoles
	<br/>Nationalisant  les entreprises industrielles et commerciales</strong>
	
	<p class="reponse">9. Une nationalisation est le fait …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ9'])) {
			if ($_POST['réponseQ9'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">de supprimer les entreprises privées qui désormais appartiennent à l’Etat</strong>

	<p class="reponse">10. La collectivisation des terres se fait…</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ10'])) {
			if ($_POST['réponseQ10'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">en obligeant les paysans à se regrouper dans de vastes exploitations agricoles collectives : les kholkhozes et les sovkhozes en 1929</strong>

	<p class="reponse">11. Un kholkhoze est …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ11'])) {
			if ($_POST['réponseQ11'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">une exploitation agricole appartenant à un groupe de paysans qui ont mis en commun leurs  terres , leurs outils , leur bétail</strong>

	<p class="reponse">12. Un sovkhoze est…</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ12'])) {
			if ($_POST['réponseQ12'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">une grande ferme qui appartient à l’Etat et qui emploie des salariés qui reçoivent  un salaire qui recoivent  un salaire fixe</strong>
	
	<p class="reponse">13. La collectivisation des terres …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ13'])) {
			if ($_POST['réponseQ13'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">entraine de vives résistances parmi les paysans : certains préférant abattre leur bétail …</strong>

	<p class="reponse">14. Les koulaks sont les paysans …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ14'])) {
			if ($_POST['réponseQ14'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Certains sont fusillés, d’autres sont déportés vers les camps de concentration (les Goulags )</strong>

	<p class="reponse">15. Que fait-on aux koulaks et aux paysans opposés à la collectivisation ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ15'])) {
			if ($_POST['réponseQ15'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Certains sont fusillés, d’autres sont déportés vers les camps de concentration (les Goulags )</strong>

	<p class="reponse">16. La collectivisation des terres est–elle une réussite ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ16'])) {
			if ($_POST['réponseQ16'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Non, car les kolkhozes sont mal équipés et les paysans y travaillent avec peu d’ardeur : c’est pourquoi la production agricole augmente peu pendant les années 1930</strong>

	<p class="reponse">17. Qu’arrive t-il aux entreprises en URSS ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ17'])) {
			if ($_POST['réponseQ17'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Elles sont nationalisées et donc appartiennent à l’Etat</strong>

	<p class="reponse">18. Grace à quoi l’Etat décide de tout en matière économique ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ18'])) {
			if ($_POST['réponseQ18'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Aux nationalisées des entreprises et à la planification</strong>

	<p class="reponse">19. La planification quinquenale en URSS…</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ19'])) {
			if ($_POST['réponseQ19'] == 'r3')  {
				$repOk = 3;
			}
			else {
				$repPasOk = 2;
				$repOk = 1;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">fixe les objectifs économiques à atteindre et les moyens de les atteindre pour 5 ans</strong>

	<p class="reponse">20. Quelle est la priorité économique de la planification ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ20'])) {
			if ($_POST['réponseQ20'] == 'r3')  {
				$repOk = 4;
			}
			else {
				$repPasOk = 2;
				$repOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 3;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">L’industrie et surtout l’industrie lourde (ex : sidérurgie) et l’industrie des biens d’équipement (machines-outils, camions, train …)</strong>

	<p class="reponse">21. Que fait-on pour obtenir de meilleurs rendements des ouvriers (4 cases à cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse211'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse212'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse213'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse214'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse215'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>On utilise la propagande montrant comme un exemple le mineur Stakhanov qui bat des records d’extraction de charbon : c’est le stakhanovisme
	<br/>On impose de longues journées de travail dans les usines
	<br/>On impose une forte discipline et on surveille les ouvriers qui sont obligés d’avoir in livret de travail
	<br/>On rétablit le salaire à la pièce</strong>

	<p class="reponse">22. L’industrialisation accélérée menée dans les années 1930 est une réussite (2 cases à cocher) ...</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse221'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse222'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse223'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse224'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Car de nouvelles régions industrielles son créées dans l’Oural et en Sibérie
	<br/>Car l’U.R.S.S devient la 3ème puissance industrielle mondiale</strong>

	<p class="reponse">23. Au niveau politique, l’ U.R.S.S de Staline est…</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ23'])) {
			if ($_POST['réponseQ23'] == 'r2')  {
				$repOk = 3;
			}
			else {
				$repPasOk = 2;
				$repOk = 1;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Un régime totalitaire</strong>

	<p class="reponse">24. L’U.R.S.S est un régime totalitaire car (5 cases à cocher) ...</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse241'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse242'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse243'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse244'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse245'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse246'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>C’est le contrôle de tous les pouvoirs avec la censure (contrôle de la presse)et l’interdiction des autres partis politiques
	<br/>Car une police politique (guepeou, puis NKVD, puis KGB) surveille chacun…
	<br/>Car Staline et le parti communiste sont présents partout à chaque instant de la vie d’un individu : au travail, à l’école, dans les loisirs, au cinéma…
	<br/>Car on utilise la propagande pour manipuler les esprits et pour les soumettre au communisme et à Staline
	<br/>L’on encadre la population dans les organisations communistes (ex : les jeunesses communistes)</strong>

	<p class="reponse">25. Comment Staline fait-il régner la terreur en URSS (2 cases à cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse251'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse252'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse253'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La police politique (guepeou, puis NKVD, puis KGB) surveille chacun… On se méfie donc de son voisin… de sa famille qui peut vous dénoncer à la police politique !
	<br/>En déportant dans des camps de concentration les opposants ou ceux qui semblent être une menace pour le pouvoir de Staline</strong>

	<p class="reponse">26. Un camp de concentration soviétique est un …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ26'])) {
			if ($_POST['réponseQ26'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Goulag</strong>

	<p class="reponse">27. Un habitant de l’U.R.S.S est …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ27'])) {
			if ($_POST['réponseQ27'] == 'r3')  {
				$repOk = 3;
			}
			else {
				$repPasOk = 2;
				$repOk = 1;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Un soviétique</strong>

	<p class="reponse">28. Durant les années 1936-1938, comment Staline va-t-il éliminer des hommes qui avaient joué un rôle important durant la Révolution d’Octobre 1917 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ28'])) {
			if ($_POST['réponseQ28'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Par des purges : les procès de Moscou</strong>

	<p class="reponse">29. Que se passe-t-il pendant les procès de Moscou de 1936-1938 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ29'])) {
			if ($_POST['réponseQ29'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Les membres importants du parti communiste sont accusés d’avoir trahi le communisme. Bien qu’ils soient pour la plus part innocents, ils sont condamnés à mort ou envoyés en déportation dans les goulags</strong>

	<p class="reponse">30. Les procès de Moscou permettent à Staline d’être le seul maître du parti communiste et donc de l’U.R.S.S</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ30'])) {
			if ($_POST['réponseQ30'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Vrai</strong>

	<p class="reponse">31. Les 3 thèmes principaux de la propagande stalinienne sont (3 cases à cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse311'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse312'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse313'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse314'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse315'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Le patriotisme (= la grandeur de l’U.R.S.S)
	<br/>Le communisme et « les réussites du communisme »
	<br/>La personne de Staline</strong>

	<p class="reponse">32. Qu’est-ce que le culte de la personnalité (ou culte du chef) ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ32'])) {
			if ($_POST['réponseQ32'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">C’est le fait de mettre un homme au dessus des autres hommes… presqu’un dieu</strong>

	<p class="reponse">33. Quelle est la couleur du communisme que l’on retrouve sur le drapeau de l’U.R.S.S (2 cases à cocher) ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ33'])) {
			if ($_POST['réponseQ33'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Le rouge</strong>

	<p class="reponse">34. Quelles sont les deux formes entrelacées sue l’on trouve sur le drapeau de l’U.R.S.S (2 cases à cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse341'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse342'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse343'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La faucille symbolisant les paysans
	<br/>Le marteau symbolisant les ouvriers</strong>

</div>
<?php include('bas.php'); ?>