<?php require_once('includes/header.php'); ?>

<div class="container">
<table class="table table-bordered table-hover table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Tili</th>
      <th scope="col">Tilinumero</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Käyttötili</th>
      <td>FI12 3456 78910111213</td>
      <td>5,678€</td>
    </tr>
    <tr>
      <th scope="row">ASP</th>
      <td>FI09 8765 43210987655</td>
      <td>10,500€</td>
    </tr>
    <tr onclick="window.location.href = 'tilitapahtumat.php';">
      <th scope="row">Säästötili</th>
      <td>FI44 4341 15351050394</td>
      <td>55,778€</td>
    </tr>
  </tbody>
</table>

<table class="table table-bordered table-hover table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Kortti</th>
      <th scope="col">Kortin numero</th>
      <th scope="col">Voimassa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Visa Debit</th>
      <td>1234 56** **** 7890</td>
      <td>5/22</td>
    </tr>
    <tr>
      <th scope="row">Visa Electron</th>
      <td>5425 98** **** 5634</td>
      <td>7/23</td>
    </tr>
  </tbody>
</table>


  </div>

</div>
</body>
</html>
