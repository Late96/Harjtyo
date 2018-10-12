<div class="container">
  <div class="maksu">
    <h2>Uusi Maksu</h2>
    <label for="snimi">Saajan nimi:</label>
    <input type="text" name="snimi" id="snimi"><br><br>
    <label for="snimi">Saajan tilinumero:</label>
    <input type="text" name="tili" id="stili"><br><br>
    <label for="snimi">BIC-tunnus:</label>
    <input type="text" name="bic" id="sBIC"><br><br>
    <label for="snimi">Viitenumero:</label>
    <input type="text" name="viite" id="sviite"><br><br>
    <label for="snimi">Eräpäivä:</label>
    <input type="date" name="erä" id="serä"><br><br>
    <label for="snimi">Tililtä:</label>
    <select>
      <option value="tili1">FI12 3456 78910111213</option>
      <option value="tili2">FI09 8765 43210987655</option>
      <option value="tili3">FI44 4341 15351050394</option>
    </select><br><br>
    <label for="määrä">Määrä:</label>
    <input type="text" name="määrä" id="määrä"><br><br>
    <input class="btn1" onclick="show_confirmMaksu()" type="button" name="btn1" value="Hyväksy">
    <input class="btn2" onclick="loadXMLDoc('#')" type="button" name="btn2" value="Keskeytä">
  </div>
</div>

</div>
</body>
</html>
