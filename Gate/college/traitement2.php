<?php include('haut.php'); ?>

<div id="corps">
	<p class="reponse">1. Définition de PNB</p>
	<?php
		$total = 0;
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ1'])) {
			if ($_POST['réponseQ1'] == 'r3')  {
				$repOk = 3;
			}
			else {
				$repPasOk = 3;
			}
		}
		else {
			$repPasOk = 3;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">C'est le Produit National Brut qui est l'ensemble des richesses produites par les entreprises d'un pays y compris dans les pays étrangers</strong>
	
	<p class="reponse">2. Définition de population active</p>
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
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">C'est la population qui travaille</strong>
	
	<p class="reponse">3. Qu’est-ce que la croissance économique ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ3'])) {
			if ($_POST['réponseQ3'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>C'est l'augmentation de la population</strong>

	<p class="reponse">4. Comment est la croissance économique dans les pays développés de 1945 à 1973 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ4'])) {
			if ($_POST['réponseQ4'] == 'r1')  {
				$repOk = 4;
			}
			else {
				$repPasOk = 4;
			}
		}
		else {
			$repPasOk = 4;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Une forte augmentation</strong>

	<p class="reponse">5. Comment appelle-t-on  la forte croissance économique de 1945 à 1973 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ5'])) {
			if ($_POST['réponseQ5'] == 'r1')  {
				$repOk = 4;
			}
			else {
				$repPasOk = 4;
			}
		}
		else {
			$repPasOk = 4;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Les Trente Glorieuses</strong>

	<p class="reponse">6. Quelles sont les causes de la forte croissance économique de 1945 à 1973 ? ( 5 cases à cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse61'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse62'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse63'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse64'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse65'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse66'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Les investissements de l’Etat
	<br/>Faible coût de l’énergie
	<br/>L’augmentation de la consommation due au baby-boom, à la hausse des salaires et au développement de la publicité et du crédit
	<br/>L’amélioration du niveau de vie
	<br/>Le développement du commerce mondial grâce aux progrès des transports et à la baisse des droits de douane</strong>
	
	<p class="reponse">7. Que se passe t-il pour la croissance économique après 1973 ?</p>
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
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Il y a un ralentissement de la croissance économique : c’est la crise économique.</strong>
	
	<p class="reponse">8. Quelle est la conséquence sociale du ralentissement de la croissance économique à partir de 1973 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ8'])) {
			if ($_POST['réponseQ8'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Une forte augmentation du chômage de la population active</strong>
	
	<p class="reponse">9. Quelles sont les causes du ralentissement de la croissance économique depuis 1973 dans les pays développés ? (4 cases à cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse91'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse92'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse93'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse94'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse95'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La crise sociale (= augmentation du chômage)
	<br/>L’augmentation du prix du pétrole : 1er choc pétrolier en 1973 et 2ème choc pétrolier en 1979
	<br/>La stagnation ou la baisse de la demande de certains biens de consommation car les ménages sont déjà équipés
	<br/>La concurrence des Nouveaux Pays Industriels (NPI)</strong>

	<p class="reponse">10. Quels sont les secteurs économiques les plus touchés par la crises économique à partir de 1973 dans les pays développés ?</p>
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
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Les industries traditionnelles (sidérurgie, charbon, textile, construction navale)</strong>

	<p class="reponse">11. Quelles sont les industries qui ont connu un développement malgré la crise économique ?</p>
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
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Les industries de haute technologie (biotechnologie, électronique, informatique…)</strong>

	<p class="reponse">12. Quelle est la conséquence de la hausse globale de croissance économique sur le niveau de vie des pays développés depuis 1945 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ12'])) {
			if ($_POST['réponseQ12'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Dégradation du niveau de vie (baisse de la consommation)</strong>
	
	<p class="reponse">13. Quelle est l’évolution de la population active de l’agriculture de 1945 à nos jours dans les pays développés ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ13'])) {
			if ($_POST['réponseQ13'] == 'r2')  {
				$repOk = 5;
			}
			else {
				$repPasOk = 5;
			}
		}
		else {
			$repPasOk = 5;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Une baisse</strong>

	<p class="reponse">14. Quelle est la cause de la baisse des effectifs dans l’agriculture dans les pays  développés depuis 1945 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ14'])) {
			if ($_POST['réponseQ14'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La mécanisation de l'agriculture</strong>

	<p class="reponse">15. Quelle est l’évolution des emplois industriels depuis 1945 dans les pays développés ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ15'])) {
			if ($_POST['réponseQ15'] == 'r4')  {
				$repOk = 4;
			}
			else {
				$repPasOk = 4;
			}
		}
		else {
			$repPasOk = 4;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Une hausse</strong>

	<p class="reponse">16. A quoi est due la baisse des effectifs industriels dans les pays développés depuis 1945 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ16'])) {
			if ($_POST['réponseQ16'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La crise des industries traditionnelles qui avaient besoin de beaucoup de main d’œuvre à la délocalisation des industries dans les pays à faible coût de la main d’œuvre</strong>

	<p class="reponse">17. Quelle est l’évolution des emplois du secteur tertiaire (services, commerce…) depuis 1945 dans les pays développés ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ17'])) {
			if ($_POST['réponseQ17'] == 'r4')  {
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
	<strong class="solutions">
	<br/>Une hausse</strong>

	<p class="reponse">18. A quoi est due la forte augmentation des emplois de services depuis 1945 dans les pays développés ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ18'])) {
			if ($_POST['réponseQ18'] == 'r2')  {
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
	<strong class="solutions">
	<br/>A la hausse du niveau de vie liée à la croissance économique</strong>

	<p class="reponse">19. Quels sont les changements de mode de vie qui apparaissent depuis 1945 dans les pays développés ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse191'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse192'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse193'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse194'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse195'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse196'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Consommation de masse où les produits standardisés remplacent les produits artisanaux
	<br/>Population plus mobile grâce aux nombreux transports rapides
	<br/>Travail des femmes
	<br/>Uniformisation des modes de vie par les médias et la publicité</strong>

	<p class="reponse">20. Quel pays est le modèle de la consommation de masse qui s’impose aux autres pays ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ20'])) {
			if ($_POST['réponseQ20'] == 'r2')  {
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
	<br/><strong class="solutions">Le modèle américain</strong>

	<p class="reponse">21. Que remarque-t-on quant aux changements des pratiques culturelles des pays développés depuis 1945?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse211'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse212'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse213'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse214'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La lecture recule
	<br/>La télévision et la radio deviennent les principaux moyens de diffusion de la culture
	<br/>Le modèle de vie anglo-saxon (musique, vêtements…)</strong>

	<p class="reponse">22. Si globalement, la société connaît une augmentation du niveau de vie depuis 1945, la crise des années 73-90 est responsable de l’apparition d’une nouvelle pauvreté liée au chômage ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ22'])) {
			if ($_POST['réponseQ22'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Vrai</strong>

	<p class="reponse">23. Dans les pays en développement, qui bénéficie de la croissance ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ23'])) {
			if ($_POST['réponseQ23'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Seule une minorité</strong>

	<p class="reponse">24. Le taux de natalité est …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ24'])) {
			if ($_POST['réponseQ24'] == 'r1')  {
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
	<strong class="solutions">
	<br/>Le nombre de naissances en un an pour mille habitants, il est exprimé en ‰</strong>

	<p class="reponse">25. Le taux de mortalité est …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ25'])) {
			if ($_POST['réponseQ25'] == 'r3')  {
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
	<strong class="solutions">
	<br/>Le nombre de décès en un an pour mille habitants, il est exprimé en ‰</strong>

	<p class="reponse">26. Le taux d’accroissement naturel est …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ26'])) {
			if ($_POST['réponseQ26'] == 'r2')  {
				$repOk = 3;
			}
			else {
				$repPasOk = 2;
				$repOk =1;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La différence entre le taux de natalité et le taux de mortalité, on le calcule en faisant taux de natalité moins taux de mortalité</strong>

	<p class="reponse">27. L’accroissement naturel est …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ27'])) {
			if ($_POST['réponseQ27'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La différence entre les naissances et les décès. Si le solde naturel est positif, il y a plus de naissances</strong>

	<p class="reponse">28. Le taux de mortalité infantile est …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ28'])) {
			if ($_POST['réponseQ28'] == 'r1')  {
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
	<strong class="solutions">
	<br/>Le nombre d’enfants morts avant l’âge de 1 an sur mille naissances en un an .Il est exprimé en ‰</strong>

	<p class="reponse">29. L’indice de fécondité est …</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ29'])) {
			if ($_POST['réponseQ29'] == 'r2')  {
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
	<strong class="solutions">
	<br/>Le nombre moyen d’enfants par femme. Il peut être un nombre avec une virgule (ex : 1,7)</strong>

	<p class="reponse">30. Quelles sont les affirmations vraies ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse301'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse302'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse303'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse304'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}

		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Les pays du nord ont un faible accroissement naturel
	<br/>Les pays du sud ont un fort accroissement naturel</strong>

	<p class="reponse">31. Sur quel continent trouve-t-on les plus forts accroissements naturels ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ31'])) {
			if ($_POST['réponseQ31'] == 'r2')  {
				$repOk = 6;
			}
			else {
				$repPasOk = 2;
				$repOk = 4;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 5;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Asie</strong>

	<p class="reponse">32. Comment appelle-t-on la forte natalité de 1945 aux années 1960 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ32'])) {
			if ($_POST['réponseQ32'] == 'r2')  {
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
	<strong class="solutions">
	<br/>Le baby boom</strong>

	<p class="reponse">33. Quelle est la cause du faible accroissement naturel actuel des pays développés ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ33'])) {
			if ($_POST['réponseQ33'] == 'r2')  {
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
	<strong class="solutions">
	<br/>La faible natalité liée à une faible fécondité</strong>

	<p class="reponse">34. Quelles sont les causes principales de la baisse de la natalité et de la faible fécondité dans les pays développés (plusieurs cases à cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse341'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse342'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse343'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse344'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Le travail des femmes
	<br/>Utilisation de la contraception</strong>

	<p class="reponse">35. Quelles sont les causes de la baisse de la mortalité depuis 1950 dans les pays développés ? (2 cases à cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse351'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse352'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse353'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Amélioration du niveau de vie
	<br/>Progrès de la médecine</strong>

	<p class="reponse">36. Quelle est la conséquence de la baisse de la mortalité depuis 1950 dans les pays développés ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ36'])) {
			if ($_POST['réponseQ36'] == 'r3')  {
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
	<strong class="solutions">
	<br/>Allongement de l'espérance de vie.</strong>

	<p class="reponse">37. Dans les pays développés, il y a :</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ37'])) {
			if ($_POST['réponseQ37'] == 'r2')  {
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
	<strong class="solutions">
	<br/>Un vieillissement de la population</strong>

	<p class="reponse">38. Comment appelle-t-on le vieillissement de la population des pays développés ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ38'])) {
			if ($_POST['réponseQ38'] == 'r2')  {
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
	<strong class="solutions">
	<br/>Le papy boom</strong>

	<p class="reponse">39. Pourquoi y a-t-il un vieillissement de la population dans les pays développés ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ39'])) {
			if ($_POST['réponseQ39'] == 'r3')  {
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
	<strong class="solutions">
	<br/>C’est du à l’allongement de l’espérance de vie et à la faible natalité</strong>

	<p class="reponse">40. Quelle affirmation est vraie ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ40'])) {
			if ($_POST['réponseQ40'] == 'r1')  {
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
	<strong class="solutions">
	<br/>Le faible accroissement naturel explique la faible croissance démographique des pays développés</strong>

	<p class="reponse">41. Dans les pays en développement, il y a </p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ41'])) {
			if ($_POST['réponseQ41'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOK = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Une forte croissance démographique</strong>

	<p class="reponse">42. Pourquoi y-t-il une forte croissance démographique dans les pays du Sud ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ42'])) {
			if ($_POST['réponseQ42'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 1;
			$repOK = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>A cause d'un fort accroissement naturel</strong>

	<p class="reponse">43. Pourquoi y a-t-il un fort accroissement naturel dans les pays du Sud ? (plusieurs cases à cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse431'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse432'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse433'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>A cause de la forte natalité
	<br/>A cause de la forte croissance démographique</strong>

	<p class="reponse">44. Pourquoi y a-t-il une forte natalité dans les pays du Sud ? (plusieurs cases à cocher).</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse441'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse442'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse443'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La contraception peu ou mal utilisée
	<br/>Les enfants sont une garantie pour l’avenir et une source de revenus</strong>

	<p class="reponse">45. Pourquoi y a-t-il une baisse de la mortalité depuis 1950 dans les pays du Sud ? (plusieurs cases à cocher).</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse451'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse452'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse453'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Progrès de la médecine
	<br/>Meilleure alimentation</strong>

	<p class="reponse">46. Quelles sont les problèmes que pose la forte croissance démographique des pays en développement ? (plusieurs cases à cocher).</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse461'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse462'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse463'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse464'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Problème de logement
	<br/>Problème de chômage
	<br/>Problème de scolarisation des nombreux jeunes</strong>

	<p class="reponse">47. Dans les pays en développement, il y a…</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ47'])) {
			if ($_POST['réponseQ47'] == 'r2')  {
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
	<strong class="solutions">
	<br/>Une population jeune due à la forte natalité</strong>


</div>
<?php include('bas.php'); ?>