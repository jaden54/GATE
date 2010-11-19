<?php include('haut.php'); ?>

<div id="corps">
	<p class="reponse">1. La crise économique de 1929 touche seulement en 1931 la France et moins profondément qu’à l’étranger, mais elle dure plus longtemps qu’à l’étranger jusqu’en 1938</p>
	<?php
		$total = 0;
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ1'])) {
			if ($_POST['réponseQ1'] == 'r1')  {
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
	
	<p class="reponse">2. La crise économique accentue la crise sociale, comment (4 cases à cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse21'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse22'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse23'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse24'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse25'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>De nombreux industriels, artisans et commerçants dont faillite (cessation de leur activité)
	<br/>Les chômeurs sont souvent réduits à la soupe populaire
	<br/>L’enrichissement de quelques-uns donne à beaucoup de Français le sentiment de vivre une époque injuste
	<br/>Les salariés sont victimes de la baisse des salaires</strong>
	
	<p class="reponse">3. La montée du chômage accentue l’hostilité à l’égard des étrangers (=xénophobie)</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ3'])) {
			if ($_POST['réponseQ3'] == 'r1')  {
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
	<br/>Vrai</strong>

	<p class="reponse">4. Les nombreux gouvernements (instabilité gouvernementale) se montrent incapables avant 1936 de résoudre la crise économique : cela entraîne un mécontentement de l’opinion publique</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ4'])) {
			if ($_POST['réponseQ4'] == 'r1')  {
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
	<br/>Vrai</strong>

	<p class="reponse">5. L’instabilité gouvernementale (nombreux gouvernements se succédant à un rythme rapide) est due aux fréquents renversements du gouvernement par le Parlement</p>
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
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Vrai</strong>

	<p class="reponse">6. Que sont les ligues ?</p>
	<?php
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
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Ce sont des groupes d'extrême droite antiparlementaires qui se développent dans les années 1930</strong>
	
	<p class="reponse">7. Que dénoncent les ligues et l’Action française (groupe royaliste) (4 cases à cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse71'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse72'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse73'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse74'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse75'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La corruption du régime
	<br/>La multiplication des scandales politico financiers
	<br/>L'incompétence du régime (Parlement et gouvernement)
	<br/>Le trop grand nombre d'étrangers en France (xénophobie) selon eux</strong>
	
	<p class="reponse">8. L’affaire Stavisky qui est un escroc qui a été protégé par des politiciens déclenche en 1934 une violente campagne antiparlementaire qui débouche sur une manifestation des ligues et de l’Action française à Paris le 12 février 1934</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ8'])) {
			if ($_POST['réponseQ8'] == 'r1')  {
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
	<br/>Vrai</strong>
	
	<p class="reponse">9. Durant la manifestation du 6 février 1934, certains manifestants tentent d’atteindre l’Assemblée nationale pour s’en emparer. La police intervient. Il y a 15 morts et 1500 blessés</p>
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
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Vrai</strong>

	<p class="reponse">10. Comment est perçue la manifestation du 6 février 1934 par les partis de gauche (socialistes, communistes et radicaux) ?</p>
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
	<br/>Comme une tentative de coup d'Etat fasciste par l'extrême droite pour prendre le pouvoir afin d'instaurer un régime non démocratique</strong>

	<p class="reponse">11. Quelle est la conséquence de la manifestation du 6 février 1934 pour la gauche ?</p>
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
	<br/>Les communistes, les socialistes et les radicaux se réunissent dans le Front populaire pour résister à l'extrême droite</strong>

	<p class="reponse">12. Quel est le slogan do programme électoral commun du Front populaire ?</p>
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
	<br/>"le pain, la paix, la liberté"</strong>
	
	<p class="reponse">13. Qui gagne les élections législatives en mai 1936 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ13'])) {
			if ($_POST['réponseQ13'] == 'r3')  {
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
	<strong class="solutions">
	<br/>Le Front populaire (socialistes, radicaux, communistes)</strong>

	<p class="reponse">14. Qui devient chef du gouvernement (= Président du conseil) en juin 1936 suite à la victoire du Front populaire ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ14'])) {
			if ($_POST['réponseQ14'] == 'r1')  {
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
	<strong class="solutions">
	<br/>Léon Blum, un socialiste car le SFIO est le parti du Front populaire qui a eu le plus de voix aux élections législatives</strong>

	<p class="reponse">15. Les communistes décident de soutenir le gouvernement mais refusent d’en faire parti.</p>
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
			$repPasOk = 2;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Faux</strong>

	<p class="reponse">16. Les radicaux décident de soutenir le gouvernement mais refusent d’en faire parti.</p>
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
	<br/>Faux</strong>

	<p class="reponse">17. Pour la première fois en France, trois femmes font partie du gouvernement en juin 1936.</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ17'])) {
			if ($_POST['réponseQ17'] == 'r1')  {
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
	<br/>Vrai</strong>

	<p class="reponse">18. Que passe-t-il dans les entreprises suite à la victoire du Front populaire aux élections législatives de 1936 et à leur arrivée au pouvoir en juin 1936 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ18'])) {
			if ($_POST['réponseQ18'] == 'r2')  {
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
	<br/>Des "grèces joyeuses" avec occupation d'usines.</strong>

	<p class="reponse">19. Qui réunit le gouvernement Blum à Matignon pour négocier les accords de Matignon pour mettre fin aux grèves ? (Deux réponses)</p>
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
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse193'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse194'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Les syndicats
	<br/>Les patrons</strong>

	<p class="reponse">20. Que prévoient les accords de Matignon signés le 7 juin 1936 ? (Trois réponses)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse201'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse202'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse203'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse204'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse205'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La génération des conventions collectives qui fixent par branche d'activité les droits des salariés
	<br/>Une forte hausse des salaires
	<br/>La création de délégués du personnel chargés de représenter les employés auprès des patrons dans les entreprises</strong>

	<p class="reponse">21. Quelles sont les deux autres grandes lois sociales qui complètent les accords de Matignon ? (Deux réponses)</p>
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
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>La semaine des 40 heures de travail (avant c'était 48 heures)
	<br/>Quinze jours de congés payés (avant les ouvriers n'étaient pas payés si ils prenaient des vacances...donc ils n'en prenaient pas)</strong>

	<p class="reponse">22. Quelles sont les difficultés que rencontre le Front populaire ? (Deux réponses)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponse221'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['réponse222'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['réponse223'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Le Front populaire se montre incapable de résoudre la crise économique.
	<br/>La guerre civile espagnole où le gouvernement Blum décide la non-intervention pour laquelle sont les radicaux. En revanche, les communistes sont pour intervenir et aider le Front populaire espagnol contre Franco. Le Front populaire se divise donc…</strong>

	<p class="reponse">23. L’incapacité du Front populaire à résoudre la crise économique entraîne la disparition du Front populaire en avril…</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ23'])) {
			if ($_POST['réponseQ23'] == 'r3')  {
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
	<br/>1938</strong>


</div>
<?php include('bas.php'); ?>