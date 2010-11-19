<?php include('haut.php'); ?>

	<div id="corps">
		<h2>Le Front populaire</h2>
		<form method="post" action="traitement1.php">
			<p>
				<h5 class=question>1. La crise économique de 1929 touche seulement en 1931 la France et moins profondément qu’à l’étranger, mais elle dure plus longtemps qu’à l’étranger jusqu’en 1938</h5>
				<input type="radio" name="réponseQ1" value="r1" id="r11" /> <label for="r11">Vrai</label><br />
				<input type="radio" name="réponseQ1" value="r2" id="r12" /> <label for="r12">Faux</label>
			</p><br/> 
			<p>
				<h5 class=question>2. La crise économique accentue la crise sociale, comment (4 cases à cocher) ?</h5>
				<input type="checkbox" name="réponse21" id="r21" /> <label for="r21">De nombreux industriels, artisans et commerçants font faillite (cessation de leur activité)</label><br />
				<input type="checkbox" name="réponse22" id="r22" /> <label for="r22">Les chômeurs sont souvent réduits à la soupe populaire</label><br />
				<input type="checkbox" name="réponse23" id="r23" /> <label for="r23">Les chômeurs touchent des allocations chômage</label><br />
				<input type="checkbox" name="réponse24" id="r24" /> <label for="r24">L’enrichissement de quelques-uns donne à beaucoup de Français le sentiment de vivre une époque injuste</label><br/>
				<input type="checkbox" name="réponse25" id="r25" /> <label for="r25">Les salariés sont victimes de la baisse des salaires</label>
			</p><br/>
			<p>
				<h5 class=question>3. La montée du chômage accentue l’hostilité à l’égard des étrangers (=xénophobie)</h5>
				<input type="radio" name="réponseQ3" value="r1" id="r31" /> <label for="r31">Vrai</label><br/>
				<input type="radio" name="réponseQ3" value="r2" id="r32" /> <label for="r32">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>4. Les nombreux gouvernements (instabilité gouvernementale) se montrent incapables avant 1936 de résoudre la crise économique : cela entraîne un mécontentement de l’opinion publique</h5>
				<input type="radio" name="réponseQ4" value="r1" id="r41" /> <label for="r41">Vrai</label><br/>
				<input type="radio" name="réponseQ4" value="r2" id="r42" /> <label for="r42">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>5. L’instabilité gouvernementale (nombreux gouvernements se succédant à un rythme rapide) est due aux fréquents renversements du gouvernement par le Parlement</h5>
				<input type="radio" name="réponseQ5" value="r1" id="r51" /> <label for="r51">Vrai</label><br/>
				<input type="radio" name="réponseQ5" value="r2" id="r52" /> <label for="r52">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>6. Que sont les ligues ?</h5>
				<input type="radio" name="réponseQ6" value="r1" id="r61" /> <label for="r61">Ce sont des groupes d’extrême droite antiparlementaires qui se développent dans les années 1930</label><br/>
				<input type="radio" name="réponseQ6" value="r2" id="r62" /> <label for="r62">Ce sont des royalistes</label>
			</p><br/>
			<p>
				<h5 class=question>7. Que dénoncent les ligues et l’Action française (groupe royaliste) (4 cases à cocher) ?</h5>
				<input type="checkbox" name="réponse71" id="r71" /> <label for="r71">La corruption du régime</label><br />
				<input type="checkbox" name="réponse72" id="r72" /> <label for="r72">L’absence de démocratie</label><br />
				<input type="checkbox" name="réponse73" id="r73" /> <label for="r73">La multiplication des scandales politico financiers</label><br />
				<input type="checkbox" name="réponse74" id="r74" /> <label for="r74">L’incompétence du régime (Parlement et gouvernement)</label><br/>
				<input type="checkbox" name="réponse75" id="r75" /> <label for="r75">Le top grand nombre d’étrangers en France (xénophobie) selon eux</label>
			</p><br/>
			<p>
				<h5 class=question>8. L’affaire Stavisky qui est un escroc qui a été protégé par des politiciens déclenche en 1934 une violente campagne antiparlementaire qui débouche sur une manifestation des ligues et de l’Action française à Paris le 12 février 1934</h5>
				<input type="radio" name="réponseQ8" value="r1" id="r81" /> <label for="r81">Vrai</label><br/>
				<input type="radio" name="réponseQ8" value="r2" id="r82" /> <label for="r82">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>9. Durant la manifestation du 6 février 1934, certains manifestants tentent d’atteindre l’Assemblée nationale pour s’en emparer. La police intervient. Il y a 15 morts et 1500 blessés</h5>
				<input type="radio" name="réponseQ9" value="r1" id="r91" /> <label for="r91">Vrai</label><br/>
				<input type="radio" name="réponseQ9" value="r2" id="r92" /> <label for="r92">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>10. Comment est perçue la manifestation du 6 février 1934 par les partis de gauche (socialistes, communistes et radicaux) ?</h5>
				<input type="radio" name="réponseQ10" value="r1" id="r101" /> <label for="r101">Comme une tentative de coup d’État fasciste par l’extrême droite pour prendre le pouvoir afin d’instaurer un régime non démocratique</label><br/>
				<input type="radio" name="réponseQ10" value="r2" id="r102" /> <label for="r102">Comme une répression aveugle de la police</label>
			</p><br/>
			<p>
				<h5 class=question>11. Quelle est la conséquence de la manifestation du 6 février 1934 pour la gauche ?</h5>
				<input type="radio" name="réponseQ11" value="r1" id="r111" /> <label for="r111">Les partis de gauche se divisent face à l’attitude à avoir vis-à-vis de l’extrême droite</label><br/>
				<input type="radio" name="réponseQ11" value="r2" id="r112" /> <label for="r112">Les communistes, les socialistes et les radicaux se réunissent dans le Front populaire pour résister à l’extrême droite</label>
			</p><br/>
			<p>
				<h5 class=question>12. Quel est le slogan do programme électoral commun du Front populaire ?</h5>
				<input type="radio" name="réponseQ12" value="r1" id="r121" /> <label for="r121">« le pain, la paix, la liberté »</label><br/>
				<input type="radio" name="réponseQ12" value="r2" id="r122" /> <label for="r122">« à mort l’extrême droite »</label>
			</p><br/>
			<p>
				<h5 class=question>13. Qui gagne les élections législatives en mai 1936 ?</h5>
				<input type="radio" name="réponseQ13" value="r1" id="r131" /> <label for="r131">Le Front populaire (socialistes, radicaux)</label><br/>
				<input type="radio" name="réponseQ13" value="r2" id="r132" /> <label for="r132">La droite</label><br/>
				<input type="radio" name="réponseQ13" value="r3" id="r133" /> <label for="r133">Le Front populaire (socialistes, radicaux, communistes)</label>
			</p><br/>
			<p>
				<h5 class=question>14. Qui devient chef du gouvernement (= Président du conseil) en juin 1936 suite à la victoire du Front populaire ?</h5>
				<input type="radio" name="réponseQ14" value="r1" id="r141" /> <label for="r141">Léon Blum, un socialiste car le SFIO est le parti du Front populaire qui a eu le plus de voix aux élections législatives.</label><br/>
				<input type="radio" name="réponseQ14" value="r2" id="r142" /> <label for="r142">Edouard Daladier, un radical car le parti radical est le parti du Front populaire qui a eu le plus de voix aux élections législatives.</label><br/>
				<input type="radio" name="réponseQ14" value="r3" id="r143" /> <label for="r143">Léon Blum, un radical car le parti radical est le parti du Front populaire qui a eu le plus de voix aux élections législatives.</label>
			</p><br/>
			<p>
				<h5 class=question>15. Les communistes décident de soutenir le gouvernement mais refusent d’en faire parti.</h5>
				<input type="radio" name="réponseQ15" value="r1" id="r151" /> <label for="r151">Vrai</label><br/>
				<input type="radio" name="réponseQ15" value="r2" id="r152" /> <label for="r152">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>16. Les radicaux décident de soutenir le gouvernement mais refusent d’en faire parti.</h5>
				<input type="radio" name="réponseQ16" value="r1" id="r161" /> <label for="r161">Vrai</label><br/>
				<input type="radio" name="réponseQ16" value="r2" id="r162" /> <label for="r162">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>17. Pour la première fois en France, trois femmes font partie du gouvernement en juin 1936.</h5>
				<input type="radio" name="réponseQ17" value="r1" id="r171" /> <label for="r171">Vrai</label><br/>
				<input type="radio" name="réponseQ17" value="r2" id="r172" /> <label for="r172">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>18. Que passe-t-il dans les entreprises suite à la victoire du Front populaire aux élections législatives de 1936 et à leur arrivée au pouvoir en juin 1936 ?</h5>
				<input type="radio" name="réponseQ18" value="r1" id="r181" /> <label for="r181">Les patrons ferment les usines.</label><br/>
				<input type="radio" name="réponseQ18" value="r2" id="r182" /> <label for="r182">Des « grèves joyeuses » avec occupation d’usines.</label>
			</p><br/>
			<p>
				<h5 class=question>19. Qui réunit le gouvernement Blum à Matignon pour négocier les accords de Matignon pour mettre fin aux grèves ? (Deux réponses)</h5>
				<input type="checkbox" name="réponse191" id="r191" /> <label for="r191">Les syndicats.</label><br />
				<input type="checkbox" name="réponse192" id="r192" /> <label for="r192">Les patrons.</label><br />
				<input type="checkbox" name="réponse193" id="r193" /> <label for="r193">La droite.</label><br />
				<input type="checkbox" name="réponse194" id="r194" /> <label for="r194">Le parti communiste.</label><br/>
			</p><br/>
			<p>
				<h5 class=question>20. Que prévoient les accords de Matignon signés le 7 juin 1936 ? (Trois réponses)</h5>
				<input type="checkbox" name="réponse201" id="r201" /> <label for="r201">La semaine de 40 heures.</label><br />
				<input type="checkbox" name="réponse202" id="r202" /> <label for="r202">Quinze jours de congés payés.</label><br />
				<input type="checkbox" name="réponse203" id="r203" /> <label for="r203">La généralisation des conventions collectives qui fixent par branche d’activité les droits des salariés.</label><br />
				<input type="checkbox" name="réponse204" id="r204" /> <label for="r204">Une forte hausse des salaires.</label><br/>
				<input type="checkbox" name="réponse205" id="r205" /> <label for="r205">La création de délégués du personnel chargés de représenter les employés auprès des patrons dans les entreprises.</label>
			</p><br/>
			<p>
				<h5 class=question>21. Quelles sont les deux autres grandes lois sociales qui complètent les accords de Matignon ? (Deux réponses)</h5>
				<input type="checkbox" name="réponse211" id="r211" /> <label for="r211">La semaine des 40 heures de travail (avant c’était 48 heures).</label><br />
				<input type="checkbox" name="réponse212" id="r212" /> <label for="r212">Quinze jours de congés payés (avant les ouvriers n’étaient pas payés si ils prenaient des vacances… donc ils n’en prenaient pas).</label><br />
				<input type="checkbox" name="réponse213" id="r213" /> <label for="r213">Cinq jours de congés payés (avant les ouvriers n’étaient pas payés si ils prenaient des vacances… donc ils n’en prenaient pas).</label><br />
				<input type="checkbox" name="réponse214" id="r214" /> <label for="r214">La semaine de 49 heures de travail (avant c’était 48 heures).</label><br/>
			</p><br/>
			<p>
				<h5 class=question>22. Quelles sont les difficultés que rencontre le Front populaire ? (Deux réponses)</h5>
				<input type="checkbox" name="réponse221" id="r221" /> <label for="r221">Le Front populaire se montre incapable de résoudre la crise économique.</label><br />
				<input type="checkbox" name="réponse222" id="r222" /> <label for="r222">La guerre civile espagnole où le gouvernement Blum décide de la non-intervention pour laquelle sont les communistes. En revanche, les radicaux sont pour intervenir et aider le Front populaire espagnol contre Franco. Le Front populaire se divise donc…</label><br />
				<input type="checkbox" name="réponse223" id="r223" /> <label for="r223">La guerre civile espagnole où le gouvernement Blum décide la non-intervention pour laquelle sont les radicaux. En revanche, les communistes sont pour intervenir et aider le Front populaire espagnol contre Franco. Le Front populaire se divise donc…</label><br />
			</p><br/>
			<p>
				<h5 class=question>23. L’incapacité du Front populaire à résoudre la crise économique entraîne la disparition du Front populaire en avril…</h5>
				<input type="radio" name="réponseQ23" value="r1" id="r231" /> <label for="r231">1936</label><br />
				<input type="radio" name="réponseQ23" value="r2" id="r232" /> <label for="r232">1937</label><br />
				<input type="radio" name="réponseQ23" value="r3" id="r233" /> <label for="r233">1938</label><br />
				<input type="radio" name="réponseQ23" value="r4" id="r234" /> <label for="r234">1939</label><br/>
			</p><br/>
				<p>
			<input type="submit" /> <input type="reset" />
		</p>
		</form>

  	</div>

<?php include('bas.php'); ?>