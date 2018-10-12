<?php include('includes/header.php'); ?>

<?php

  $tililta = $_REQUEST['tililta'];
  $tilille = $_REQUEST['tilille'];
  $maara = $_REQUEST['maara'];
  $viesti = $_REQUEST['viesti'];


  echo '<div class="tilisiirto">';
  echo '<h2>Tilisiirto Hyväksytty</h2>';
  echo '<label>';
  echo("Tililtä: " . $tililta);
  echo("<br/><br/>Tilille: " . $tilille);
  echo("<br/><br/>Määrä: " . $maara);
  echo("<br/><br/>Viesti: " . $viesti);
  echo '</label>';
  echo '</div>';

 ?>




</div>
</body>
</html>
