window.onload = function() {

  var texto = document.getElementById("texto");
  var info = document.getElementById("informacion");

  // Recogemos los elementos de enlace del texto. Escribimos en el documento el número de estos.
  var enlaces = texto.getElementsByTagName("a");
  console.log(enlaces);
  info.innerHTML = "El texto contiene "+enlaces.length+ " enlaces";

  // Dirección a la que apunta el penúltimo enlace.
  var penultimoEnlace = enlaces[enlaces.length-2].href;
  info.innerHTML += "</br> El penúltimo enlace apunta a: "+penultimoEnlace;

  // Comprobamos la cantidad de enlaces que apuntan a prueba. Para ello creamos una variable
  // contador, que se incrementara cada vez que uno de los enlaces sea igual a prueba.
  var contador = 0;
  for(var i = 0; i < enlaces.length; i++) {
    // debemos comprobar también sin la barra final debido a la posibilidad de usar diferentes navegadores
    if(enlaces[i].href == "http://prueba/" || enlaces[i].href == "http://prueba") {
      contador++;
    }
  }
  info.innerHTML += "</br> Hay un total de "+contador+" enlaces que apuntan a http://prueba";

  // Numero de enlaces del tercer párrafo
  var parrafos = texto.getElementsByTagName("p");
  var enlacesUltParr = parrafos[2].getElementsByTagName("a");
  info.innerHTML += "</br> El último párrafo tiene "+enlacesUltParr.length+" enlaces";

}
