<center>
<h2>Ajouter un QCM</h2>

<form method="post" value="accueil.php" name="form1">
   <table style="border-collapse:collapse;border:0px solid #FFFFFF">
   <tr><td align="right">Nom du QCM : </td><td> <input name="nomqcm"></td></tr>
   <tr><td align="right">Mati&egrave;re : </td><td>
   </td></tr>
   <tr><td align="right">Nombre de questions :</td><td> <input name="nbq"></td></tr>
   <tr><td colspan=2 align="center"><br>
<input type="hidden" name="page" value="../qcm/etp1.php">
<input value="Ajouter" type="submit" action"accueil.php" />
</table>
</form>

<br><br>

<h2>Editer les QCMs</h2>

<form method="post" action="../qcm/test.php" name="form1">
   <table style="border-collapse:collapse;border:0px solid #FFFFFF">
   <tr><td align="right">Mati&egrave;re : </td><td>
       <select size=1 name="mat">
            <option>dessin
            <option>histoire g&eacute;o
            <option>math&eacute;matiques
            <option>physique
            <option>sport
            <option>technologie
       </select>
   </td></tr>
   <tr><td colspan=2 align="center"><br><input value="Editer" type="submit" action"test.php" />
</table>
</form>

<br><br>

</center>