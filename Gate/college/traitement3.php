<?php include('haut.php'); ?>

<div id="corps">
	<p class="reponse">1. Quelle est la situation en URSS apr�s la guerre civile en 1921 ?</p>
	<?php
		$total = 0;
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ1'])) {
			if ($_POST['r�ponseQ1'] == 'r1')  {
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
	<br/><strong class="solutions">Catastrophique</strong>
	
	<p class="reponse">2. Quelle politique va donc mener L�nine pour permettre le redressement �conomique de L� URSS apr�s la guerre civile ?</p>
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
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">La NEP</strong>
	
	<p class="reponse">3. Qu�est-ce que la NEP ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ3'])) {
			if ($_POST['r�ponseQ3'] == 'r2')  {
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
	<br/><strong class="solutions">Une nouvelle politique �conomique qui est un retour partiel au capitalisme</strong>

	<p class="reponse">4. La NEP qui est un retour partiel au capitalisme permet (3 cases � cocher )</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse41'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse42'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse43'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse44'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse45'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>L�existence de petites entreprises industrielles et commerciales priv�es
	<br/>Aux paysans de vendre leur surplus
	<br/>L�appel aux capitaux �trangers et aux ing�nieurs �trangers</strong>
	
	<p class="reponse">5. La NEP permet le redressement �conomique de l�URSS</p>
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
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">Vrai</strong>

	<p class="reponse">6. A la mort de L�nine en 1924, quel homme r�ussit � s�imposer � la tete de l�URSS ?</p>
	<?php
		$total = 0;
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
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">Joseph Staline</strong>
	
	<p class="reponse">7. La collectivisation est ...</p>
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
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">La mise en commun des moyens de production et d��changes , ce qui entraine la suppression de la propri�t� priv�e</strong>
	
	<p class="reponse">8. Staline va collectiviser l��conomie sovi�tique en (2 cases � cocher) ...</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse81'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse82'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse83'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse84'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Faisant la collectivisation des terres agricoles
	<br/>Nationalisant  les entreprises industrielles et commerciales</strong>
	
	<p class="reponse">9. Une nationalisation est le fait �</p>
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
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">de supprimer les entreprises priv�es qui d�sormais appartiennent � l�Etat</strong>

	<p class="reponse">10. La collectivisation des terres se fait�</p>
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
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">en obligeant les paysans � se regrouper dans de vastes exploitations agricoles collectives : les kholkhozes et les sovkhozes en 1929</strong>

	<p class="reponse">11. Un kholkhoze est �</p>
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
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">une exploitation agricole appartenant � un groupe de paysans qui ont mis en commun leurs  terres , leurs outils , leur b�tail</strong>

	<p class="reponse">12. Un sovkhoze est�</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ12'])) {
			if ($_POST['r�ponseQ12'] == 'r2')  {
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
	<br/><strong class="solutions">une grande ferme qui appartient � l�Etat et qui emploie des salari�s qui re�oivent  un salaire qui recoivent  un salaire fixe</strong>
	
	<p class="reponse">13. La collectivisation des terres �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ13'])) {
			if ($_POST['r�ponseQ13'] == 'r2')  {
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
	<br/><strong class="solutions">entraine de vives r�sistances parmi les paysans : certains pr�f�rant abattre leur b�tail �</strong>

	<p class="reponse">14. Les koulaks sont les paysans �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ14'])) {
			if ($_POST['r�ponseQ14'] == 'r2')  {
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
	<br/><strong class="solutions">Certains sont fusill�s, d�autres sont d�port�s vers les camps de concentration (les Goulags )</strong>

	<p class="reponse">15. Que fait-on aux koulaks et aux paysans oppos�s � la collectivisation ?</p>
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
			$repPasOk = 1;
			$repOk = 1;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<br/><strong class="solutions">Certains sont fusill�s, d�autres sont d�port�s vers les camps de concentration (les Goulags )</strong>

	<p class="reponse">16. La collectivisation des terres est�elle une r�ussite ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ16'])) {
			if ($_POST['r�ponseQ16'] == 'r1')  {
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
	<br/><strong class="solutions">Non, car les kolkhozes sont mal �quip�s et les paysans y travaillent avec peu d�ardeur : c�est pourquoi la production agricole augmente peu pendant les ann�es 1930</strong>

	<p class="reponse">17. Qu�arrive t-il aux entreprises en URSS ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ17'])) {
			if ($_POST['r�ponseQ17'] == 'r2')  {
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
	<br/><strong class="solutions">Elles sont nationalis�es et donc appartiennent � l�Etat</strong>

	<p class="reponse">18. Grace � quoi l�Etat d�cide de tout en mati�re �conomique ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ18'])) {
			if ($_POST['r�ponseQ18'] == 'r1')  {
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
	<br/><strong class="solutions">Aux nationalis�es des entreprises et � la planification</strong>

	<p class="reponse">19. La planification quinquenale en URSS�</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ19'])) {
			if ($_POST['r�ponseQ19'] == 'r3')  {
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
	<br/><strong class="solutions">fixe les objectifs �conomiques � atteindre et les moyens de les atteindre pour 5 ans</strong>

	<p class="reponse">20. Quelle est la priorit� �conomique de la planification ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ20'])) {
			if ($_POST['r�ponseQ20'] == 'r3')  {
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
	<br/><strong class="solutions">L�industrie et surtout l�industrie lourde (ex : sid�rurgie) et l�industrie des biens d��quipement (machines-outils, camions, train �)</strong>

	<p class="reponse">21. Que fait-on pour obtenir de meilleurs rendements des ouvriers (4 cases � cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse211'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse212'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse213'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse214'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse215'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>On utilise la propagande montrant comme un exemple le mineur Stakhanov qui bat des records d�extraction de charbon : c�est le stakhanovisme
	<br/>On impose de longues journ�es de travail dans les usines
	<br/>On impose une forte discipline et on surveille les ouvriers qui sont oblig�s d�avoir in livret de travail
	<br/>On r�tablit le salaire � la pi�ce</strong>

	<p class="reponse">22. L�industrialisation acc�l�r�e men�e dans les ann�es 1930 est une r�ussite (2 cases � cocher) ...</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse221'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse222'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse223'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse224'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Car de nouvelles r�gions industrielles son cr��es dans l�Oural et en Sib�rie
	<br/>Car l�U.R.S.S devient la 3�me puissance industrielle mondiale</strong>

	<p class="reponse">23. Au niveau politique, l� U.R.S.S de Staline est�</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ23'])) {
			if ($_POST['r�ponseQ23'] == 'r2')  {
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
	<br/><strong class="solutions">Un r�gime totalitaire</strong>

	<p class="reponse">24. L�U.R.S.S est un r�gime totalitaire car (5 cases � cocher) ...</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse241'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse242'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse243'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse244'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse245'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse246'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>C�est le contr�le de tous les pouvoirs avec la censure (contr�le de la presse)et l�interdiction des autres partis politiques
	<br/>Car une police politique (guepeou, puis NKVD, puis KGB) surveille chacun�
	<br/>Car Staline et le parti communiste sont pr�sents partout � chaque instant de la vie d�un individu : au travail, � l��cole, dans les loisirs, au cin�ma�
	<br/>Car on utilise la propagande pour manipuler les esprits et pour les soumettre au communisme et � Staline
	<br/>L�on encadre la population dans les organisations communistes (ex : les jeunesses communistes)</strong>

	<p class="reponse">25. Comment Staline fait-il r�gner la terreur en URSS (2 cases � cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse251'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse252'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse253'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La police politique (guepeou, puis NKVD, puis KGB) surveille chacun� On se m�fie donc de son voisin� de sa famille qui peut vous d�noncer � la police politique !
	<br/>En d�portant dans des camps de concentration les opposants ou ceux qui semblent �tre une menace pour le pouvoir de Staline</strong>

	<p class="reponse">26. Un camp de concentration sovi�tique est un �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ26'])) {
			if ($_POST['r�ponseQ26'] == 'r1')  {
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
	<br/><strong class="solutions">Goulag</strong>

	<p class="reponse">27. Un habitant de l�U.R.S.S est �</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ27'])) {
			if ($_POST['r�ponseQ27'] == 'r3')  {
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
	<br/><strong class="solutions">Un sovi�tique</strong>

	<p class="reponse">28. Durant les ann�es 1936-1938, comment Staline va-t-il �liminer des hommes qui avaient jou� un r�le important durant la R�volution d�Octobre 1917 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ28'])) {
			if ($_POST['r�ponseQ28'] == 'r1')  {
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
	<br/><strong class="solutions">Par des purges : les proc�s de Moscou</strong>

	<p class="reponse">29. Que se passe-t-il pendant les proc�s de Moscou de 1936-1938 ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ29'])) {
			if ($_POST['r�ponseQ29'] == 'r1')  {
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
	<br/><strong class="solutions">Les membres importants du parti communiste sont accus�s d�avoir trahi le communisme. Bien qu�ils soient pour la plus part innocents, ils sont condamn�s � mort ou envoy�s en d�portation dans les goulags</strong>

	<p class="reponse">30. Les proc�s de Moscou permettent � Staline d��tre le seul ma�tre du parti communiste et donc de l�U.R.S.S</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ30'])) {
			if ($_POST['r�ponseQ30'] == 'r2')  {
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
	<br/><strong class="solutions">Vrai</strong>

	<p class="reponse">31. Les 3 th�mes principaux de la propagande stalinienne sont (3 cases � cocher)</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse311'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse312'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse313'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse314'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		if (isset($_POST['r�ponse315'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>Le patriotisme (= la grandeur de l�U.R.S.S)
	<br/>Le communisme et � les r�ussites du communisme �
	<br/>La personne de Staline</strong>

	<p class="reponse">32. Qu�est-ce que le culte de la personnalit� (ou culte du chef) ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ32'])) {
			if ($_POST['r�ponseQ32'] == 'r1')  {
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
	<br/><strong class="solutions">C�est le fait de mettre un homme au dessus des autres hommes� presqu�un dieu</strong>

	<p class="reponse">33. Quelle est la couleur du communisme que l�on retrouve sur le drapeau de l�U.R.S.S (2 cases � cocher) ?</p>
	<?php
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponseQ33'])) {
			if ($_POST['r�ponseQ33'] == 'r2')  {
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
	<br/><strong class="solutions">Le rouge</strong>

	<p class="reponse">34. Quelles sont les deux formes entrelac�es sue l�on trouve sur le drapeau de l�U.R.S.S (2 cases � cocher) ?</p>
	<?php 
		$repOk = 0;
		$repPasOk = 0;
		if (isset($_POST['r�ponse341'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse342'])) {
			$repOk++;
		}
		else {
			$repPasOk++;
		}
		if (isset($_POST['r�ponse343'])) {
			$repPasOk++;
		}
		else {
			$repOk++;
		}
		echo "Il y a "; echo $repOk; echo " bonnes r�ponses et "; echo $repPasOk; echo " mauvaises r�ponses.";
	?>
	<br/><strong class= "solutionTitre">R�ponse :</strong>
	<strong class="solutions">
	<br/>La faucille symbolisant les paysans
	<br/>Le marteau symbolisant les ouvriers</strong>

</div>
<?php include('bas.php'); ?>