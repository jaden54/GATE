<?php include('haut.php'); ?>

<div id="corps">
	<p class="reponse">1. D�finition de PNB</p>
	<?php
		$total = 0;
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ1'])) {
			if ($_POST['r�ponseQ1'] == 'r3')  {
				$repOk = 3;
			}
			else {
				$repPasOk = 3;
			}
		}
		else {
			$repPasOk = 3;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">C'est le Produit National Brut qui est l'ensemble des richesses produites par les entreprises d'un pays y compris dans les pays �trangers</strong>
	
	<p class="reponse">2. D�finition de population active</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ2'])) {
			if ($_POST['r�ponseQ2'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">C'est la population qui travaille</strong>
	
	<p class="reponse">3. Qu�est-ce que la croissance �conomique ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ3'])) {
			if ($_POST['r�ponseQ3'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>C'est l'augmentation de la population</strong>

	<p class="reponse">4. Comment est la croissance �conomique dans les pays d�velopp�s de 1945 � 1973 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ4'])) {
			if ($_POST['r�ponseQ4'] == 'r1')  {
				$repOk = 4;
			}
			else {
				$repPasOk = 4;
			}
		}
		else {
			$repPasOk = 4;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Une forte augmentation</strong>

	<p class="reponse">5. Comment appelle-t-on  la forte croissance �conomique de 1945 � 1973 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ5'])) {
			if ($_POST['r�ponseQ5'] == 'r1')  {
				$repOk = 4;
			}
			else {
				$repPasOk = 4;
			}
		}
		else {
			$repPasOk = 4;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Les Trente Glorieuses</strong>

	<p class="reponse">6. Quelles sont les causes de la forte croissance �conomique de 1945 � 1973 ? ( 5 cases � cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse61'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse62'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse63'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse64'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse65'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse66'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Les investissements de l�Etat
	<br/>Faible co�t de l��nergie
	<br/>L�augmentation de la consommation due au baby-boom, � la hausse des salaires et au d�veloppement de la publicit� et du cr�dit
	<br/>L�am�lioration du niveau de vie
	<br/>Le d�veloppement du commerce mondial gr�ce aux progr�s des transports et � la baisse des droits de douane</strong>
	
	<p class="reponse">7. Que se passe t-il pour la croissance �conomique apr�s 1973 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ7'])) {
			if ($_POST['r�ponseQ7'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Il y a un ralentissement de la croissance �conomique : c�est la crise �conomique.</strong>
	
	<p class="reponse">8. Quelle est la cons�quence sociale du ralentissement de la croissance �conomique � partir de 1973 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ8'])) {
			if ($_POST['r�ponseQ8'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Une forte augmentation du ch�mage de la population active</strong>
	
	<p class="reponse">9. Quelles sont les causes du ralentissement de la croissance �conomique depuis 1973 dans les pays d�velopp�s ? (4 cases � cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse91'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse92'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse93'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse94'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse95'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La crise sociale (= augmentation du ch�mage)
	<br/>L�augmentation du prix du p�trole : 1er choc p�trolier en 1973 et 2�me choc p�trolier en 1979
	<br/>La stagnation ou la baisse de la demande de certains biens de consommation car les m�nages sont d�j� �quip�s
	<br/>La concurrence des Nouveaux Pays Industriels (NPI)</strong>

	<p class="reponse">10. Quels sont les secteurs �conomiques les plus touch�s par la crises �conomique � partir de 1973 dans les pays d�velopp�s ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ10'])) {
			if ($_POST['r�ponseQ10'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Les industries traditionnelles (sid�rurgie, charbon, textile, construction navale)</strong>

	<p class="reponse">11. Quelles sont les industries qui ont connu un d�veloppement malgr� la crise �conomique ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ11'])) {
			if ($_POST['r�ponseQ11'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Les industries de haute technologie (biotechnologie, �lectronique, informatique�)</strong>

	<p class="reponse">12. Quelle est la cons�quence de la hausse globale de croissance �conomique sur le niveau de vie des pays d�velopp�s depuis 1945 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ12'])) {
			if ($_POST['r�ponseQ12'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>D�gradation du niveau de vie (baisse de la consommation)</strong>
	
	<p class="reponse">13. Quelle est l��volution de la population active de l�agriculture de 1945 � nos jours dans les pays d�velopp�s ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ13'])) {
			if ($_POST['r�ponseQ13'] == 'r2')  {
				$repOk = 5;
			}
			else {
				$repPasOk = 5;
			}
		}
		else {
			$repPasOk = 5;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Une baisse</strong>

	<p class="reponse">14. Quelle est la cause de la baisse des effectifs dans l�agriculture dans les pays  d�velopp�s depuis 1945 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ14'])) {
			if ($_POST['r�ponseQ14'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La m�canisation de l'agriculture</strong>

	<p class="reponse">15. Quelle est l��volution des emplois industriels depuis 1945 dans les pays d�velopp�s ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ15'])) {
			if ($_POST['r�ponseQ15'] == 'r4')  {
				$repOk = 4;
			}
			else {
				$repPasOk = 4;
			}
		}
		else {
			$repPasOk = 4;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Une hausse</strong>

	<p class="reponse">16. A quoi est due la baisse des effectifs industriels dans les pays d�velopp�s depuis 1945 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ16'])) {
			if ($_POST['r�ponseQ16'] == 'r2')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La crise des industries traditionnelles qui avaient besoin de beaucoup de main d��uvre � la d�localisation des industries dans les pays � faible co�t de la main d��uvre</strong>

	<p class="reponse">17. Quelle est l��volution des emplois du secteur tertiaire (services, commerce�) depuis 1945 dans les pays d�velopp�s ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ17'])) {
			if ($_POST['r�ponseQ17'] == 'r4')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Une hausse</strong>

	<p class="reponse">18. A quoi est due la forte augmentation des emplois de services depuis 1945 dans les pays d�velopp�s ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ18'])) {
			if ($_POST['r�ponseQ18'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>A la hausse du niveau de vie li�e � la croissance �conomique</strong>

	<p class="reponse">19. Quels sont les changements de mode de vie qui apparaissent depuis 1945 dans les pays d�velopp�s ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse191'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse192'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse193'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse194'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse195'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse196'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Consommation de masse o� les produits standardis�s remplacent les produits artisanaux
	<br/>Population plus mobile gr�ce aux nombreux transports rapides
	<br/>Travail des femmes
	<br/>Uniformisation des modes de vie par les m�dias et la publicit�</strong>

	<p class="reponse">20. Quel pays est le mod�le de la consommation de masse qui s�impose aux autres pays ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ20'])) {
			if ($_POST['r�ponseQ20'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">Le mod�le am�ricain</strong>

	<p class="reponse">21. Que remarque-t-on quant aux changements des pratiques culturelles des pays d�velopp�s depuis 1945?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse211'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse212'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse213'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse214'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La lecture recule
	<br/>La t�l�vision et la radio deviennent les principaux moyens de diffusion de la culture
	<br/>Le mod�le de vie anglo-saxon (musique, v�tements�)</strong>

	<p class="reponse">22. Si globalement, la soci�t� conna�t une augmentation du niveau de vie depuis 1945, la crise des ann�es 73-90 est responsable de l�apparition d�une nouvelle pauvret� li�e au ch�mage ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ22'])) {
			if ($_POST['r�ponseQ22'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">Vrai</strong>

	<p class="reponse">23. Dans les pays en d�veloppement, qui b�n�ficie de la croissance ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ23'])) {
			if ($_POST['r�ponseQ23'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Seule une minorit�</strong>

	<p class="reponse">24. Le taux de natalit� est �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ24'])) {
			if ($_POST['r�ponseQ24'] == 'r1')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le nombre de naissances en un an pour mille habitants, il est exprim� en �</strong>

	<p class="reponse">25. Le taux de mortalit� est �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ25'])) {
			if ($_POST['r�ponseQ25'] == 'r3')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le nombre de d�c�s en un an pour mille habitants, il est exprim� en �</strong>

	<p class="reponse">26. Le taux d�accroissement naturel est �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ26'])) {
			if ($_POST['r�ponseQ26'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La diff�rence entre le taux de natalit� et le taux de mortalit�, on le calcule en faisant taux de natalit� moins taux de mortalit�</strong>

	<p class="reponse">27. L�accroissement naturel est �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ27'])) {
			if ($_POST['r�ponseQ27'] == 'r1')  {
				$repOk = 2;
			}
			else {
				$repPasOk = 2;
			}
		}
		else {
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La diff�rence entre les naissances et les d�c�s. Si le solde naturel est positif, il y a plus de naissances</strong>

	<p class="reponse">28. Le taux de mortalit� infantile est �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ28'])) {
			if ($_POST['r�ponseQ28'] == 'r1')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le nombre d�enfants morts avant l��ge de 1 an sur mille naissances en un an .Il est exprim� en �</strong>

	<p class="reponse">29. L�indice de f�condit� est �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ29'])) {
			if ($_POST['r�ponseQ29'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le nombre moyen d�enfants par femme. Il peut �tre un nombre avec une virgule (ex : 1,7)</strong>

	<p class="reponse">30. Quelles sont les affirmations vraies ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse301'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse302'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse303'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse304'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}

		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Les pays du nord ont un faible accroissement naturel
	<br/>Les pays du sud ont un fort accroissement naturel</strong>

	<p class="reponse">31. Sur quel continent trouve-t-on les plus forts accroissements naturels ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ31'])) {
			if ($_POST['r�ponseQ31'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Asie</strong>

	<p class="reponse">32. Comment appelle-t-on la forte natalit� de 1945 aux ann�es 1960 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ32'])) {
			if ($_POST['r�ponseQ32'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le baby boom</strong>

	<p class="reponse">33. Quelle est la cause du faible accroissement naturel actuel des pays d�velopp�s ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ33'])) {
			if ($_POST['r�ponseQ33'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La faible natalit� li�e � une faible f�condit�</strong>

	<p class="reponse">34. Quelles sont les causes principales de la baisse de la natalit� et de la faible f�condit� dans les pays d�velopp�s (plusieurs cases � cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse341'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse342'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse343'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse344'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le travail des femmes
	<br/>Utilisation de la contraception</strong>

	<p class="reponse">35. Quelles sont les causes de la baisse de la mortalit� depuis 1950 dans les pays d�velopp�s ? (2 cases � cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse351'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse352'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse353'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Am�lioration du niveau de vie
	<br/>Progr�s de la m�decine</strong>

	<p class="reponse">36. Quelle est la cons�quence de la baisse de la mortalit� depuis 1950 dans les pays d�velopp�s ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ36'])) {
			if ($_POST['r�ponseQ36'] == 'r3')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Allongement de l'esp�rance de vie.</strong>

	<p class="reponse">37. Dans les pays d�velopp�s, il y a :</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ37'])) {
			if ($_POST['r�ponseQ37'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Un vieillissement de la population</strong>

	<p class="reponse">38. Comment appelle-t-on le vieillissement de la population des pays d�velopp�s ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ38'])) {
			if ($_POST['r�ponseQ38'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le papy boom</strong>

	<p class="reponse">39. Pourquoi y a-t-il un vieillissement de la population dans les pays d�velopp�s ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ39'])) {
			if ($_POST['r�ponseQ39'] == 'r3')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>C�est du � l�allongement de l�esp�rance de vie et � la faible natalit�</strong>

	<p class="reponse">40. Quelle affirmation est vraie ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ40'])) {
			if ($_POST['r�ponseQ40'] == 'r1')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le faible accroissement naturel explique la faible croissance d�mographique des pays d�velopp�s</strong>

	<p class="reponse">41. Dans les pays en d�veloppement, il y a </p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ41'])) {
			if ($_POST['r�ponseQ41'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Une forte croissance d�mographique</strong>

	<p class="reponse">42. Pourquoi y-t-il une forte croissance d�mographique dans les pays du Sud ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ42'])) {
			if ($_POST['r�ponseQ42'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>A cause d'un fort accroissement naturel</strong>

	<p class="reponse">43. Pourquoi y a-t-il un fort accroissement naturel dans les pays du Sud ? (plusieurs cases � cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse431'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse432'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse433'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>A cause de la forte natalit�
	<br/>A cause de la forte croissance d�mographique</strong>

	<p class="reponse">44. Pourquoi y a-t-il une forte natalit� dans les pays du Sud ? (plusieurs cases � cocher).</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse441'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse442'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse443'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La contraception peu ou mal utilis�e
	<br/>Les enfants sont une garantie pour l�avenir et une source de revenus</strong>

	<p class="reponse">45. Pourquoi y a-t-il une baisse de la mortalit� depuis 1950 dans les pays du Sud ? (plusieurs cases � cocher).</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse451'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse452'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse453'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Progr�s de la m�decine
	<br/>Meilleure alimentation</strong>

	<p class="reponse">46. Quelles sont les probl�mes que pose la forte croissance d�mographique des pays en d�veloppement ? (plusieurs cases � cocher).</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse461'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse462'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse463'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse464'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Probl�me de logement
	<br/>Probl�me de ch�mage
	<br/>Probl�me de scolarisation des nombreux jeunes</strong>

	<p class="reponse">47. Dans les pays en d�veloppement, il y a�</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ47'])) {
			if ($_POST['r�ponseQ47'] == 'r2')  {
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
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Une population jeune due � la forte natalit�</strong>


</div>
<?php include('bas.php'); ?>