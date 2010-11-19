<?php include('haut.php'); ?>

<div id="corps">
	<p class="reponse">1. Question 1</p>
	<?php
		$total = 0;
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ1'])) {
			if ($_POST['réponseQ1'] == 'r1')  { /* il  faut remplacer r1 par la bonne réponse (r1 ou r2)*/
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
	<br/><strong class="solutions">Mettre la bonne réponse ici (ou une explication)</strong>

	<p class="reponse">2. Question 2</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ2'])) {
			if ($_POST['réponseQ2'] == 'r1')  { /* il  faut remplacer r1 par la bonne réponse (r1 ou r2 ou r3)*/
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
	<br/><strong class="solutions">Mettre la bonne réponse ici (ou une explication)</strong>

	<p class="reponse">3. Question 3</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ3'])) {
			if ($_POST['réponseQ3'] == 'r1')  { /* il  faut remplacer r1 par la bonne réponse (r1 ou r2 ou r3 ou r4)*/
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
	<br/><strong class="solutions">Mettre la bonne réponse ici (ou une explication)</strong>

	<p class="reponse">4. Question 4</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ4'])) {
			if ($_POST['réponseQ4'] == 'r1')  { /* il  faut remplacer r1 par la bonne réponse (r1 ou r2 ou r3 ou r4 ou r5)*/
				$repOk = 5;
			}
			else {
				$repPasOk = 2;
				$repOk = 3;
			}
		}
		else {
			$repPasOk = 1;
			$repOk = 4;
		}
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<br/><strong class="solutions">Mettre la bonne réponse ici (ou une explication)</strong>

	<p class="reponse">5. Question 5</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['réponseQ5'])) {
			if ($_POST['réponseQ5'] == 'r1')  { /* il  faut remplacer r1 par la bonne réponse (r1 ou r2 ou r3 ou r4 ou r5 ou r6)*/
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
	<br/><strong class="solutions">Mettre la bonne réponse ici (ou une explication)</strong>

	
	
	<p class="reponse">6. Question 6</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		/*Si la réponse 1 est bonne on écrit ce qui suit*/
		if (isset($_POST['réponse61'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		/*Si la réponse 2 n'est pas bonne on écrit ce qui suit*/
		if (isset($_POST['réponse62'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		/*On fait la meme chose pour toutes les questions*/
		echo "Il y a "; echo $repOk; echo " bonnes réponses et "; echo $repPasOk; echo " mauvaises réponses.";
	?>
	<br/><strong class= "solutionTitre">Réponse :</strong>
	<strong class="solutions">
	<br/>Bonne réponse 1
	<br/>Bonne réponse 2
	<br/>...
	</strong>
	
	<!--
	Pour les questions 7, 8, 9 et 10, on procède comme pour la question 6
	-->

</div>
<?php include('bas.php'); ?>