{
  document.write(
    "arbolesForEach.forEach( function(element){ <br>" +
      "&nbsp; document.write(' Estoy plantando un ' + element ); <br>" +
    "}); <br>" +
    "numeros.every(element => element >= 15) <br>" +
    "numeros.every(element => element >= 35) <br>" +
    "numeros.some(element => element >= 35) <br>" +
    "numeros.element(element => element < 50) <br>"
  );

  document.write("<hr>");

  let arbolesForEach = new Array("olmo", "pino", "roble", "abedul");
  arbolesForEach.forEach( function(element){
    document.write(" Estoy plantando un " + element + "<br>");
  });

  let numeros = new Array(20, 38, 45, 50, 52);

  document.write("<br>" +
  "Estos son los números: 20, 38, 45, 50, 52: <br>" +
  "¿Son mayores que 15?: <b>" + numeros.every(element => element >= 15) + "</b> <br>" +
  "¿Son todos mayores de 35?: <b>" + numeros.every(element => element >= 35) + "</b> <br>" +
  "¿Existe alguno mayor que 35?: <b>" + numeros.some(element => element >= 35) + "</b> <br>" +
  "Estos son todos los números menores que 50: " + numeros.filter(element => element < 50)
  );
  
}