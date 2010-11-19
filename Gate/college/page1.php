<?php include('haut.php'); ?>

	<div id="corps">
		<h2>Le Front populaire</h2>
		<form method="post" action="traitement1.php">
			<p>
				<h5 class=question>1. La crise �conomique de 1929 touche seulement en 1931 la France et moins profond�ment qu�� l��tranger, mais elle dure plus longtemps qu�� l��tranger jusqu�en 1938</h5>
				<input type="radio" name="r�ponseQ1" value="r1" id="r11" /> <label for="r11">Vrai</label><br />
				<input type="radio" name="r�ponseQ1" value="r2" id="r12" /> <label for="r12">Faux</label>
			</p><br/> 
			<p>
				<h5 class=question>2. La crise �conomique accentue la crise sociale, comment (4 cases � cocher) ?</h5>
				<input type="checkbox" name="r�ponse21" id="r21" /> <label for="r21">De nombreux industriels, artisans et commer�ants font faillite (cessation de leur activit�)</label><br />
				<input type="checkbox" name="r�ponse22" id="r22" /> <label for="r22">Les ch�meurs sont souvent r�duits � la soupe populaire</label><br />
				<input type="checkbox" name="r�ponse23" id="r23" /> <label for="r23">Les ch�meurs touchent des allocations ch�mage</label><br />
				<input type="checkbox" name="r�ponse24" id="r24" /> <label for="r24">L�enrichissement de quelques-uns donne � beaucoup de Fran�ais le sentiment de vivre une �poque injuste</label><br/>
				<input type="checkbox" name="r�ponse25" id="r25" /> <label for="r25">Les salari�s sont victimes de la baisse des salaires</label>
			</p><br/>
			<p>
				<h5 class=question>3. La mont�e du ch�mage accentue l�hostilit� � l��gard des �trangers (=x�nophobie)</h5>
				<input type="radio" name="r�ponseQ3" value="r1" id="r31" /> <label for="r31">Vrai</label><br/>
				<input type="radio" name="r�ponseQ3" value="r2" id="r32" /> <label for="r32">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>4. Les nombreux gouvernements (instabilit� gouvernementale) se montrent incapables avant 1936 de r�soudre la crise �conomique : cela entra�ne un m�contentement de l�opinion publique</h5>
				<input type="radio" name="r�ponseQ4" value="r1" id="r41" /> <label for="r41">Vrai</label><br/>
				<input type="radio" name="r�ponseQ4" value="r2" id="r42" /> <label for="r42">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>5. L�instabilit� gouvernementale (nombreux gouvernements se succ�dant � un rythme rapide) est due aux fr�quents renversements du gouvernement par le Parlement</h5>
				<input type="radio" name="r�ponseQ5" value="r1" id="r51" /> <label for="r51">Vrai</label><br/>
				<input type="radio" name="r�ponseQ5" value="r2" id="r52" /> <label for="r52">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>6. Que sont les ligues ?</h5>
				<input type="radio" name="r�ponseQ6" value="r1" id="r61" /> <label for="r61">Ce sont des groupes d�extr�me droite antiparlementaires qui se d�veloppent dans les ann�es 1930</label><br/>
				<input type="radio" name="r�ponseQ6" value="r2" id="r62" /> <label for="r62">Ce sont des royalistes</label>
			</p><br/>
			<p>
				<h5 class=question>7. Que d�noncent les ligues et l�Action fran�aise (groupe royaliste) (4 cases � cocher) ?</h5>
				<input type="checkbox" name="r�ponse71" id="r71" /> <label for="r71">La corruption du r�gime</label><br />
				<input type="checkbox" name="r�ponse72" id="r72" /> <label for="r72">L�absence de d�mocratie</label><br />
				<input type="checkbox" name="r�ponse73" id="r73" /> <label for="r73">La multiplication des scandales politico financiers</label><br />
				<input type="checkbox" name="r�ponse74" id="r74" /> <label for="r74">L�incomp�tence du r�gime (Parlement et gouvernement)</label><br/>
				<input type="checkbox" name="r�ponse75" id="r75" /> <label for="r75">Le top grand nombre d��trangers en France (x�nophobie) selon eux</label>
			</p><br/>
			<p>
				<h5 class=question>8. L�affaire Stavisky qui est un escroc qui a �t� prot�g� par des politiciens d�clenche en 1934 une violente campagne antiparlementaire qui d�bouche sur une manifestation des ligues et de l�Action fran�aise � Paris le 12 f�vrier 1934</h5>
				<input type="radio" name="r�ponseQ8" value="r1" id="r81" /> <label for="r81">Vrai</label><br/>
				<input type="radio" name="r�ponseQ8" value="r2" id="r82" /> <label for="r82">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>9. Durant la manifestation du 6 f�vrier 1934, certains manifestants tentent d�atteindre l�Assembl�e nationale pour s�en emparer. La police intervient. Il y a 15 morts et 1500 bless�s</h5>
				<input type="radio" name="r�ponseQ9" value="r1" id="r91" /> <label for="r91">Vrai</label><br/>
				<input type="radio" name="r�ponseQ9" value="r2" id="r92" /> <label for="r92">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>10. Comment est per�ue la manifestation du 6 f�vrier 1934 par les partis de gauche (socialistes, communistes et radicaux) ?</h5>
				<input type="radio" name="r�ponseQ10" value="r1" id="r101" /> <label for="r101">Comme une tentative de coup d��tat fasciste par l�extr�me droite pour prendre le pouvoir afin d�instaurer un r�gime non d�mocratique</label><br/>
				<input type="radio" name="r�ponseQ10" value="r2" id="r102" /> <label for="r102">Comme une r�pression aveugle de la police</label>
			</p><br/>
			<p>
				<h5 class=question>11. Quelle est la cons�quence de la manifestation du 6 f�vrier 1934 pour la gauche ?</h5>
				<input type="radio" name="r�ponseQ11" value="r1" id="r111" /> <label for="r111">Les partis de gauche se divisent face � l�attitude � avoir vis-�-vis de l�extr�me droite</label><br/>
				<input type="radio" name="r�ponseQ11" value="r2" id="r112" /> <label for="r112">Les communistes, les socialistes et les radicaux se r�unissent dans le Front populaire pour r�sister � l�extr�me droite</label>
			</p><br/>
			<p>
				<h5 class=question>12. Quel est le slogan do programme �lectoral commun du Front populaire ?</h5>
				<input type="radio" name="r�ponseQ12" value="r1" id="r121" /> <label for="r121">� le pain, la paix, la libert� �</label><br/>
				<input type="radio" name="r�ponseQ12" value="r2" id="r122" /> <label for="r122">� � mort l�extr�me droite �</label>
			</p><br/>
			<p>
				<h5 class=question>13. Qui gagne les �lections l�gislatives en mai 1936 ?</h5>
				<input type="radio" name="r�ponseQ13" value="r1" id="r131" /> <label for="r131">Le Front populaire (socialistes, radicaux)</label><br/>
				<input type="radio" name="r�ponseQ13" value="r2" id="r132" /> <label for="r132">La droite</label><br/>
				<input type="radio" name="r�ponseQ13" value="r3" id="r133" /> <label for="r133">Le Front populaire (socialistes, radicaux, communistes)</label>
			</p><br/>
			<p>
				<h5 class=question>14. Qui devient chef du gouvernement (= Pr�sident du conseil) en juin 1936 suite � la victoire du Front populaire ?</h5>
				<input type="radio" name="r�ponseQ14" value="r1" id="r141" /> <label for="r141">L�on Blum, un socialiste car le SFIO est le parti du Front populaire qui a eu le plus de voix aux �lections l�gislatives.</label><br/>
				<input type="radio" name="r�ponseQ14" value="r2" id="r142" /> <label for="r142">Edouard Daladier, un radical car le parti radical est le parti du Front populaire qui a eu le plus de voix aux �lections l�gislatives.</label><br/>
				<input type="radio" name="r�ponseQ14" value="r3" id="r143" /> <label for="r143">L�on Blum, un radical car le parti radical est le parti du Front populaire qui a eu le plus de voix aux �lections l�gislatives.</label>
			</p><br/>
			<p>
				<h5 class=question>15. Les communistes d�cident de soutenir le gouvernement mais refusent d�en faire parti.</h5>
				<input type="radio" name="r�ponseQ15" value="r1" id="r151" /> <label for="r151">Vrai</label><br/>
				<input type="radio" name="r�ponseQ15" value="r2" id="r152" /> <label for="r152">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>16. Les radicaux d�cident de soutenir le gouvernement mais refusent d�en faire parti.</h5>
				<input type="radio" name="r�ponseQ16" value="r1" id="r161" /> <label for="r161">Vrai</label><br/>
				<input type="radio" name="r�ponseQ16" value="r2" id="r162" /> <label for="r162">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>17. Pour la premi�re fois en France, trois femmes font partie du gouvernement en juin 1936.</h5>
				<input type="radio" name="r�ponseQ17" value="r1" id="r171" /> <label for="r171">Vrai</label><br/>
				<input type="radio" name="r�ponseQ17" value="r2" id="r172" /> <label for="r172">Faux</label>
			</p><br/>
			<p>
				<h5 class=question>18. Que passe-t-il dans les entreprises suite � la victoire du Front populaire aux �lections l�gislatives de 1936 et � leur arriv�e au pouvoir en juin 1936 ?</h5>
				<input type="radio" name="r�ponseQ18" value="r1" id="r181" /> <label for="r181">Les patrons ferment les usines.</label><br/>
				<input type="radio" name="r�ponseQ18" value="r2" id="r182" /> <label for="r182">Des � gr�ves joyeuses � avec occupation d�usines.</label>
			</p><br/>
			<p>
				<h5 class=question>19. Qui r�unit le gouvernement Blum � Matignon pour n�gocier les accords de Matignon pour mettre fin aux gr�ves ? (Deux r�ponses)</h5>
				<input type="checkbox" name="r�ponse191" id="r191" /> <label for="r191">Les syndicats.</label><br />
				<input type="checkbox" name="r�ponse192" id="r192" /> <label for="r192">Les patrons.</label><br />
				<input type="checkbox" name="r�ponse193" id="r193" /> <label for="r193">La droite.</label><br />
				<input type="checkbox" name="r�ponse194" id="r194" /> <label for="r194">Le parti communiste.</label><br/>
			</p><br/>
			<p>
				<h5 class=question>20. Que pr�voient les accords de Matignon sign�s le 7 juin 1936 ? (Trois r�ponses)</h5>
				<input type="checkbox" name="r�ponse201" id="r201" /> <label for="r201">La semaine de 40 heures.</label><br />
				<input type="checkbox" name="r�ponse202" id="r202" /> <label for="r202">Quinze jours de cong�s pay�s.</label><br />
				<input type="checkbox" name="r�ponse203" id="r203" /> <label for="r203">La g�n�ralisation des conventions collectives qui fixent par branche d�activit� les droits des salari�s.</label><br />
				<input type="checkbox" name="r�ponse204" id="r204" /> <label for="r204">Une forte hausse des salaires.</label><br/>
				<input type="checkbox" name="r�ponse205" id="r205" /> <label for="r205">La cr�ation de d�l�gu�s du personnel charg�s de repr�senter les employ�s aupr�s des patrons dans les entreprises.</label>
			</p><br/>
			<p>
				<h5 class=question>21. Quelles sont les deux autres grandes lois sociales qui compl�tent les accords de Matignon ? (Deux r�ponses)</h5>
				<input type="checkbox" name="r�ponse211" id="r211" /> <label for="r211">La semaine des 40 heures de travail (avant c��tait 48 heures).</label><br />
				<input type="checkbox" name="r�ponse212" id="r212" /> <label for="r212">Quinze jours de cong�s pay�s (avant les ouvriers n��taient pas pay�s si ils prenaient des vacances� donc ils n�en prenaient pas).</label><br />
				<input type="checkbox" name="r�ponse213" id="r213" /> <label for="r213">Cinq jours de cong�s pay�s (avant les ouvriers n��taient pas pay�s si ils prenaient des vacances� donc ils n�en prenaient pas).</label><br />
				<input type="checkbox" name="r�ponse214" id="r214" /> <label for="r214">La semaine de 49 heures de travail (avant c��tait 48 heures).</label><br/>
			</p><br/>
			<p>
				<h5 class=question>22. Quelles sont les difficult�s que rencontre le Front populaire ? (Deux r�ponses)</h5>
				<input type="checkbox" name="r�ponse221" id="r221" /> <label for="r221">Le Front populaire se montre incapable de r�soudre la crise �conomique.</label><br />
				<input type="checkbox" name="r�ponse222" id="r222" /> <label for="r222">La guerre civile espagnole o� le gouvernement Blum d�cide de la non-intervention pour laquelle sont les communistes. En revanche, les radicaux sont pour intervenir et aider le Front populaire espagnol contre Franco. Le Front populaire se divise donc�</label><br />
				<input type="checkbox" name="r�ponse223" id="r223" /> <label for="r223">La guerre civile espagnole o� le gouvernement Blum d�cide la non-intervention pour laquelle sont les radicaux. En revanche, les communistes sont pour intervenir et aider le Front populaire espagnol contre Franco. Le Front populaire se divise donc�</label><br />
			</p><br/>
			<p>
				<h5 class=question>23. L�incapacit� du Front populaire � r�soudre la crise �conomique entra�ne la disparition du Front populaire en avril�</h5>
				<input type="radio" name="r�ponseQ23" value="r1" id="r231" /> <label for="r231">1936</label><br />
				<input type="radio" name="r�ponseQ23" value="r2" id="r232" /> <label for="r232">1937</label><br />
				<input type="radio" name="r�ponseQ23" value="r3" id="r233" /> <label for="r233">1938</label><br />
				<input type="radio" name="r�ponseQ23" value="r4" id="r234" /> <label for="r234">1939</label><br/>
			</p><br/>
				<p>
			<input type="submit" /> <input type="reset" />
		</p>
		</form>

  	</div>

<?php include('bas.php'); ?>