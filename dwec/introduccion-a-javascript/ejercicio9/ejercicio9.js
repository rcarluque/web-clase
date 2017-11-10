function comprobar() {
  var cadena;
  cadena = prompt('Ingresa la cadena que desees');
  mayusMinus(cadena);
}

function mayusMinus(cad) {
  if(cad == cad.toUpperCase()) {
    alert("El texto introducido está formado sólo por mayúsculas");
  }
  else if(cad == cad.toLowerCase()) {
    alert("El texto introducido está formado sólo por minúsculas");
  }
  else {
    alert("El texto introducido está formado por mayúsculas y minúsculas");
  }
}
