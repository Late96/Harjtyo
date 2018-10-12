<?php require_once('includes/header.php'); ?>

<div class="container">
  <div class="tilisiirto">
    <form class="" action="tilisiirtoHyväksytty.php" method="post">
    <h2>Tilisiirto omalle tilille</h2>
    <label for="snimi">Tililtä:</label>
		<select name="tililta">
			<option value="FI12 3456 78910111213">FI12 3456 78910111213</option>
			<option value="FI09 8765 43210987655">FI09 8765 43210987655</option>
			<option value="FI44 4341 15351050394">FI44 4341 15351050394</option>
		</select><br><br>
    <label for="tilille">Tilille:</label>
		<select name="tilille">
			<option value="FI12 3456 78910111213">FI12 3456 78910111213</option>
			<option value="FI09 8765 43210987655">FI09 8765 43210987655</option>
			<option value="FI44 4341 15351050394">FI44 4341 15351050394</option>
		</select><br><br>
		<label for="maara">Määrä:</label>
		<input type="text" name="maara" id="maara"><br><br>
    <label for="viesti">Viesti:</label>
    <input type="text" name="viesti" id="viesti"><br><br>
    <input class="btn1" onclick="tilisiirtoHyväksytty.php" type="submit" name="btn1" value="Hyväksy">
    </form>
  </div>
</div>

</div>
</body>
</html>
