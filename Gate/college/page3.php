<?php include('haut.php'); ?>

	<div id="corps">
		<h2>L'URSS</h2>
		<form method="post" action="traitement3.php">
			<p>
				<h5 class=question>1. Quelle est la situation en URSS après la guerre civile en 1921 ?</h5>
				<input type="radio" name="réponseQ1" value="r1" id="r11" /> <label for="r11">Catastrophique</label><br/>
				<input type="radio" name="réponseQ1" value="r2" id="r12" /> <label for="r12">Moyenne</label><br/>
				<input type="radio" name="réponseQ1" value="r3" id="r13" /> <label for="r13">Bonne</label>
			</p><br/> 
			<p>
				<h5 class=question>2. Quelle politique va donc mener Lénine pour permettre le redressement économique de L’ URSS après la guerre civile ?</h5>
				<input type="radio" name="réponseQ2" value="r1" id="r21" /> <label for="r21">La NEP</label><br />
				<input type="radio" name="réponseQ2" value="r2" id="r22" /> <label for="r22">Le communisme de guerre </label>
			</p><br/> 
			<p>
				<h5 class=question>3. Qu’est-ce que la NEP ?</h5>
				<input type="radio" name="réponseQ3" value="r1" id="r31" /> <label for="r31">Une nouvelle politique économique</label><br/>
				<input type="radio" name="réponseQ3" value="r2" id="r32" /> <label for="r32">Une nouvelle politique économique qui est un retour partiel au capitalisme</label><br/>
				<input type="radio" name="réponseQ3" value="r3" id="r33" /> <label for="r33">La collectivisation des terres et la nationalisation des entreprises</label>
			</p><br/> 
			<p>
				<h5 class=question>4. La NEP qui est un retour partiel au capitalisme permet (3 cases à cocher )</h5>
				<input type="checkbox" name="réponse41" id="r41" /> <label for="r41">La collectivisation des terres </label><br/>
				<input type="checkbox" name="réponse42" id="r42" /> <label for="r42">L’existence de petites entreprises industrielles et commerciales privées</label><br />
				<input type="checkbox" name="réponse43" id="r43" /> <label for="r43">nationalisation des petites entreprises industrielles et commerciales </label><br />
				<input type="checkbox" name="réponse44" id="r44" /> <label for="r44">Aux paysans de vendre leur surplus</label><br/>
				<input type="checkbox" name="réponse45" id="r45" /> <label for="r45">L’appel aux capitaux étrangers et aux ingénieurs étrangers</label>
			</p><br/>
			<p>
				<h5 class=question>5. La NEP permet le redressement économique de l’URSS</h5>
				<input type="radio" name="réponseQ5" value="r1" id="r51" /> <label for="r51">Vrai</label><br/>
				<input type="radio" name="réponseQ5" value="r2" id="r52" /> <label for="r52">Faux</label>
			</p><br/> 
			<p>
				<h5 class=question>6. A la mort de Lénine en 1924, quel homme réussit à s’imposer à la tete de l’URSS ?</h5>
				<input type="radio" name="réponseQ6" value="r1" id="r61" /> <label for="r61">Joseph Staline</label><br/>
				<input type="radio" name="réponseQ6" value="r2" id="r62" /> <label for="r62">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>7. La collectivisation est ...</h5>
				<input type="radio" name="réponseQ7" value="r1" id="r71" /> <label for="r71">La mise en commun des moyens de production et d’échanges , ce qui entraine la suppression de la propriété privée</label><br/>
				<input type="radio" name="réponseQ7" value="r2" id="r72" /> <label for="r72">La privatisation des biens collectifs</label>
			</p><br/> 
			<p>
				<h5 class=question>8. Staline va collectiviser l’économie soviétique en (2 cases à cocher) ...</h5>
				<input type="checkbox" name="réponse81" id="r81" /> <label for="r81">Faisant la collectivisation des terres agricoles</label><br/>
				<input type="checkbox" name="réponse82" id="r82" /> <label for="r82">Rendant les terres aux paysans</label><br/>
				<input type="checkbox" name="réponse83" id="r83" /> <label for="r83">Nationalisant  les entreprises industrielles et commerciales</label><br />
				<input type="checkbox" name="réponse84" id="r84" /> <label for="r84">Privatisant les entreprises industrielles et commerciales</label>
			</p><br/> 
			<p>
				<h5 class=question>9. Une nationalisation est le fait …</h5>
				<input type="radio" name="réponseQ9" value="r1" id="r91" /> <label for="r91">de supprimer les entreprises privées qui désormais appartiennent à l’Etat</label><br />
				<input type="radio" name="réponseQ9" value="r2" id="r92" /> <label for="r92">de supprimer les entreprises d’Etat qui désormais appartiennent à des personnes privées </label>
			</p><br/> 
			<p>
				<h5 class=question>10. La collectivisation des terres se fait…</h5>
				<input type="radio" name="réponseQ10" value="r1" id="r101" /> <label for="r101">en obligeant les paysans à se regrouper dans de vastes exploitations agricoles collectives : les kholkhozes et les sovkhozes en 1929</label><br />
				<input type="radio" name="réponseQ10" value="r2" id="r102" /> <label for="r102">en obligeant les paysans à se regrouper dans de vastes exploitations agricoles collectives : les kholkhozes et les sovkhozes en 1930</label>
			</p><br/>
			<p>
				<h5 class=question>11. Un kholkhoze est …</h5>
				<input type="radio" name="réponseQ11" value="r1" id="r111" /> <label for="r111">une grande ferme qui appartient à l’Etat  et qui emploie des salariés qui recoiventy un salaire fixe quelquesoit leur travail </label><br />
				<input type="radio" name="réponseQ11" value="r2" id="r112" /> <label for="r112">une exploitation agricole appartenant à un groupe de paysans qui ont mis en commun leurs  terres , leurs outils , leur bétail</label>
			</p><br/> 
			<p>
				<h5 class=question>12. Un sovkhoze est…</h5>
				<input type="radio" name="réponseQ12" value="r1" id="r121" /> <label for="r121">une exploitation agricole appartenant à un groupe de paysans qui ont mis en commun leurs terres, leurs outils, leur bétail</label><br />
				<input type="radio" name="réponseQ12" value="r2" id="r122" /> <label for="r122">une grande ferme qui appartient à l’Etat et qui emploie des salariés qui reçoivent  un salaire qui recoivent  un salaire fixe</label>
			</p><br/>
			<p>
				<h5 class=question>13. La collectivisation des terres …</h5>
				<input type="radio" name="réponseQ13" value="r1" id="r131" /> <label for="r131">va etre soutenue par les paysans </label><br />
				<input type="radio" name="réponseQ13" value="r2" id="r132" /> <label for="r132">entraine de vives résistances parmi les paysans : certains préférant abattre leur bétail …</label>
			</p><br/> 
			<p>
				<h5 class=question>14. Les koulaks sont les paysans …</h5>
				<input type="radio" name="réponseQ14" value="r1" id="r141" /> <label for="r141">qui sont pour la collectivisations </label><br />
				<input type="radio" name="réponseQ14" value="r2" id="r142" /> <label for="r142">Certains sont fusillés, d’autres sont déportés vers les camps de concentration (les Goulags )</label>
			</p><br/> 
			<p>
				<h5 class=question>15. Que fait-on aux koulaks et aux paysans opposés à la collectivisation ?</h5>
				<input type="radio" name="réponseQ15" value="r1" id="r151" /> <label for="r151">On leur redonne leur terre </label><br />
				<input type="radio" name="réponseQ15" value="r2" id="r152" /> <label for="r152">Certains sont fusillés , d’autres sont déportés vers des camps de concentration (les Goulags) </label>
			</p><br/> 
			<p>
				<h5 class=question>16. La collectivisation des terres est–elle une réussite ?</h5>
				<input type="radio" name="réponseQ16" value="r1" id="r161" /> <label for="r161">Non, car les kolkhozes sont mal équipés et les paysans y travaillent avec peu d’ardeur : c’est pourquoi la production agricole augmente peu pendant les années 1930</label><br />
				<input type="radio" name="réponseQ16" value="r2" id="r162" /> <label for="r162">Oui, car les kolkhozes sont équipes de matériel moderne et les paysans y travaillent beaucoup : c’est pourquoi la production agricole augmente beaucoup dans les années 1930</label>
			</p><br/> 
			<p>
				<h5 class=question>17. Qu’arrive t-il aux entreprises en URSS ?</h5>
				<input type="radio" name="réponseQ17" value="r1" id="r171" /> <label for="r171">Elles sont privatisées et donc appartiennent à des personnes privées </label><br />
				<input type="radio" name="réponseQ17" value="r2" id="r172" /> <label for="r172">Elles sont nationalisées et donc appartiennent à l’Etat</label>
			</p><br/> 
			<p>
				<h5 class=question>18. Grace à quoi l’Etat décide de tout en matière économique ?</h5>
				<input type="radio" name="réponseQ18" value="r1" id="r181" /> <label for="r181">Aux nationalisées des entreprises et à la planification</label><br />
				<input type="radio" name="réponseQ18" value="r2" id="r182" /> <label for="r182">Aux privatisations des entreprises et à une planification indicative</label>
			</p><br/> 
			<p>
				<h5 class=question>19. La planification quinquenale en URSS…</h5>
				<input type="radio" name="réponseQ19" value="r1" id="r191" /> <label for="r191">fixe les objectifs économiques à atteindre et les moyens de les atteindre pour 7 ans</label><br/>
				<input type="radio" name="réponseQ19" value="r2" id="r192" /> <label for="r192">fixe les objectifs économiques à atteindre et les moyens de les atteindre pour 10 ans</label><br/>
				<input type="radio" name="réponseQ19" value="r3" id="r193" /> <label for="r193">fixe les objectifs économiques à atteindre et les moyens de les atteindre pour 5 ans</label>
			</p><br/>
			<p>
				<h5 class=question>20. Quelle est la priorité économique de la planification ?</h5>
				<input type="radio" name="réponseQ20" value="r1" id="r201" /> <label for="r201">L’agriculture</label><br/>
				<input type="radio" name="réponseQ20" value="r2" id="r202" /> <label for="r202">L’industrie et surtout l’industrie des biens de consommation  pour les ménages (vêtements, chaussures …) </label><br/>
				<input type="radio" name="réponseQ20" value="r3" id="r203" /> <label for="r203">L’industrie et surtout l’industrie lourde (ex : sidérurgie) et l’industrie des biens d’équipement (machines-outils, camions, train …)</label><br/>
				<input type="radio" name="réponseQ20" value="r4" id="r204" /> <label for="r204">Le commerce </label>
			</p><br/> 
			<p>
				<h5 class=question>21. Que fait-on pour obtenir de meilleurs rendements des ouvriers (4 cases à cocher)</h5>
				<input type="checkbox" name="réponse211" id="r211" /> <label for="r211">On invite aux restaurants les meilleurs ouvriers</label><br />
				<input type="checkbox" name="réponse212" id="r212" /> <label for="r212">On utilise la propagande montrant comme un exemple le mineur Stakhanov qui bat des records d’extraction de charbon : c’est le stakhanovisme</label><br />
				<input type="checkbox" name="réponse213" id="r213" /> <label for="r213">On impose de longues journées de travail dans les usines</label><br />
				<input type="checkbox" name="réponse214" id="r214" /> <label for="r214">On impose une forte discipline et on surveille les ouvriers qui sont obligés d’avoir in livret de travail</label><br/>
				<input type="checkbox" name="réponse215" id="r215" /> <label for="r215">On rétablit le salaire à la pièce</label>
			</p><br/>
			<p>
				<h5 class=question>22. L’industrialisation accélérée menée dans les années 1930 est une réussite (2 cases à cocher) ...</h5>
				<input type="checkbox" name="réponse221" id="r221" /> <label for="r221">Car les produits industriels sont de bonne qualité</label><br />
				<input type="checkbox" name="réponse222" id="r222" /> <label for="r222">Car de nouvelles régions industrielles son créées dans l’Oural et en Sibérie</label><br />
				<input type="checkbox" name="réponse223" id="r223" /> <label for="r223">Car l’U.R.S.S devient la 3ème puissance industrielle mondiale</label><br />
				<input type="checkbox" name="réponse224" id="r224" /> <label for="r224">Car les biens de consommation produits sont nombreux</label>
			</p><br/>
			<p>
				<h5 class=question>23. Au niveau politique, l’ U.R.S.S de Staline est…</h5>
				<input type="radio" name="réponseQ23" value="r1" id="r231" /> <label for="r231">Une démocratie</label><br/>
				<input type="radio" name="réponseQ23" value="r2" id="r232" /> <label for="r232">Un régime totalitaire</label>
				<input type="radio" name="réponseQ23" value="r3" id="r233" /> <label for="r233">Une simple dictature</label>
			</p><br/>
			<p>
				<h5 class=question>24. L’U.R.S.S est un régime totalitaire car (5 cases à cocher) ...</h5>
				<input type="checkbox" name="réponse241" id="r241" /> <label for="r241">C’est le contrôle de tous les pouvoirs avec la censure (contrôle de la presse)et l’interdiction des autres partis politiques</label><br />
				<input type="checkbox" name="réponse242" id="r242" /> <label for="r242">Car une police politique (guepeou, puis NKVD, puis KGB) surveille chacun…</label><br />
				<input type="checkbox" name="réponse243" id="r243" /> <label for="r243">Car Staline et le parti communiste sont présents partout à chaque instant de la vie d’un individu : au travail, à l’école, dans les loisirs, au cinéma…</label><br />
				<input type="checkbox" name="réponse244" id="r244" /> <label for="r244">Car on utilise la propagande pour manipuler les esprits et pour les soumettre au communisme et à Staline</label><br/>
				<input type="checkbox" name="réponse245" id="r245" /> <label for="r245">L’on essaye de maîtriser la totalité de l’individu (non seulement le citoyen, mais aussi sa vie privée, son esprit)</label><br/>
				<input type="checkbox" name="réponse246" id="r246" /> <label for="r246">L’on encadre la population dans les organisations communistes (ex : les jeunesses communistes)</label>
			</p><br/> 
			<p>
				<h5 class=question>25. Comment Staline fait-il régner la terreur en URSS (2 cases à cocher) ?</h5>
				<input type="checkbox" name="réponse251" id="r251" /> <label for="r251">En se promenant armé</label><br/>
				<input type="checkbox" name="réponse252" id="r252" /> <label for="r252">La police politique (guepeou, puis NKVD, puis KGB) surveille chacun… On se méfie donc de son voisin… de sa famille qui peut vous dénoncer à la police politique !</label><br/>
				<input type="checkbox" name="réponse253" id="r253" /> <label for="r253">En déportant dans des camps de concentration les opposants ou ceux qui semblent être une menace pour le pouvoir de Staline</label>
			</p><br/> 
			<p>
				<h5 class=question>26. Un camp de concentration soviétique est un …</h5>
				<input type="radio" name="réponseQ26" value="r1" id="r261" /> <label for="r261">Goulag</label><br/>
				<input type="radio" name="réponseQ26" value="r2" id="r262" /> <label for="r262">Koulak</label>
			</p><br/> 
			<p>
				<h5 class=question>27. Un habitant de l’U.R.S.S est ...</h5>
				<input type="radio" name="réponseQ27" value="r1" id="r271" /> <label for="r271">Un russe</label><br/>
				<input type="radio" name="réponseQ27" value="r2" id="r272" /> <label for="r272">Un soviet </label><br/>
				<input type="radio" name="réponseQ27" value="r3" id="r273" /> <label for="r273">Un soviétique</label>
			</p><br/>
			<p>
				<h5 class=question>28. Durant les années 1936-1938, comment Staline va-t-il éliminer des hommes qui avaient joué un rôle important durant la Révolution d’Octobre 1917 ?</h5>
				<input type="radio" name="réponseQ28" value="r1" id="r281" /> <label for="r281">Par des purges : les procès de Moscou</label><br />
				<input type="radio" name="réponseQ28" value="r2" id="r282" /> <label for="r282">En les faisant assassiner par des militaires</label>
			</p><br/> 
			<p>
				<h5 class=question>29. Que se passe-t-il pendant les procès de Moscou de 1936-1938 ?</h5>
				<input type="radio" name="réponseQ29" value="r1" id="r291" /> <label for="r291">Les membres importants du parti communiste sont accusés d’avoir trahi le communisme. Bien qu’ils soient pour la plus part innocents, ils sont condamnés à mort ou envoyés en déportation dans les goulags</label><br />
				<input type="radio" name="réponseQ29" value="r2" id="r292" /> <label for="r292">Les membres importants du parti communiste sont accusés d’avoir trahi le communisme. Coupables, ils sont pour la plus part condamnés à mort ou envoyés en déportation dans les goulags</label>
			</p><br/> 
			<p>
				<h5 class=question>30. Les procès de Moscou permettent à Staline d’être le seul maître du parti communiste et donc de l’U.R.S.S</h5>
				<input type="radio" name="réponseQ30" value="r1" id="r301" /> <label for="r301">Faux</label><br/>
				<input type="radio" name="réponseQ30" value="r2" id="r302" /> <label for="r302">Vrai</label>
			</p><br/>
			<p>
				<h5 class=question>31. Les 3 thèmes principaux de la propagande stalinienne sont (3 cases à cocher)</h5>
				<input type="checkbox" name="réponse311" id="r311" /> <label for="r311">Le patriotisme (= la grandeur de l’U.R.S.S)</label><br />
				<input type="checkbox" name="réponse312" id="r312" /> <label for="r312">Le communisme et « les réussites du communisme »</label><br />
				<input type="checkbox" name="réponse313" id="r313" /> <label for="r313">La démocratie</label><br />
				<input type="checkbox" name="réponse314" id="r314" /> <label for="r314">La supériorité du capitalisme</label><br/>
				<input type="checkbox" name="réponse315" id="r315" /> <label for="r315">La personne de Staline</label>
			</p><br/> 
			<p>
				<h5 class=question>32. Qu’est-ce que le culte de la personnalité (ou culte du chef) ?</h5>
				<input type="radio" name="réponseQ32" value="r1" id="r321" /> <label for="r321">C’est le fait de mettre un homme au dessus des autres hommes… presqu’un dieu</label><br />
				<input type="radio" name="réponseQ32" value="r2" id="r322" /> <label for="r322">C’est le fait d’inciter les gens à exprimer librement leur personnalité</label>
			</p><br/> 
			<p>
				<h5 class=question>33. Quelle est la couleur du communisme que l’on retrouve sur le drapeau de l’U.R.S.S (2 cases à cocher) ?</h5>
				<input type="radio" name="réponseQ33" value="r1" id="r331" /> <label for="r331">Le noir </label><br />
				<input type="radio" name="réponseQ33" value="r2" id="r332" /> <label for="r332">Le rouge</label><br />
				<input type="radio" name="réponseQ33" value="r3" id="r333" /> <label for="r333">Le vert</label>
			</p><br/>
			<p>
				<h5 class=question>34. Quelles sont les deux formes entrelacées sue l’on trouve sur le drapeau de l’U.R.S.S (2 cases à cocher) ?</h5>
				<input type="checkbox" name="réponse341" id="r341" /> <label for="r341">La faucille symbolisant les paysans</label><br />
				<input type="checkbox" name="réponse342" id="r342" /> <label for="r342">Le marteau symbolisant les ouvriers</label><br />
				<input type="checkbox" name="réponse343" id="r343" /> <label for="r343">Le croissant de lune symbolisant la puissance soviétique</label>
			</p><br/>
			
			<p>
				<input type="submit" /> <input type="reset" />
			</p>
		</form>
  	</div>

<?php include('bas.php'); ?>