{
  document.write( "let removeUndefined = function(arr) { <br>"+
      "&nbsp; arr = arr.filter( function(element) { <br>"+
        "&nbsp;&nbsp; return element !== undefined; <br>" +
      "&nbsp; }); <br>" +
      "&nbsp; return arr; <br>" +
    "}"
  );

  document.write("<hr>");

  let arboles = new Array("secuoya", "pino", undefined, "roble", undefined, "abedul");

  let removeUndefined = function(arr) {
    // arr será ahora igual a un filtrado del array, donde devolvemos los elementos que
    // no sean iguales a undefined
    arr = arr.filter( function(element) {
      return element !== undefined;
    });
    return arr;
  }

  document.write("Antes del filtrado ->" + arboles + "<br> Después del filtrado ->" + removeUndefined(arboles));
}