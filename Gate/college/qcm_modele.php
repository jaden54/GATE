<?php include('haut.php'); ?>

	<div id="corps">
		<h2>Ici le titre du qcm</h2>
		<form method="post" action="correction_modele.php"> <!-- il faut mettre le bon nom dans action --!>
		<!-- 
			Dans les 5 question qui suivent,
				pour name, il faut mettre réponseQ avec le numéro de la question
				pour value, il faut mettre r suivi du numéro de la réponse
				pour id et for, il faut mettre r suivi du numéro de la question puis encore suivi du numéro de la réponse
		--> 
			<p>
				<h5 class=question>1. Question avec 1 seule bonne réponse parmi 2</h5>
				<input type="radio" name="réponseQ1" value="r1" id="r11" /> <label for="r11">Réponse1</label><br/>
				<input type="radio" name="réponseQ1" value="r2" id="r12" /> <label for="r12">Réponse2</label>
			</p><br/> 
			<p>
				<h5 class=question>2. Question avec 1 seule bonne réponse parmi 3</h5>
				<input type="radio" name="réponseQ2" value="r1" id="r21" /> <label for="r21">Réponse1</label><br/>
				<input type="radio" name="réponseQ2" value="r2" id="r22" /> <label for="r22">Réponse2</label><br/>
				<input type="radio" name="réponseQ2" value="r3" id="r23" /> <label for="r23">Réponse3</label>
			</p><br/>
			<p>
				<h5 class=question>3. Question avec 1 seule bonne réponse parmi 4</h5>
				<input type="radio" name="réponseQ3" value="r1" id="r31" /> <label for="r31">Réponse1</label><br/>
				<input type="radio" name="réponseQ3" value="r2" id="r32" /> <label for="r32">Réponse2</label><br/>
				<input type="radio" name="réponseQ3" value="r3" id="r33" /> <label for="r33">Réponse3</label><br/>
				<input type="radio" name="réponseQ3" value="r4" id="r34" /> <label for="r34">Réponse4</label>
			</p><br/>
			<p>
				<h5 class=question>4. Question avec 1 seule bonne réponse parmi 5</h5>
				<input type="radio" name="réponseQ4" value="r1" id="r41" /> <label for="r41">Réponse1</label><br/>
				<input type="radio" name="réponseQ4" value="r2" id="r42" /> <label for="r42">Réponse2</label><br/>
				<input type="radio" name="réponseQ4" value="r3" id="r43" /> <label for="r43">Réponse3</label><br/>
				<input type="radio" name="réponseQ4" value="r4" id="r44" /> <label for="r44">Réponse4</label><br/>
				<input type="radio" name="réponseQ4" value="r5" id="r45" /> <label for="r45">Réponse5</label>
			</p><br/>
			<p>
				<h5 class=question>5. Question avec 1 seule bonne réponse parmi 6</h5>
				<input type="radio" name="réponseQ5" value="r1" id="r51" /> <label for="r51">Réponse1</label><br/>
				<input type="radio" name="réponseQ5" value="r2" id="r52" /> <label for="r52">Réponse2</label><br/>
				<input type="radio" name="réponseQ5" value="r3" id="r53" /> <label for="r53">Réponse3</label><br/>
				<input type="radio" name="réponseQ5" value="r4" id="r54" /> <label for="r54">Réponse4</label><br/>
				<input type="radio" name="réponseQ5" value="r5" id="r55" /> <label for="r55">Réponse5</label><br/>
				<input type="radio" name="réponseQ5" value="r6" id="r56" /> <label for="r56">Réponse6</label>
			</p><br/>

			
		<!-- 
			Dans les question qui suivent,
				pour name, il faut mettre réponse suivi du numéro de la question puis encore suivi du numéro de la réponse
				pour id et for, il faut mettre r suivi du numéro de la question puis encore suivi du numéro de la réponse
		--> 
			<p>
				<h5 class=question>6. Question avec plusieurs bonnes réponses parmi 2</h5>
				<input type="checkbox" name="réponse61" id="r61" /> <label for="r61">Réponse1</label><br/>
				<input type="checkbox" name="réponse62" id="r62" /> <label for="r62">Réponse2</label>
			</p><br/>
			<p>
				<h5 class=question>7. Question avec plusieurs bonnes réponses parmi 3</h5>
				<input type="checkbox" name="réponse71" id="r71" /> <label for="r71">Réponse1</label><br/>
				<input type="checkbox" name="réponse72" id="r72" /> <label for="r72">Réponse2</label><br/>
				<input type="checkbox" name="réponse73" id="r73" /> <label for="r73">Réponse3</label>
			</p><br/>
			<p>
				<h5 class=question>8. Question avec plusieurs bonnes réponses parmi 4</h5>
				<input type="checkbox" name="réponse81" id="r81" /> <label for="r81">Réponse1</label><br/>
				<input type="checkbox" name="réponse82" id="r82" /> <label for="r82">Réponse2</label><br/>
				<input type="checkbox" name="réponse83" id="r83" /> <label for="r83">Réponse3</label><br/>
				<input type="checkbox" name="réponse84" id="r84" /> <label for="r84">Réponse4</label>
			</p><br/>
			<p>
				<h5 class=question>9. Question avec plusieurs bonnes réponses parmi 5</h5>
				<input type="checkbox" name="réponse91" id="r91" /> <label for="r91">Réponse1</label><br/>
				<input type="checkbox" name="réponse92" id="r92" /> <label for="r92">Réponse2</label><br/>
				<input type="checkbox" name="réponse93" id="r93" /> <label for="r93">Réponse3</label><br/>
				<input type="checkbox" name="réponse94" id="r94" /> <label for="r94">Réponse4</label><br/>
				<input type="checkbox" name="réponse95" id="r95" /> <label for="r95">Réponse5</label>
			</p><br/>
			<p>
				<h5 class=question>10. Question avec plusieurs bonnes réponses parmi 6</h5>
				<input type="checkbox" name="réponse101" id="r101" /> <label for="r101">Réponse1</label><br/>
				<input type="checkbox" name="réponse102" id="r102" /> <label for="r102">Réponse2</label><br/>
				<input type="checkbox" name="réponse103" id="r103" /> <label for="r103">Réponse3</label><br/>
				<input type="checkbox" name="réponse104" id="r104" /> <label for="r104">Réponse4</label><br/>
				<input type="checkbox" name="réponse105" id="r105" /> <label for="r105">Réponse5</label><br/>
				<input type="checkbox" name="réponse106" id="r106" /> <label for="r106">Réponse6</label>
			</p><br/>
		</form>
  	</div>

<?php include('bas.php'); ?>