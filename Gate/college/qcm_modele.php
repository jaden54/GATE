<?php include('haut.php'); ?>

	<div id="corps">
		<h2>Ici le titre du qcm</h2>
		<form method="post" action="correction_modele.php"> <!-- il faut mettre le bon nom dans action --!>
		<!-- 
			Dans les 5 question qui suivent,
				pour name, il faut mettre r�ponseQ avec le num�ro de la question
				pour value, il faut mettre r suivi du num�ro de la r�ponse
				pour id et for, il faut mettre r suivi du num�ro de la question puis encore suivi du num�ro de la r�ponse
		--> 
			<p>
				<h5 class=question>1. Question avec 1 seule bonne r�ponse parmi 2</h5>
				<input type="radio" name="r�ponseQ1" value="r1" id="r11" /> <label for="r11">R�ponse1</label><br/>
				<input type="radio" name="r�ponseQ1" value="r2" id="r12" /> <label for="r12">R�ponse2</label>
			</p><br/> 
			<p>
				<h5 class=question>2. Question avec 1 seule bonne r�ponse parmi 3</h5>
				<input type="radio" name="r�ponseQ2" value="r1" id="r21" /> <label for="r21">R�ponse1</label><br/>
				<input type="radio" name="r�ponseQ2" value="r2" id="r22" /> <label for="r22">R�ponse2</label><br/>
				<input type="radio" name="r�ponseQ2" value="r3" id="r23" /> <label for="r23">R�ponse3</label>
			</p><br/>
			<p>
				<h5 class=question>3. Question avec 1 seule bonne r�ponse parmi 4</h5>
				<input type="radio" name="r�ponseQ3" value="r1" id="r31" /> <label for="r31">R�ponse1</label><br/>
				<input type="radio" name="r�ponseQ3" value="r2" id="r32" /> <label for="r32">R�ponse2</label><br/>
				<input type="radio" name="r�ponseQ3" value="r3" id="r33" /> <label for="r33">R�ponse3</label><br/>
				<input type="radio" name="r�ponseQ3" value="r4" id="r34" /> <label for="r34">R�ponse4</label>
			</p><br/>
			<p>
				<h5 class=question>4. Question avec 1 seule bonne r�ponse parmi 5</h5>
				<input type="radio" name="r�ponseQ4" value="r1" id="r41" /> <label for="r41">R�ponse1</label><br/>
				<input type="radio" name="r�ponseQ4" value="r2" id="r42" /> <label for="r42">R�ponse2</label><br/>
				<input type="radio" name="r�ponseQ4" value="r3" id="r43" /> <label for="r43">R�ponse3</label><br/>
				<input type="radio" name="r�ponseQ4" value="r4" id="r44" /> <label for="r44">R�ponse4</label><br/>
				<input type="radio" name="r�ponseQ4" value="r5" id="r45" /> <label for="r45">R�ponse5</label>
			</p><br/>
			<p>
				<h5 class=question>5. Question avec 1 seule bonne r�ponse parmi 6</h5>
				<input type="radio" name="r�ponseQ5" value="r1" id="r51" /> <label for="r51">R�ponse1</label><br/>
				<input type="radio" name="r�ponseQ5" value="r2" id="r52" /> <label for="r52">R�ponse2</label><br/>
				<input type="radio" name="r�ponseQ5" value="r3" id="r53" /> <label for="r53">R�ponse3</label><br/>
				<input type="radio" name="r�ponseQ5" value="r4" id="r54" /> <label for="r54">R�ponse4</label><br/>
				<input type="radio" name="r�ponseQ5" value="r5" id="r55" /> <label for="r55">R�ponse5</label><br/>
				<input type="radio" name="r�ponseQ5" value="r6" id="r56" /> <label for="r56">R�ponse6</label>
			</p><br/>

			
		<!-- 
			Dans les question qui suivent,
				pour name, il faut mettre r�ponse suivi du num�ro de la question puis encore suivi du num�ro de la r�ponse
				pour id et for, il faut mettre r suivi du num�ro de la question puis encore suivi du num�ro de la r�ponse
		--> 
			<p>
				<h5 class=question>6. Question avec plusieurs bonnes r�ponses parmi 2</h5>
				<input type="checkbox" name="r�ponse61" id="r61" /> <label for="r61">R�ponse1</label><br/>
				<input type="checkbox" name="r�ponse62" id="r62" /> <label for="r62">R�ponse2</label>
			</p><br/>
			<p>
				<h5 class=question>7. Question avec plusieurs bonnes r�ponses parmi 3</h5>
				<input type="checkbox" name="r�ponse71" id="r71" /> <label for="r71">R�ponse1</label><br/>
				<input type="checkbox" name="r�ponse72" id="r72" /> <label for="r72">R�ponse2</label><br/>
				<input type="checkbox" name="r�ponse73" id="r73" /> <label for="r73">R�ponse3</label>
			</p><br/>
			<p>
				<h5 class=question>8. Question avec plusieurs bonnes r�ponses parmi 4</h5>
				<input type="checkbox" name="r�ponse81" id="r81" /> <label for="r81">R�ponse1</label><br/>
				<input type="checkbox" name="r�ponse82" id="r82" /> <label for="r82">R�ponse2</label><br/>
				<input type="checkbox" name="r�ponse83" id="r83" /> <label for="r83">R�ponse3</label><br/>
				<input type="checkbox" name="r�ponse84" id="r84" /> <label for="r84">R�ponse4</label>
			</p><br/>
			<p>
				<h5 class=question>9. Question avec plusieurs bonnes r�ponses parmi 5</h5>
				<input type="checkbox" name="r�ponse91" id="r91" /> <label for="r91">R�ponse1</label><br/>
				<input type="checkbox" name="r�ponse92" id="r92" /> <label for="r92">R�ponse2</label><br/>
				<input type="checkbox" name="r�ponse93" id="r93" /> <label for="r93">R�ponse3</label><br/>
				<input type="checkbox" name="r�ponse94" id="r94" /> <label for="r94">R�ponse4</label><br/>
				<input type="checkbox" name="r�ponse95" id="r95" /> <label for="r95">R�ponse5</label>
			</p><br/>
			<p>
				<h5 class=question>10. Question avec plusieurs bonnes r�ponses parmi 6</h5>
				<input type="checkbox" name="r�ponse101" id="r101" /> <label for="r101">R�ponse1</label><br/>
				<input type="checkbox" name="r�ponse102" id="r102" /> <label for="r102">R�ponse2</label><br/>
				<input type="checkbox" name="r�ponse103" id="r103" /> <label for="r103">R�ponse3</label><br/>
				<input type="checkbox" name="r�ponse104" id="r104" /> <label for="r104">R�ponse4</label><br/>
				<input type="checkbox" name="r�ponse105" id="r105" /> <label for="r105">R�ponse5</label><br/>
				<input type="checkbox" name="r�ponse106" id="r106" /> <label for="r106">R�ponse6</label>
			</p><br/>
		</form>
  	</div>

<?php include('bas.php'); ?>