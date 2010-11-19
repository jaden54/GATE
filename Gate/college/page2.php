<?php include('haut.php'); ?>

	<div id="corps">
		<h2>Les transformations économiques et sociales depuis 1945</h2>
		<form method="post" action="traitement2.php">
			<p>
				<h5 class=question>1. Définition de PNB</h5>
				<input type="radio" name="réponseQ1" value="r1" id="r11" /> <label for="r11">C’est le Produit National Brut qui est l’ensemble des richesses produites par les entreprises à l’intérieur d’un pays y compris dans les entreprises étrangers.</label><br />
				<input type="radio" name="réponseQ1" value="r2" id="r12" /> <label for="r12">C’est le Produit National Brut.</label><br />
				<input type="radio" name="réponseQ1" value="r3" id="r13" /> <label for="r13">C’est le Produit National Brut qui est l’ensemble des richesses produites par les entreprises d’un pays y compris dans les pays étrangers.</label>
			</p><br/> 
			<p>
				<h5 class=question>2. Définition de population active</h5>
				<input type="radio" name="réponseQ2" value="r1" id="r21" /> <label for="r21">C’est la population qui travaille.</label><br />
				<input type="radio" name="réponseQ2" value="r2" id="r22" /> <label for="r22">C’est la population qui travaille ou qui est à la recherche d’un emploi (= chômeurs).</label>
			</p><br/> 
			<p>
				<h5 class=question>3. Qu’est-ce que la croissance économique ?</h5>
				<input type="radio" name="réponseQ3" value="r1" id="r31" /> <label for="r31">C’est l’évolution de la production, elle augmente, ou elle baisse, ou elle stagne entre deux dates.</label><br />
				<input type="radio" name="réponseQ3" value="r2" id="r32" /> <label for="r32">C’est l’augmentation de la production.</label>
			</p><br/> 
			<p>
				<h5 class=question>4. Comment est la croissance économique dans les pays développés de 1945 à 1973 ?</h5>
				<input type="radio" name="réponseQ4" value="r1" id="r41" /> <label for="r41">Une forte augmentation.</label><br />
				<input type="radio" name="réponseQ4" value="r2" id="r42" /> <label for="r42">Une faible augmentation.</label><br />
				<input type="radio" name="réponseQ4" value="r3" id="r43" /> <label for="r43">Une faible baisse.</label><br />
				<input type="radio" name="réponseQ4" value="r4" id="r44" /> <label for="r44">Une forte baisse.</label>
			</p><br/> 
			<p>
				<h5 class=question>5. Comment appelle t-on  la forte croissance économique de 1945 à 1973 ?</h5>
				<input type="radio" name="réponseQ5" value="r1" id="r51" /> <label for="r51">Les trente glorieuses.</label><br />
				<input type="radio" name="réponseQ5" value="r2" id="r52" /> <label for="r52">Les Trente Glorieuses.</label><br />
				<input type="radio" name="réponseQ5" value="r3" id="r53" /> <label for="r53">Les vingt dépiteuses.</label><br />
				<input type="radio" name="réponseQ5" value="r4" id="r54" /> <label for="r54">Les Trentes Glorieuses.</label>
			</p><br/> 
			<p>
				<h5 class=question>6. Quelles sont les causes de la forte croissance économique de 1945 à 1973 ? ( 5 cases à cocher)</h5>
				<input type="checkbox" name="réponseQ6" id="r61" /> <label for="r61">Les investissements de l’Etat.</label><br />
				<input type="checkbox" name="réponseQ6" id="r62" /> <label for="r62">Faible coût de l’énergie.</label><br />
				<input type="checkbox" name="réponseQ6" id="r63" /> <label for="r63">La concentration des entreprises qui permet d’utiliser de nouvelles techniques et de nouvelles méthodes de travail  (travail à la chaîne).</label><br />
				<input type="checkbox" name="réponseQ6" id="r64" /> <label for="r64">L’augmentation de la consommation due au baby-boom, à la hausse des salaires et au développement de la publicité et du crédit.</label><br/>
				<input type="checkbox" name="réponseQ6" id="r65" /> <label for="r65">L’amélioration du niveau de vie.</label><br/>
				<input type="checkbox" name="réponseQ6" id="r66" /> <label for="r66">Le développement du commerce mondial grâce aux progrès des transports et à la baisse des droits de douane.</label>
			</p><br/>
			<p>
				<h5 class=question>7. Que se passe t-il pour la croissance économique après 1973 ?</h5>
				<input type="radio" name="réponseQ7" value="r1" id="r71" /> <label for="r71">Il y a un ralentissement de la croissance économique : c’est la crise économique.</label><br />
				<input type="radio" name="réponseQ7" value="r2" id="r72" /> <label for="r72">Il y a une forte augmentation de la croissance économique : c’est la crise sociale.</label>
			</p><br/> 
			<p>
				<h5 class=question>8. Quelle est la conséquence sociale du ralentissement de la croissance économique à partir de 1973 ?</h5>
				<input type="radio" name="réponseQ8" value="r1" id="r81" /> <label for="r81">Une baisse du chômage de la population active.</label><br />
				<input type="radio" name="réponseQ8" value="r2" id="r82" /> <label for="r82">Une forte augmentation du chômage de la population active.</label>
			</p><br/> 
			<p>
				<h5 class=question>9. Quelles sont les causes du ralentissement de la croissance économique depuis 1973 dans les pays développés ? (4 cases à cocher)</h5>
				<input type="checkbox" name="réponseQ9" id="r91" /> <label for="r91">La baisse des profits des entreprises.</label><br />
				<input type="checkbox" name="réponseQ9" id="r92" /> <label for="r92">La crise sociale (= augmentation du chômage).</label><br />
				<input type="checkbox" name="réponseQ9" id="r93" /> <label for="r93">L’augmentation du prix du pétrole : 1er choc pétrolier en 1973 et 2ème choc pétrolier en 1979.</label><br />
				<input type="checkbox" name="réponseQ9" id="r94" /> <label for="r94">La stagnation ou la baisse de la demande de certains biens de consommation car les ménages sont déjà équipés.</label><br/>
				<input type="checkbox" name="réponseQ9" id="r95" /> <label for="r95">La concurrence des Nouveaux Pays Industriels (NPI).</label>
			</p><br/>
			<p>
				<h5 class=question>10. Quels sont les secteurs économiques les plus touchés par la crises économique à partir de 1973 dans les pays développés ?</h5>
				<input type="radio" name="réponseQ10" value="r1" id="r101" /> <label for="r101">Les industries traditionnelles (sidérurgie, charbon, textile, construction navale).</label><br />
				<input type="radio" name="réponseQ10" value="r2" id="r102" /> <label for="r102">Les industries de haute technologie (biotechnologie, électronique, informatique…).</label>
			</p><br/> 
			<p>
				<h5 class=question>11. Quelles sont les industries qui ont connu un développement malgré la crise économique ?</h5>
				<input type="radio" name="réponseQ11" value="r1" id="r111" /> <label for="r111">Les industries traditionnelles (sidérurgie, charbon, textile, construction navale).</label><br />
				<input type="radio" name="réponseQ11" value="r2" id="r112" /> <label for="r112">Les industries de haute technologie (biotechnologie, électronique, informatique…).</label>
			</p><br/> 
			<p>
				<h5 class=question>12. Quelle est la conséquence de la hausse globale de croissance économique sur le niveau de vie des pays développés depuis 1945 ?</h5>
				<input type="radio" name="réponseQ12" value="r1" id="r121" /> <label for="r121">Dégradation du niveau de vie (baisse de la consommation).</label><br />
				<input type="radio" name="réponseQ12" value="r2" id="r122" /> <label for="r122">Amélioration du niveau de vie (hausse de la consommation depuis 1945).</label>
			</p><br/>
			<p>
				<h5 class=question>13. Quelle est l’évolution de la population active de l’agriculture de 1945 à nos jours dans les pays développés ?</h5>
				<input type="radio" name="réponseQ13" value="r1" id="r131" /> <label for="r131">Une faible évolution .</label><br />
				<input type="radio" name="réponseQ13" value="r2" id="r132" /> <label for="r132">Une baisse.</label><br />
				<input type="radio" name="réponseQ13" value="r3" id="r133" /> <label for="r133">Une forte évolution.</label><br />
				<input type="radio" name="réponseQ13" value="r4" id="r134" /> <label for="r134">Une stagnation.</label><br/>
				<input type="radio" name="réponseQ13" value="r5" id="r135" /> <label for="r135">Une augmentation.</label>
			</p><br/> 
			<p>
				<h5 class=question>14. Quelle est la cause de la baisse des effectifs dans l’agriculture dans les pays  développés depuis 1945 ?</h5>
				<input type="radio" name="réponseQ14" value="r1" id="r141" /> <label for="r141">La mécanisation de l’agriculture.</label><br />
				<input type="radio" name="réponseQ14" value="r2" id="r142" /> <label for="r142">Le refus de travailler dans une ferme.</label>
			</p><br/> 
			<p>
				<h5 class=question>15. Quelle est l’évolution des emplois industriels depuis 1945 dans les pays développés ?</h5>
				<input type="radio" name="réponseQ15" value="r1" id="r151" /> <label for="r151">Une faible évolution .</label><br />
				<input type="radio" name="réponseQ15" value="r2" id="r152" /> <label for="r152">Une stagnation.</label><br />
				<input type="radio" name="réponseQ15" value="r3" id="r153" /> <label for="r153">Une baisse.</label><br />
				<input type="radio" name="réponseQ15" value="r4" id="r154" /> <label for="r154">Une hausse.</label>
			</p><br/> 
			<p>
				<h5 class=question>16. A quoi est due la baisse des effectifs industriels dans les pays développés depuis 1945 ?</h5>
				<input type="radio" name="réponseQ16" value="r1" id="r161" /> <label for="r161">La crise des industries de haute technologie qui avaient besoin de beaucoup de main d’œuvre.</label><br />
				<input type="radio" name="réponseQ16" value="r2" id="r162" /> <label for="r162">La crise des industries traditionnelles qui avaient besoin de beaucoup de main d’œuvre à la délocalisation des industries dans les pays à faible coût de la main d’œuvre.</label>
			</p><br/> 
			<p>
				<h5 class=question>17. Quelle est l’évolution des emplois du secteur tertiaire (services, commerce…) depuis 1945 dans les pays développés ?</h5>
				<input type="radio" name="réponseQ17" value="r1" id="r171" /> <label for="r171">Une faible évolution .</label><br />
				<input type="radio" name="réponseQ17" value="r2" id="r172" /> <label for="r172">Une stagnation.</label><br />
				<input type="radio" name="réponseQ17" value="r3" id="r173" /> <label for="r173">Une baisse.</label><br />
				<input type="radio" name="réponseQ17" value="r4" id="r174" /> <label for="r174">Une hausse.</label>
			</p><br/> 
			<p>
				<h5 class=question>18. A quoi est due la forte augmentation des emplois de services depuis 1945 dans les pays développés ?</h5>
				<input type="radio" name="réponseQ18" value="r1" id="r181" /> <label for="r181">A la diminution du temps de travail augmentant les dépenses de loisir.</label><br />
				<input type="radio" name="réponseQ18" value="r2" id="r182" /> <label for="r182">A la hausse du niveau de vie liée a la croissance économique.</label><br />
				<input type="radio" name="réponseQ18" value="r3" id="r183" /> <label for="r183">A la baisse des impôts.</label>
			</p><br/> 
			<p>
				<h5 class=question>19. Quels sont les changements de mode de vie qui apparaissent depuis 1945 dans les pays développés ?</h5>
				<input type="checkbox" name="réponseQ19" id="r191" /> <label for="r191">Consommation de masse où les produits standardisés remplacent les produits artisanaux.</label><br />
				<input type="checkbox" name="réponseQ19" id="r192" /> <label for="r192">Diminution du temps de travail et donc plus de temps pour les loisirs.</label><br />
				<input type="checkbox" name="réponseQ19" id="r193" /> <label for="r193">Le modèle français de consommation s’impose dans le monde.</label><br />
				<input type="checkbox" name="réponseQ19" id="r194" /> <label for="r194">Population plus mobile grâce aux nombreux transports rapides.</label><br/>
				<input type="checkbox" name="réponseQ19" id="r195" /> <label for="r195">Travail des femmes.</label><br/>
				<input type="checkbox" name="réponseQ19" id="r196" /> <label for="r196">Uniformisation des modes de vie par les médias et la publicité.</label>
			</p><br/>
			<p>
				<h5 class=question>20. Quel pays est le modèle de la consommation de masse qui s’impose aux autres pays ?</h5>
				<input type="radio" name="réponseQ20" value="r1" id="r201" /> <label for="r201">Le modèle français.</label><br />
				<input type="radio" name="réponseQ20" value="r2" id="r202" /> <label for="r202">Le modèle américain.</label><br />
				<input type="radio" name="réponseQ20" value="r3" id="r203" /> <label for="r203">Le modèle allemand.</label><br />
				<input type="radio" name="réponseQ20" value="r4" id="r204" /> <label for="r204">Le modèle anglais.</label>
			</p><br/> 
			<p>
				<h5 class=question>21. Que remarque-t-on quant aux changements des pratiques culturelles des pays développés depuis 1945?</h5>
				<input type="checkbox" name="réponseQ21" id="r211" /> <label for="r211">La lecture recule.</label><br />
				<input type="checkbox" name="réponseQ21" id="r212" /> <label for="r212">La télévision et la radio deviennent les principaux moyens de diffusion de la culture.</label><br />
				<input type="checkbox" name="réponseQ21" id="r213" /> <label for="r213">Augmentation des promenades le dimanche, plus de lecture.</label><br />
				<input type="checkbox" name="réponseQ21" id="r214" /> <label for="r214">Le modèle de vie anglo-saxon (musique, vêtements…).</label>
			</p><br/>
			<p>
				<h5 class=question>22. Si globalement, la société connaît une augmentation du niveau de vie depuis 1945, la crise des années 73-90 est responsable de l’apparition d’une nouvelle pauvreté liée au chômage ?</h5>
				<input type="radio" name="réponseQ22" value="r1" id="r221" /> <label for="r221">Vrai</label><br/>
				<input type="radio" name="réponseQ22" value="r2" id="r222" /> <label for="r222">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>23. Dans les pays en développement, qui bénéficie de la croissance ?</h5>
				<input type="radio" name="réponseQ23" value="r1" id="r231" /> <label for="r231">Seule une minorité.</label><br/>
				<input type="radio" name="réponseQ23" value="r2" id="r232" /> <label for="r232">La majorité.</label>
			</p><br/>
			<p>
				<h5 class=question>24. Le taux de natalité est …</h5>
				<input type="radio" name="réponseQ24" value="r1" id="r241" /> <label for="r241">Le nombre de naissances en un an pour mille habitants, il est exprimé en ‰</label><br />
				<input type="radio" name="réponseQ24" value="r2" id="r242" /> <label for="r242">Le nombre de naissances en un an pour cent habitants, il est exprimé en %</label><br />
				<input type="radio" name="réponseQ24" value="r3" id="r243" /> <label for="r243">Le nombre de naissances en un an pour mille habitants, il est exprimé en %</label>
			</p><br/> 
			<p>
				<h5 class=question>25. Le taux de mortalité est …</h5>
				<input type="radio" name="réponseQ25" value="r1" id="r251" /> <label for="r251">Le nombre de décès en un an pour mille habitants, il est exprimé en %</label><br />
				<input type="radio" name="réponseQ25" value="r2" id="r252" /> <label for="r252">Le nombre de décès en un an pour cent habitants, il est exprimé en %</label><br />
				<input type="radio" name="réponseQ25" value="r3" id="r253" /> <label for="r253">Le nombre de décès en un an pour mille habitants, il est exprimé en ‰</label>
			</p><br/> 
			<p>
				<h5 class=question>26. Le taux d’accroissement naturel est …</h5>
				<input type="radio" name="réponseQ26" value="r1" id="r261" /> <label for="r261">La différence entre le taux de natalité et le taux de mortalité, on le calcule en faisant taux de mortalité moins taux de natalité </label><br />
				<input type="radio" name="réponseQ26" value="r2" id="r262" /> <label for="r262">La différence entre le taux de natalité et le taux de mortalité, on le calcule en faisant taux de natalité moins taux de mortalité</label><br />
				<input type="radio" name="réponseQ26" value="r3" id="r263" /> <label for="r263">La différence entre les naissances et les décès</label>
			</p><br/> 
			<p>
				<h5 class=question>27. L’accroissement naturel est …</h5>
				<input type="radio" name="réponseQ27" value="r1" id="r271" /> <label for="r271">La différence entre les naissances et les décès. Si le solde naturel est positif, il y a plus de naissances</label><br/>
				<input type="radio" name="réponseQ27" value="r2" id="r272" /> <label for="r272">La différence entre les naissances et les décès. Si le solde naturel est négatif,il y a plus de naissances</label>
			</p><br/>
			<p>
				<h5 class=question>28. Le taux de mortalité infantile est …</h5>
				<input type="radio" name="réponseQ28" value="r1" id="r281" /> <label for="r281">Le nombre d’enfants morts avant l’âge de 1 an sur mille naissances en un an .Il est exprimé en ‰</label><br />
				<input type="radio" name="réponseQ28" value="r2" id="r282" /> <label for="r282">Le nombre d’enfants morts avant l’âge de 1 an sur mille naissances en un an .Il est exprimé en %</label><br />
				<input type="radio" name="réponseQ28" value="r3" id="r283" /> <label for="r283">Le nombre d’enfants morts avant l’âge de 20 ans sur mille naissances en un an .Il est exprimé en ‰</label>
			</p><br/> 
			<p>
				<h5 class=question>29. L’indice de fécondité est …</h5>
				<input type="radio" name="réponseQ29" value="r1" id="r291" /> <label for="r291">Le nombre moyen d’enfants par femme. Il ne peut pas être un nombre avec une virgule (ex : 1,7)</label><br />
				<input type="radio" name="réponseQ29" value="r2" id="r292" /> <label for="r292">Le nombre moyen d’enfants par femme. Il peut être un nombre avec une virgule (ex : 1,7)</label><br />
				<input type="radio" name="réponseQ29" value="r3" id="r293" /> <label for="r293">Le nombre moyen de femmes par enfants. Il ne peut pas être un nombre avec une virgule (ex : 1,7)</label>
			</p><br/> 
			<p>
				<h5 class=question>30. Quelles sont les affirmations vraies ?</h5>
				<input type="checkbox" name="réponseQ30" id="r301" /> <label for="r301">Les pays du sud ont un faible accroissement naturel</label><br />
				<input type="checkbox" name="réponseQ30" id="r302" /> <label for="r302">Les pays du nord ont un faible accroissement naturel</label><br />
				<input type="checkbox" name="réponseQ30" id="r303" /> <label for="r303">Les pays du sud ont un fort accroissement naturel</label><br />
				<input type="checkbox" name="réponseQ30" id="r304" /> <label for="r304">Les pays du sud ont un fort accroissement naturel</label>
			</p><br/>
			<p>
				<h5 class=question>31. Sur quel continent trouve-t-on les plus forts accroissements naturels ?</h5>
				<input type="radio" name="réponseQ31" value="r1" id="r311" /> <label for="r311">Chine </label><br />
				<input type="radio" name="réponseQ31" value="r2" id="r312" /> <label for="r312">Asie</label><br />
				<input type="radio" name="réponseQ31" value="r3" id="r313" /> <label for="r313">Amérique</label><br />
				<input type="radio" name="réponseQ31" value="r4" id="r314" /> <label for="r314">Océanie</label><br/>
				<input type="radio" name="réponseQ31" value="r5" id="r315" /> <label for="r315">Afrique</label><br/>
				<input type="radio" name="réponseQ31" value="r6" id="r316" /> <label for="r316">Europe</label>
			</p><br/> 
			<p>
				<h5 class=question>32. Comment appelle-t-on la forte natalité de 1945 aux années 1960 ?</h5>
				<input type="radio" name="réponseQ32" value="r1" id="r321" /> <label for="r321">Le papy boom</label><br />
				<input type="radio" name="réponseQ32" value="r2" id="r322" /> <label for="r322">Le baby  boom</label><br />
				<input type="radio" name="réponseQ32" value="r3" id="r323" /> <label for="r323">L’explosion enfantine</label>
			</p><br/> 
			<p>
				<h5 class=question>33. Quelle est la cause du faible accroissement naturel actuel des pays développés ?</h5>
				<input type="radio" name="réponseQ33" value="r1" id="r331" /> <label for="r331">La faible croissance démographique</label><br />
				<input type="radio" name="réponseQ33" value="r2" id="r332" /> <label for="r332">La faible natalité liée à une faible fécondité</label><br />
				<input type="radio" name="réponseQ33" value="r3" id="r333" /> <label for="r333">La forte mortalité</label><br />
				<input type="radio" name="réponseQ33" value="r4" id="r334" /> <label for="r334">La forte natalité</label>
			</p><br/>
			<p>
				<h5 class=question>34. Quelles sont les causes principales de la baisse de la natalité et de la faible fécondité dans les pays développés (plusieurs cases à cocher) ?</h5>
				<input type="checkbox" name="réponseQ34" id="r341" /> <label for="r341">La forte stérilité des femmes des pays développés.</label><br />
				<input type="checkbox" name="réponseQ34" id="r342" /> <label for="r342">Le faible accroissement naturel.</label><br />
				<input type="checkbox" name="réponseQ34" id="r343" /> <label for="r343">Le travail des femmes.</label><br />
				<input type="checkbox" name="réponseQ34" id="r344" /> <label for="r344">Utilisation de la contraception.</label>
			</p><br/>
			<p>
				<h5 class=question>35. Quelles sont les causes de la baisse de la mortalité depuis 1950 dans les pays développés ? (2 cases à cocher)</h5>
				<input type="checkbox" name="réponseQ35" id="r351" /> <label for="r351">Vieillissement de la population.</label><br />
				<input type="checkbox" name="réponseQ35" id="r352" /> <label for="r352">Amélioration du niveau de vie.</label><br />
				<input type="checkbox" name="réponseQ35" id="r353" /> <label for="r353">Progrès de la médecine.</label>
			</p><br/>
			<p>
				<h5 class=question>36. Quelle est la conséquence de la baisse de la mortalité depuis 1950 dans les pays développés ?</h5>
				<input type="radio" name="réponseQ36" value="r1" id="r361" /> <label for="r361">Meilleure alimentation.</label><br />
				<input type="radio" name="réponseQ36" value="r2" id="r362" /> <label for="r362">Progrès de la médecine.</label><br />
				<input type="radio" name="réponseQ36" value="r3" id="r363" /> <label for="r363">Allongement de l’espérance de vie.</label>
			</p><br/> 
			<p>
				<h5 class=question>37. Dans les pays développés, il y a :</h5>
				<input type="radio" name="réponseQ37" value="r1" id="r371" /> <label for="r371">Une population jeune.</label><br/>
				<input type="radio" name="réponseQ37" value="r2" id="r372" /> <label for="r372">Un vieillissement de la population.</label>
			</p><br/>
			<p>
				<h5 class=question>38. Comment appelle-t-on le vieillissement de la population des pays développés ?</h5>
				<input type="radio" name="réponseQ38" value="r1" id="r381" /> <label for="r381">Le baby boom</label><br />
				<input type="radio" name="réponseQ38" value="r2" id="r382" /> <label for="r382">Le paby boom</label><br />
				<input type="radio" name="réponseQ38" value="r3" id="r383" /> <label for="r383">Le grisonnement de la population </label>
			</p><br/> 
			<p>
				<h5 class=question>39. Pourquoi y a-t-il un vieillissement de la population dans les pays développés ?</h5>
				<input type="radio" name="réponseQ39" value="r1" id="r391" /> <label for="r391">Uniquement la faible natalité.</label><br />
				<input type="radio" name="réponseQ39" value="r2" id="r392" /> <label for="r392">Uniquement l’allongement de l’espérance.</label><br />
				<input type="radio" name="réponseQ39" value="r3" id="r393" /> <label for="r393">C’est du à l’allongement de l’espérance de vie et à la faible natalité.</label>
			</p><br/> 
			<p>
				<h5 class=question>40. Quelle affirmation est vraie ?</h5>
				<input type="radio" name="réponseQ40" value="r1" id="r401" /> <label for="r401">Le faible accroissement naturel explique la faible croissance démographique des pays développés.</label><br/>
				<input type="radio" name="réponseQ40" value="r2" id="r402" /> <label for="r402">La baisse de la mortalité depuis 1950 explique la faible croissance démographique pays développés.</label>
			</p><br/>
			<p>
				<h5 class=question>41. Dans les pays en développement, il y a </h5>
				<input type="radio" name="réponseQ41" value="r1" id="r411" /> <label for="r411">Une faible croissance démographique.</label><br/>
				<input type="radio" name="réponseQ41" value="r2" id="r412" /> <label for="r412">Une forte croissance démographique.</label>
			</p><br/>
			<p>
				<h5 class=question>42. Pourquoi y-t-il une forte croissance démographique dans les pays du Sud ?</h5>
				<input type="radio" name="réponseQ42" value="r1" id="r421" /> <label for="r421">A cause d’un faible accroissement naturel.</label><br/>
				<input type="radio" name="réponseQ42" value="r2" id="r422" /> <label for="r422">A cause d’un fort accroissement naturel.</label>
			</p><br/>
			<p>
				<h5 class=question>43. Pourquoi y a-t-il un fort accroissement naturel dans les pays du Sud ? (plusieurs cases à cocher)</h5>
				<input type="checkbox" name="réponseQ43" id="r431" /> <label for="r431">A cause de la forte natalité.</label><br />
				<input type="checkbox" name="réponseQ43" id="r432" /> <label for="r432">A cause de la forte croissance démographique.</label><br />
				<input type="checkbox" name="réponseQ43" id="r433" /> <label for="r433">A cause de la baisse de mortalité depuis 1950.</label>
			</p><br/>
			<p>
				<h5 class=question>44. Pourquoi y a-t-il une forte natalité dans les pays du Sud ? (plusieurs cases à cocher).</h5>
				<input type="checkbox" name="réponseQ44" id="r441" /> <label for="r441">La contraception peu ou mal utilisée.</label><br />
				<input type="checkbox" name="réponseQ44" id="r442" /> <label for="r442">Le fort accroissement naturel.</label><br />
				<input type="checkbox" name="réponseQ44" id="r443" /> <label for="r443">Les enfants sont une garantie pour l’avenir et une source de revenus.</label>
			</p><br/>
			<p>
				<h5 class=question>45. Pourquoi y a-t-il une baisse de la mortalité depuis 1950 dans les pays du Sud ? (plusieurs cases à cocher).</h5>
				<input type="checkbox" name="réponseQ45" id="r451" /> <label for="r451">Meilleures conditions climatiques.</label><br />
				<input type="checkbox" name="réponseQ45" id="r452" /> <label for="r452">Progrès de la médecine.</label><br />
				<input type="checkbox" name="réponseQ45" id="r453" /> <label for="r453">Meilleure alimentation.</label>
			</p><br/>
			<p>
				<h5 class=question>46. Quelles sont les problèmes que pose la forte croissance démographique des pays en développement ? (plusieurs cases à cocher).</h5>
				<input type="checkbox" name="réponseQ46" id="r461" /> <label for="r461">Problème du vieillissement de la population.</label><br />
				<input type="checkbox" name="réponseQ46" id="r462" /> <label for="r462">Problème de logement.</label><br />
				<input type="checkbox" name="réponseQ46" id="r463" /> <label for="r463">Problème de chômage.</label><br/>
				<input type="checkbox" name="réponseQ46" id="r464" /> <label for="r464">Problème de scolarisation des nombreux jeunes.</label>
			</p><br/>
			<p>
				<h5 class=question>47. Dans les pays en développement, il y a…</h5>
				<input type="radio" name="réponseQ47" value="r1" id="r471" /> <label for="r471">Un vieillissement de la population dû à la baisse de la mortalité.</label><br/>
				<input type="radio" name="réponseQ47" value="r2" id="r472" /> <label for="r472">Une population jeune due à la forte natalité.</label>
			</p><br/>
				<p>
			<input type="submit" /> <input type="reset" />
		</p>
		</form>
  	</div>

<?php include('bas.php'); ?>