function loadXMLDoc(page) {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", page, true);
  xhttp.send();
}
//Maksun hyväksyminen
function show_confirmMaksu(){

  var varmistus = prompt("Anna varmistuskoodi");
  if(varmistus == 1234){
      alert("Maksu hyväksytty.");
      loadXMLDoc('Uusimaksu.php');
  }

  else{
  alert("Virheellinen varmistuskoodi.");
  }
}
//Tilisiirron hyväksyminen
function show_confirmSiirto(){

  var varmistus = prompt("Anna varmistuskoodi");
  if(varmistus == 1234){
      alert("Siirto hyväksytty.");
      loadXMLDoc('Tilisiirto.php');
  }

  else{
  alert("Virheellinen varmistuskoodi.");
  }
}
