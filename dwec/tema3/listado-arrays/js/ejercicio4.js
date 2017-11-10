{
  document.write( "function creaArray(longitud) { <br>" +
    "&nbsp; arr = new Array(); <br> " +
    "&nbsp; for(let i = 0; i < longitud+1; i++) { <br>" +
      "&nbsp;&nbsp; arr.push(i); <br>" +
    "&nbsp;} <br>" +
  "}"
  );

  function crear(){
    let entrada = prompt("Ingrese la longitud del array: ");
    let longitud = parseInt(entrada);
    if(longitud > 0 ) {
      alert(creaArray(longitud));
    } else {
      alert("Debes introducir una cantidad validad para la longitud 1 al 99999");
    }
  }

  function creaArray(longitud) {
    arr = new Array();
    for(let i = 0; i < longitud+1; i++) {
      arr.push(i);
    }
    return arr.toString();
  }
  
}