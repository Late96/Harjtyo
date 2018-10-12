
<div class="container">

<table class="table table-bordered table-hover table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Päivämäärä</th>
      <th scope="col">Laskuttaja</th>
      <th scope="col">Laskutettu määrä</th>
      <th scope="col">Tila</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">20.9.2018</th>
      <td>Videopalvelu Oy</td>
      <td>15,90€</td>
      <td>Hyväksytty</td>
    </tr>
    <tr>
      <th scope="row">15.9.2018</th>
      <td>Puhelinliittymät Oy</td>
      <td>25,90€</td>
      <td>Hyväksytty</td>
    </tr>
    <tr>
      <th scope="row">20.8.2018</th>
      <td>Videopalvelu Oy</td>
      <td>15,90€</td>
      <td>Hyväksytty</td>
    </tr>
    <tr>
      <th scope="row">15.8.2018</th>
      <td>Puhelinliittymät Oy</td>
      <td>25,90€</td>
      <td>Hyväksytty</td>
    </tr>
    <tr>
      <th scope="row">20.7.2018</th>
      <td>Videopalvelu Oy</td>
      <td>15,90€</td>
      <td>Hyväksytty</td>
    </tr>
    <tr>
      <th scope="row">15.7.2018</th>
      <td>Puhelinliittymät Oy</td>
      <td>25,90€</td>
      <td>Hyväksytty</td>
    </tr>
    <tr>
      <th scope="row">20.6.2018</th>
      <td>Videopalvelu Oy</td>
      <td>15,90€</td>
      <td>Hyväksytty</td>
    </tr>
    <tr>
      <th scope="row">15.6.2018</th>
      <td>Puhelinliittymät Oy</td>
      <td>25,90€</td>
      <td>Hyväksytty</td>
    </tr>
  </tbody>
</table>
    Saajan nimi: <input type="text" name="snimi" id="snimi"><br><br>
    Saajan tilinumero: <input type="text" name="snimi" id="stili"><br><br>
    Saajan BIC-tunnus: <input type="text" name="snimi" id="sBIC"><br><br>
    Viitenumero: <input type="text" name="snimi" id="sviite"><br><br>
    Eräpäivä: <input type="text" name="snimi" id="serä"><br><br>
    Tililtä: <input type="text" name="snimi" id="tililtä"><br><br>
    Määrä: <input type="text" name="snimi" id="määrä"><br><br>
    Tila: <input type="text" name="snimi" id="tila"><br><br>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script>
      $( document ).ready(function() {

        $(".table tbody").on('click', 'tr', function() {
            //get row contents into an array
            var rowData = $(this).children("td").map(function() {
                           return $(this).text();
            }).get();
            $("#snimi").val(rowData[0])
            $("#stili").val(rowData[1])
            $("#sBIC").val(rowData[2]);
            $("#sviite").val(rowData[3]);

        });

      });

  </script>

</div>
</div>
</body>
</html>
