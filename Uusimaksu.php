<?php require_once('includes/header.php'); ?>

<div class="container">
  <div class="maksu">
    <form class="" action="maksuHyväksytty.php" method="post">
    <h2>Uusi Maksu</h2>
    <label for="snimi">Saajan nimi:</label>
    <input type="text" name="snimi" id="snimi"><br><br>
    <label for="stilin">Saajan tilinumero:</label>
    <input type="text" name="stilin" id="stilin"><br><br>
    <label for="sbic">BIC-tunnus:</label>
    <input type="text" name="sbic" id="sbic"><br><br>
    <label for="sviite">Viitenumero:</label>
    <input type="text" name="sviite" id="sviite"><br><br>
    <label for="sera">Eräpäivä:</label>
    <input type="date" name="sera" id="sera"><br><br>
    <label for="tililta">Tililtä:</label>
    <select name="tililta">
      <option value="FI12 3456 78910111213">FI12 3456 78910111213</option>
      <option value="FI09 8765 43210987655">FI09 8765 43210987655</option>
      <option value="FI44 4341 15351050394">FI44 4341 15351050394</option>
    </select><br><br>
    <label for="maara">Määrä:</label>
    <input type="text" name="maara" id="maara"><br><br>
    <input class ="btn1" type="submit" onclick="maksuHyväksytty.php" name="btn1" value="Hyväksy">
    </form>
  </div>
</div>

</div>
</body>
</html>
