<?php include('haut.php'); ?>

	<div id="corps">
		<h2>L'URSS</h2>
		<form method="post" action="traitement3.php">
			<p>
				<h5 class=question>1. Quelle est la situation en URSS apr�s la guerre civile en 1921 ?</h5>
				<input type="radio" name="r�ponseQ1" value="r1" id="r11" /> <label for="r11">Catastrophique</label><br/>
				<input type="radio" name="r�ponseQ1" value="r2" id="r12" /> <label for="r12">Moyenne</label><br/>
				<input type="radio" name="r�ponseQ1" value="r3" id="r13" /> <label for="r13">Bonne</label>
			</p><br/> 
			<p>
				<h5 class=question>2. Quelle politique va donc mener L�nine pour permettre le redressement �conomique de L� URSS apr�s la guerre civile ?</h5>
				<input type="radio" name="r�ponseQ2" value="r1" id="r21" /> <label for="r21">La NEP</label><br />
				<input type="radio" name="r�ponseQ2" value="r2" id="r22" /> <label for="r22">Le communisme de guerre </label>
			</p><br/> 
			<p>
				<h5 class=question>3. Qu�est-ce que la NEP ?</h5>
				<input type="radio" name="r�ponseQ3" value="r1" id="r31" /> <label for="r31">Une nouvelle politique �conomique</label><br/>
				<input type="radio" name="r�ponseQ3" value="r2" id="r32" /> <label for="r32">Une nouvelle politique �conomique qui est un retour partiel au capitalisme</label><br/>
				<input type="radio" name="r�ponseQ3" value="r3" id="r33" /> <label for="r33">La collectivisation des terres et la nationalisation des entreprises</label>
			</p><br/> 
			<p>
				<h5 class=question>4. La NEP qui est un retour partiel au capitalisme permet (3 cases � cocher )</h5>
				<input type="checkbox" name="r�ponse41" id="r41" /> <label for="r41">La collectivisation des terres </label><br/>
				<input type="checkbox" name="r�ponse42" id="r42" /> <label for="r42">L�existence de petites entreprises industrielles et commerciales priv�es</label><br />
				<input type="checkbox" name="r�ponse43" id="r43" /> <label for="r43">nationalisation des petites entreprises industrielles et commerciales </label><br />
				<input type="checkbox" name="r�ponse44" id="r44" /> <label for="r44">Aux paysans de vendre leur surplus</label><br/>
				<input type="checkbox" name="r�ponse45" id="r45" /> <label for="r45">L�appel aux capitaux �trangers et aux ing�nieurs �trangers</label>
			</p><br/>
			<p>
				<h5 class=question>5. La NEP permet le redressement �conomique de l�URSS</h5>
				<input type="radio" name="r�ponseQ5" value="r1" id="r51" /> <label for="r51">Vrai</label><br/>
				<input type="radio" name="r�ponseQ5" value="r2" id="r52" /> <label for="r52">Faux</label>
			</p><br/> 
			<p>
				<h5 class=question>6. A la mort de L�nine en 1924, quel homme r�ussit � s�imposer � la tete de l�URSS ?</h5>
				<input type="radio" name="r�ponseQ6" value="r1" id="r61" /> <label for="r61">Joseph Staline</label><br/>
				<input type="radio" name="r�ponseQ6" value="r2" id="r62" /> <label for="r62">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>7. La collectivisation est ...</h5>
				<input type="radio" name="r�ponseQ7" value="r1" id="r71" /> <label for="r71">La mise en commun des moyens de production et d��changes , ce qui entraine la suppression de la propri�t� priv�e</label><br/>
				<input type="radio" name="r�ponseQ7" value="r2" id="r72" /> <label for="r72">La privatisation des biens collectifs</label>
			</p><br/> 
			<p>
				<h5 class=question>8. Staline va collectiviser l��conomie sovi�tique en (2 cases � cocher) ...</h5>
				<input type="checkbox" name="r�ponse81" id="r81" /> <label for="r81">Faisant la collectivisation des terres agricoles</label><br/>
				<input type="checkbox" name="r�ponse82" id="r82" /> <label for="r82">Rendant les terres aux paysans</label><br/>
				<input type="checkbox" name="r�ponse83" id="r83" /> <label for="r83">Nationalisant  les entreprises industrielles et commerciales</label><br />
				<input type="checkbox" name="r�ponse84" id="r84" /> <label for="r84">Privatisant les entreprises industrielles et commerciales</label>
			</p><br/> 
			<p>
				<h5 class=question>9. Une nationalisation est le fait �</h5>
				<input type="radio" name="r�ponseQ9" value="r1" id="r91" /> <label for="r91">de supprimer les entreprises priv�es qui d�sormais appartiennent � l�Etat</label><br />
				<input type="radio" name="r�ponseQ9" value="r2" id="r92" /> <label for="r92">de supprimer les entreprises d�Etat qui d�sormais appartiennent � des personnes priv�es </label>
			</p><br/> 
			<p>
				<h5 class=question>10. La collectivisation des terres se fait�</h5>
				<input type="radio" name="r�ponseQ10" value="r1" id="r101" /> <label for="r101">en obligeant les paysans � se regrouper dans de vastes exploitations agricoles collectives : les kholkhozes et les sovkhozes en 1929</label><br />
				<input type="radio" name="r�ponseQ10" value="r2" id="r102" /> <label for="r102">en obligeant les paysans � se regrouper dans de vastes exploitations agricoles collectives : les kholkhozes et les sovkhozes en 1930</label>
			</p><br/>
			<p>
				<h5 class=question>11. Un kholkhoze est �</h5>
				<input type="radio" name="r�ponseQ11" value="r1" id="r111" /> <label for="r111">une grande ferme qui appartient � l�Etat  et qui emploie des salari�s qui recoiventy un salaire fixe quelquesoit leur travail </label><br />
				<input type="radio" name="r�ponseQ11" value="r2" id="r112" /> <label for="r112">une exploitation agricole appartenant � un groupe de paysans qui ont mis en commun leurs  terres , leurs outils , leur b�tail</label>
			</p><br/> 
			<p>
				<h5 class=question>12. Un sovkhoze est�</h5>
				<input type="radio" name="r�ponseQ12" value="r1" id="r121" /> <label for="r121">une exploitation agricole appartenant � un groupe de paysans qui ont mis en commun leurs terres, leurs outils, leur b�tail</label><br />
				<input type="radio" name="r�ponseQ12" value="r2" id="r122" /> <label for="r122">une grande ferme qui appartient � l�Etat et qui emploie des salari�s qui re�oivent  un salaire qui recoivent  un salaire fixe</label>
			</p><br/>
			<p>
				<h5 class=question>13. La collectivisation des terres �</h5>
				<input type="radio" name="r�ponseQ13" value="r1" id="r131" /> <label for="r131">va etre soutenue par les paysans </label><br />
				<input type="radio" name="r�ponseQ13" value="r2" id="r132" /> <label for="r132">entraine de vives r�sistances parmi les paysans : certains pr�f�rant abattre leur b�tail �</label>
			</p><br/> 
			<p>
				<h5 class=question>14. Les koulaks sont les paysans �</h5>
				<input type="radio" name="r�ponseQ14" value="r1" id="r141" /> <label for="r141">qui sont pour la collectivisations </label><br />
				<input type="radio" name="r�ponseQ14" value="r2" id="r142" /> <label for="r142">Certains sont fusill�s, d�autres sont d�port�s vers les camps de concentration (les Goulags )</label>
			</p><br/> 
			<p>
				<h5 class=question>15. Que fait-on aux koulaks et aux paysans oppos�s � la collectivisation ?</h5>
				<input type="radio" name="r�ponseQ15" value="r1" id="r151" /> <label for="r151">On leur redonne leur terre </label><br />
				<input type="radio" name="r�ponseQ15" value="r2" id="r152" /> <label for="r152">Certains sont fusill�s , d�autres sont d�port�s vers des camps de concentration (les Goulags) </label>
			</p><br/> 
			<p>
				<h5 class=question>16. La collectivisation des terres est�elle une r�ussite ?</h5>
				<input type="radio" name="r�ponseQ16" value="r1" id="r161" /> <label for="r161">Non, car les kolkhozes sont mal �quip�s et les paysans y travaillent avec peu d�ardeur : c�est pourquoi la production agricole augmente peu pendant les ann�es 1930</label><br />
				<input type="radio" name="r�ponseQ16" value="r2" id="r162" /> <label for="r162">Oui, car les kolkhozes sont �quipes de mat�riel moderne et les paysans y travaillent beaucoup : c�est pourquoi la production agricole augmente beaucoup dans les ann�es 1930</label>
			</p><br/> 
			<p>
				<h5 class=question>17. Qu�arrive t-il aux entreprises en URSS ?</h5>
				<input type="radio" name="r�ponseQ17" value="r1" id="r171" /> <label for="r171">Elles sont privatis�es et donc appartiennent � des personnes priv�es </label><br />
				<input type="radio" name="r�ponseQ17" value="r2" id="r172" /> <label for="r172">Elles sont nationalis�es et donc appartiennent � l�Etat</label>
			</p><br/> 
			<p>
				<h5 class=question>18. Grace � quoi l�Etat d�cide de tout en mati�re �conomique ?</h5>
				<input type="radio" name="r�ponseQ18" value="r1" id="r181" /> <label for="r181">Aux nationalis�es des entreprises et � la planification</label><br />
				<input type="radio" name="r�ponseQ18" value="r2" id="r182" /> <label for="r182">Aux privatisations des entreprises et � une planification indicative</label>
			</p><br/> 
			<p>
				<h5 class=question>19. La planification quinquenale en URSS�</h5>
				<input type="radio" name="r�ponseQ19" value="r1" id="r191" /> <label for="r191">fixe les objectifs �conomiques � atteindre et les moyens de les atteindre pour 7 ans</label><br/>
				<input type="radio" name="r�ponseQ19" value="r2" id="r192" /> <label for="r192">fixe les objectifs �conomiques � atteindre et les moyens de les atteindre pour 10 ans</label><br/>
				<input type="radio" name="r�ponseQ19" value="r3" id="r193" /> <label for="r193">fixe les objectifs �conomiques � atteindre et les moyens de les atteindre pour 5 ans</label>
			</p><br/>
			<p>
				<h5 class=question>20. Quelle est la priorit� �conomique de la planification ?</h5>
				<input type="radio" name="r�ponseQ20" value="r1" id="r201" /> <label for="r201">L�agriculture</label><br/>
				<input type="radio" name="r�ponseQ20" value="r2" id="r202" /> <label for="r202">L�industrie et surtout l�industrie des biens de consommation  pour les m�nages (v�tements, chaussures �) </label><br/>
				<input type="radio" name="r�ponseQ20" value="r3" id="r203" /> <label for="r203">L�industrie et surtout l�industrie lourde (ex : sid�rurgie) et l�industrie des biens d��quipement (machines-outils, camions, train �)</label><br/>
				<input type="radio" name="r�ponseQ20" value="r4" id="r204" /> <label for="r204">Le commerce </label>
			</p><br/> 
			<p>
				<h5 class=question>21. Que fait-on pour obtenir de meilleurs rendements des ouvriers (4 cases � cocher)</h5>
				<input type="checkbox" name="r�ponse211" id="r211" /> <label for="r211">On invite aux restaurants les meilleurs ouvriers</label><br />
				<input type="checkbox" name="r�ponse212" id="r212" /> <label for="r212">On utilise la propagande montrant comme un exemple le mineur Stakhanov qui bat des records d�extraction de charbon : c�est le stakhanovisme</label><br />
				<input type="checkbox" name="r�ponse213" id="r213" /> <label for="r213">On impose de longues journ�es de travail dans les usines</label><br />
				<input type="checkbox" name="r�ponse214" id="r214" /> <label for="r214">On impose une forte discipline et on surveille les ouvriers qui sont oblig�s d�avoir in livret de travail</label><br/>
				<input type="checkbox" name="r�ponse215" id="r215" /> <label for="r215">On r�tablit le salaire � la pi�ce</label>
			</p><br/>
			<p>
				<h5 class=question>22. L�industrialisation acc�l�r�e men�e dans les ann�es 1930 est une r�ussite (2 cases � cocher) ...</h5>
				<input type="checkbox" name="r�ponse221" id="r221" /> <label for="r221">Car les produits industriels sont de bonne qualit�</label><br />
				<input type="checkbox" name="r�ponse222" id="r222" /> <label for="r222">Car de nouvelles r�gions industrielles son cr��es dans l�Oural et en Sib�rie</label><br />
				<input type="checkbox" name="r�ponse223" id="r223" /> <label for="r223">Car l�U.R.S.S devient la 3�me puissance industrielle mondiale</label><br />
				<input type="checkbox" name="r�ponse224" id="r224" /> <label for="r224">Car les biens de consommation produits sont nombreux</label>
			</p><br/>
			<p>
				<h5 class=question>23. Au niveau politique, l� U.R.S.S de Staline est�</h5>
				<input type="radio" name="r�ponseQ23" value="r1" id="r231" /> <label for="r231">Une d�mocratie</label><br/>
				<input type="radio" name="r�ponseQ23" value="r2" id="r232" /> <label for="r232">Un r�gime totalitaire</label>
				<input type="radio" name="r�ponseQ23" value="r3" id="r233" /> <label for="r233">Une simple dictature</label>
			</p><br/>
			<p>
				<h5 class=question>24. L�U.R.S.S est un r�gime totalitaire car (5 cases � cocher) ...</h5>
				<input type="checkbox" name="r�ponse241" id="r241" /> <label for="r241">C�est le contr�le de tous les pouvoirs avec la censure (contr�le de la presse)et l�interdiction des autres partis politiques</label><br />
				<input type="checkbox" name="r�ponse242" id="r242" /> <label for="r242">Car une police politique (guepeou, puis NKVD, puis KGB) surveille chacun�</label><br />
				<input type="checkbox" name="r�ponse243" id="r243" /> <label for="r243">Car Staline et le parti communiste sont pr�sents partout � chaque instant de la vie d�un individu : au travail, � l��cole, dans les loisirs, au cin�ma�</label><br />
				<input type="checkbox" name="r�ponse244" id="r244" /> <label for="r244">Car on utilise la propagande pour manipuler les esprits et pour les soumettre au communisme et � Staline</label><br/>
				<input type="checkbox" name="r�ponse245" id="r245" /> <label for="r245">L�on essaye de ma�triser la totalit� de l�individu (non seulement le citoyen, mais aussi sa vie priv�e, son esprit)</label><br/>
				<input type="checkbox" name="r�ponse246" id="r246" /> <label for="r246">L�on encadre la population dans les organisations communistes (ex : les jeunesses communistes)</label>
			</p><br/> 
			<p>
				<h5 class=question>25. Comment Staline fait-il r�gner la terreur en URSS (2 cases � cocher) ?</h5>
				<input type="checkbox" name="r�ponse251" id="r251" /> <label for="r251">En se promenant arm�</label><br/>
				<input type="checkbox" name="r�ponse252" id="r252" /> <label for="r252">La police politique (guepeou, puis NKVD, puis KGB) surveille chacun� On se m�fie donc de son voisin� de sa famille qui peut vous d�noncer � la police politique !</label><br/>
				<input type="checkbox" name="r�ponse253" id="r253" /> <label for="r253">En d�portant dans des camps de concentration les opposants ou ceux qui semblent �tre une menace pour le pouvoir de Staline</label>
			</p><br/> 
			<p>
				<h5 class=question>26. Un camp de concentration sovi�tique est un �</h5>
				<input type="radio" name="r�ponseQ26" value="r1" id="r261" /> <label for="r261">Goulag</label><br/>
				<input type="radio" name="r�ponseQ26" value="r2" id="r262" /> <label for="r262">Koulak</label>
			</p><br/> 
			<p>
				<h5 class=question>27. Un habitant de l�U.R.S.S est ...</h5>
				<input type="radio" name="r�ponseQ27" value="r1" id="r271" /> <label for="r271">Un russe</label><br/>
				<input type="radio" name="r�ponseQ27" value="r2" id="r272" /> <label for="r272">Un soviet </label><br/>
				<input type="radio" name="r�ponseQ27" value="r3" id="r273" /> <label for="r273">Un sovi�tique</label>
			</p><br/>
			<p>
				<h5 class=question>28. Durant les ann�es 1936-1938, comment Staline va-t-il �liminer des hommes qui avaient jou� un r�le important durant la R�volution d�Octobre 1917 ?</h5>
				<input type="radio" name="r�ponseQ28" value="r1" id="r281" /> <label for="r281">Par des purges : les proc�s de Moscou</label><br />
				<input type="radio" name="r�ponseQ28" value="r2" id="r282" /> <label for="r282">En les faisant assassiner par des militaires</label>
			</p><br/> 
			<p>
				<h5 class=question>29. Que se passe-t-il pendant les proc�s de Moscou de 1936-1938 ?</h5>
				<input type="radio" name="r�ponseQ29" value="r1" id="r291" /> <label for="r291">Les membres importants du parti communiste sont accus�s d�avoir trahi le communisme. Bien qu�ils soient pour la plus part innocents, ils sont condamn�s � mort ou envoy�s en d�portation dans les goulags</label><br />
				<input type="radio" name="r�ponseQ29" value="r2" id="r292" /> <label for="r292">Les membres importants du parti communiste sont accus�s d�avoir trahi le communisme. Coupables, ils sont pour la plus part condamn�s � mort ou envoy�s en d�portation dans les goulags</label>
			</p><br/> 
			<p>
				<h5 class=question>30. Les proc�s de Moscou permettent � Staline d��tre le seul ma�tre du parti communiste et donc de l�U.R.S.S</h5>
				<input type="radio" name="r�ponseQ30" value="r1" id="r301" /> <label for="r301">Faux</label><br/>
				<input type="radio" name="r�ponseQ30" value="r2" id="r302" /> <label for="r302">Vrai</label>
			</p><br/>
			<p>
				<h5 class=question>31. Les 3 th�mes principaux de la propagande stalinienne sont (3 cases � cocher)</h5>
				<input type="checkbox" name="r�ponse311" id="r311" /> <label for="r311">Le patriotisme (= la grandeur de l�U.R.S.S)</label><br />
				<input type="checkbox" name="r�ponse312" id="r312" /> <label for="r312">Le communisme et � les r�ussites du communisme �</label><br />
				<input type="checkbox" name="r�ponse313" id="r313" /> <label for="r313">La d�mocratie</label><br />
				<input type="checkbox" name="r�ponse314" id="r314" /> <label for="r314">La sup�riorit� du capitalisme</label><br/>
				<input type="checkbox" name="r�ponse315" id="r315" /> <label for="r315">La personne de Staline</label>
			</p><br/> 
			<p>
				<h5 class=question>32. Qu�est-ce que le culte de la personnalit� (ou culte du chef) ?</h5>
				<input type="radio" name="r�ponseQ32" value="r1" id="r321" /> <label for="r321">C�est le fait de mettre un homme au dessus des autres hommes� presqu�un dieu</label><br />
				<input type="radio" name="r�ponseQ32" value="r2" id="r322" /> <label for="r322">C�est le fait d�inciter les gens � exprimer librement leur personnalit�</label>
			</p><br/> 
			<p>
				<h5 class=question>33. Quelle est la couleur du communisme que l�on retrouve sur le drapeau de l�U.R.S.S (2 cases � cocher) ?</h5>
				<input type="radio" name="r�ponseQ33" value="r1" id="r331" /> <label for="r331">Le noir </label><br />
				<input type="radio" name="r�ponseQ33" value="r2" id="r332" /> <label for="r332">Le rouge</label><br />
				<input type="radio" name="r�ponseQ33" value="r3" id="r333" /> <label for="r333">Le vert</label>
			</p><br/>
			<p>
				<h5 class=question>34. Quelles sont les deux formes entrelac�es sue l�on trouve sur le drapeau de l�U.R.S.S (2 cases � cocher) ?</h5>
				<input type="checkbox" name="r�ponse341" id="r341" /> <label for="r341">La faucille symbolisant les paysans</label><br />
				<input type="checkbox" name="r�ponse342" id="r342" /> <label for="r342">Le marteau symbolisant les ouvriers</label><br />
				<input type="checkbox" name="r�ponse343" id="r343" /> <label for="r343">Le croissant de lune symbolisant la puissance sovi�tique</label>
			</p><br/>
			
			<p>
				<input type="submit" /> <input type="reset" />
			</p>
		</form>
  	</div>

<?php include('bas.php'); ?>