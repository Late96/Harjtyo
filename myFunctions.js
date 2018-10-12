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
      window.open('maksuHyväksytty.php','_self');
  }
  else{
  alert("Virheellinen varmistuskoodi.");
   return false;
  }
  
}
//Tilisiirron hyväksyminen
function show_confirmSiirto(){

  var varmistus = prompt("Anna varmistuskoodi");
  if(varmistus == 1234){
      loadXMLDoc('tilisiirtoHyväksytty.php');
  }

  else{
  alert("Virheellinen varmistuskoodi.");
  }
}

//Ulos kirjautumisen varmistuskoodifunction show_confirmSiirto(){
function show_confirmUlos(){
  var varmistus = confirm("Haluatko varmasti kirjautua ulos?");
  if(varmistus == true){
      window.open('index.html','_self');
  }
  else{
  }
}
