<?php require_once('includes/header.php'); ?>

<?php

  $snimi = $_REQUEST['snimi'];
  $stilin = $_REQUEST['stilin'];
  $sbic = $_REQUEST['sbic'];
  $sviite = $_REQUEST['sviite'];
  $sera = $_REQUEST['sera'];
  $tililta = $_REQUEST['tililta'];
  $maara = $_REQUEST['maara'];


  echo '<div class="maksu">';
  echo '<h2>Maksu Hyväksytty</h2>';
  echo '<label>';
  echo("Saajan nimi: " . $snimi);
  echo("<br/><br/>Saajan tilinumero: " . $stilin);
  echo("<br/><br/>BIC-tunnus: " . $sbic);
  echo("<br/><br/>Viitenumero: " . $sviite);
  echo("<br/><br/>Eräpäivä: " . $sera);
  echo("<br/><br/>Tililtä: " . $tililta);
  echo("<br/><br/>Määrä: " . $maara);
  echo '</label>';
  echo '</div>';

 ?>




</div>
</body>
</html>
