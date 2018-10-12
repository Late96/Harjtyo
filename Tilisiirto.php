<div class="container">
  <div class="tilisiirto">
    <h2>Tilisiirto omalle tilille</h2>

    <label for="snimi">Tililtä:</label>
		<select>
			<option value="tili1">FI12 3456 78910111213</option>
			<option value="tili2">FI09 8765 43210987655</option>
			<option value="tili3">FI44 4341 15351050394</option>
		</select><br><br>
    <label for="snimi">Tilille:</label>
		<select>
			<option value="tili1">FI12 3456 78910111213</option>
			<option value="tili2">FI09 8765 43210987655</option>
			<option value="tili3">FI44 4341 15351050394</option>
		</select><br><br>
		<label for="määrä">Määrä:</label>
		<input type="text" name="määrä" id="määrä"><br><br>
    <label for="snimi">Viesti:</label>
    <input type="text" name="viesti" id="viesti"><br><br>
    <input class="btn1" onclick="show_confirmSiirto()" type="button" name="btn1" value="Hyväksy">
    <input class="btn2" onclick="loadXMLDoc('#')" type="button" name="btn2" value="Keskeytä">
  </div>
</div>

</div>
</body>
</html>
