{
  document.write("Introducción de 10 elementos push(), unshift() y directamente <br><br>");

  let push = function (){
    let arboles = new Array();
    let t0 = performance.now();
    arboles.push("pino", "secuoya", "abeto", "abedul");
    let t1 = performance.now();

    return t1 - t0;
  }

  let unshift = function() {
    let arboles = new Array();
    let t0 = performance.now();
    arboles.push("pino", "secuoya", "abeto", "abedul");
    let t1 = performance.now();

    return t1 - t0;
  }

  let directamente = function() {
    let t0 = performance.now();
    let arboles = new Array("pino", "secuoya", "abeto", "abedul");
    let t1 = performance.now();

    return t1 - t0;
  }

  document.write("El método <b>push()</b> tardó en realizar la insercción. (en milisegundos) &nbsp;&nbsp;&nbsp;&nbsp;" + push() + "<br>");
  document.write("El método <b>unshift()</b> tardó en realizar la insercción. (en milisegundos) &nbsp;" + unshift() + "<br>");
  document.write("La creación <b>directamente()</b> de los elementos del array tardó (ms) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + directamente() + "<br>");

  document.write("<br> Eliminación de 10 elementos pop(), shift(), directamente <br><br>");

  let pop = function() {
    let arboles = new Array("pino", "secuoya", "abeto", "abedul");
    let t0 = performance.now();
    arboles.pop();
    let t1 = performance.now();

    return t1 - t0;
  }

  let shift = function() {
    let arboles = new Array("pino", "secuoya", "abeto", "abedul");
    let t0 = performance.now();
    arboles.shift();
    let t1 = performance.now();

    return t1 - t0;
  }

  document.write("El método <b>pop()</b> tardó en realizar el borrado. (en milisegundos) &nbsp;&nbsp;&nbsp;&nbsp;" + pop() + "<br>");
  document.write("El método <b>shift()</b> tardó en realizar el borrado. (en milisegundos) &nbsp;&nbsp;&nbsp;&nbsp;" + shift() + "<br>");

}