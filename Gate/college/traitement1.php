<?php include('haut.php'); ?>

<div id="corps">
	<p class="reponse">1. La crise �conomique de 1929 touche seulement en 1931 la France et moins profond�ment qu�� l��tranger, mais elle dure plus longtemps qu�� l��tranger jusqu�en 1938</p>
	<?php
		$total = 0;
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ1'])) {
			if ($_POST['r�ponseQ1'] == 'r1')  {
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
	
	<p class="reponse">2. La crise �conomique accentue la crise sociale, comment (4 cases � cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse21'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse22'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse23'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse24'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse25'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>De nombreux industriels, artisans et commer�ants dont faillite (cessation de leur activit�)
	<br/>Les ch�meurs sont souvent r�duits � la soupe populaire
	<br/>L�enrichissement de quelques-uns donne � beaucoup de Fran�ais le sentiment de vivre une �poque injuste
	<br/>Les salari�s sont victimes de la baisse des salaires</strong>
	
	<p class="reponse">3. La mont�e du ch�mage accentue l�hostilit� � l��gard des �trangers (=x�nophobie)</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ3'])) {
			if ($_POST['r�ponseQ3'] == 'r1')  {
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
	<br/>Vrai</strong>

	<p class="reponse">4. Les nombreux gouvernements (instabilit� gouvernementale) se montrent incapables avant 1936 de r�soudre la crise �conomique : cela entra�ne un m�contentement de l�opinion publique</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ4'])) {
			if ($_POST['r�ponseQ4'] == 'r1')  {
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
	<br/>Vrai</strong>

	<p class="reponse">5. L�instabilit� gouvernementale (nombreux gouvernements se succ�dant � un rythme rapide) est due aux fr�quents renversements du gouvernement par le Parlement</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ5'])) {
			if ($_POST['r�ponseQ5'] == 'r1')  {
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
	<br/>Vrai</strong>

	<p class="reponse">6. Que sont les ligues ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ6'])) {
			if ($_POST['r�ponseQ6'] == 'r1')  {
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
	<br/>Ce sont des groupes d'extr�me droite antiparlementaires qui se d�veloppent dans les ann�es 1930</strong>
	
	<p class="reponse">7. Que d�noncent les ligues et l�Action fran�aise (groupe royaliste) (4 cases � cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse71'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse72'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse73'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse74'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse75'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La corruption du r�gime
	<br/>La multiplication des scandales politico financiers
	<br/>L'incomp�tence du r�gime (Parlement et gouvernement)
	<br/>Le trop grand nombre d'�trangers en France (x�nophobie) selon eux</strong>
	
	<p class="reponse">8. L�affaire Stavisky qui est un escroc qui a �t� prot�g� par des politiciens d�clenche en 1934 une violente campagne antiparlementaire qui d�bouche sur une manifestation des ligues et de l�Action fran�aise � Paris le 12 f�vrier 1934</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ8'])) {
			if ($_POST['r�ponseQ8'] == 'r1')  {
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
	<br/>Vrai</strong>
	
	<p class="reponse">9. Durant la manifestation du 6 f�vrier 1934, certains manifestants tentent d�atteindre l�Assembl�e nationale pour s�en emparer. La police intervient. Il y a 15 morts et 1500 bless�s</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ9'])) {
			if ($_POST['r�ponseQ9'] == 'r1')  {
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
	<br/>Vrai</strong>

	<p class="reponse">10. Comment est per�ue la manifestation du 6 f�vrier 1934 par les partis de gauche (socialistes, communistes et radicaux) ?</p>
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
	<br/>Comme une tentative de coup d'Etat fasciste par l'extr�me droite pour prendre le pouvoir afin d'instaurer un r�gime non d�mocratique</strong>

	<p class="reponse">11. Quelle est la cons�quence de la manifestation du 6 f�vrier 1934 pour la gauche ?</p>
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
	<br/>Les communistes, les socialistes et les radicaux se r�unissent dans le Front populaire pour r�sister � l'extr�me droite</strong>

	<p class="reponse">12. Quel est le slogan do programme �lectoral commun du Front populaire ?</p>
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
	<br/>"le pain, la paix, la libert�"</strong>
	
	<p class="reponse">13. Qui gagne les �lections l�gislatives en mai 1936 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ13'])) {
			if ($_POST['r�ponseQ13'] == 'r3')  {
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
	<strong class="solutions">
	<br/>Le Front populaire (socialistes, radicaux, communistes)</strong>

	<p class="reponse">14. Qui devient chef du gouvernement (= Pr�sident du conseil) en juin 1936 suite � la victoire du Front populaire ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ14'])) {
			if ($_POST['r�ponseQ14'] == 'r1')  {
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
	<strong class="solutions">
	<br/>L�on Blum, un socialiste car le SFIO est le parti du Front populaire qui a eu le plus de voix aux �lections l�gislatives</strong>

	<p class="reponse">15. Les communistes d�cident de soutenir le gouvernement mais refusent d�en faire parti.</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ15'])) {
			if ($_POST['r�ponseQ15'] == 'r2')  {
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
	<br/>Faux</strong>

	<p class="reponse">16. Les radicaux d�cident de soutenir le gouvernement mais refusent d�en faire parti.</p>
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
	<br/>Faux</strong>

	<p class="reponse">17. Pour la premi�re fois en France, trois femmes font partie du gouvernement en juin 1936.</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ17'])) {
			if ($_POST['r�ponseQ17'] == 'r1')  {
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
	<br/>Vrai</strong>

	<p class="reponse">18. Que passe-t-il dans les entreprises suite � la victoire du Front populaire aux �lections l�gislatives de 1936 et � leur arriv�e au pouvoir en juin 1936 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ18'])) {
			if ($_POST['r�ponseQ18'] == 'r2')  {
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
	<br/>Des "gr�ces joyeuses" avec occupation d'usines.</strong>

	<p class="reponse">19. Qui r�unit le gouvernement Blum � Matignon pour n�gocier les accords de Matignon pour mettre fin aux gr�ves ? (Deux r�ponses)</p>
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
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse193'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse194'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Les syndicats
	<br/>Les patrons</strong>

	<p class="reponse">20. Que pr�voient les accords de Matignon sign�s le 7 juin 1936 ? (Trois r�ponses)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse201'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse202'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse203'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse204'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse205'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La g�n�ration des conventions collectives qui fixent par branche d'activit� les droits des salari�s
	<br/>Une forte hausse des salaires
	<br/>La cr�ation de d�l�gu�s du personnel charg�s de repr�senter les employ�s aupr�s des patrons dans les entreprises</strong>

	<p class="reponse">21. Quelles sont les deux autres grandes lois sociales qui compl�tent les accords de Matignon ? (Deux r�ponses)</p>
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
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La semaine des 40 heures de travail (avant c'�tait 48 heures)
	<br/>Quinze jours de cong�s pay�s (avant les ouvriers n'�taient pas pay�s si ils prenaient des vacances...donc ils n'en prenaient pas)</strong>

	<p class="reponse">22. Quelles sont les difficult�s que rencontre le Front populaire ? (Deux r�ponses)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse221'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse222'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse223'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le Front populaire se montre incapable de r�soudre la crise �conomique.
	<br/>La guerre civile espagnole o� le gouvernement Blum d�cide la non-intervention pour laquelle sont les radicaux. En revanche, les communistes sont pour intervenir et aider le Front populaire espagnol contre Franco. Le Front populaire se divise donc�</strong>

	<p class="reponse">23. L�incapacit� du Front populaire � r�soudre la crise �conomique entra�ne la disparition du Front populaire en avril�</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ23'])) {
			if ($_POST['r�ponseQ23'] == 'r3')  {
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
	<br/>1938</strong>


</div>
<?php include('bas.php'); ?>