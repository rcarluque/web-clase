{
  document.write("let paises = ['España', 'Italia', 'Holanda', 'Francia']; <br>" +
    " paises.forEach( function(element, index, array) { <br>" +
    " document.write('Pais número[' + index + '] = ' + element); <br>" +
    "}); <br>"
  );

  document.write("<hr>");
  
  let paises = ["España", "Italia", "Holanda", "Francia"];

  paises.forEach( function(element, index, array) {
    document.write("Pais número[" + index + "] = " + element +"<br>");
  });
}