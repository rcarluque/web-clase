{
  document.write(" let creaArray = function() { <br>" + 
      "&nbsp; let arboles = new Array(); <br>" +
      "&nbsp; for (let i = 0; i < arguments.length; i++) { <br>" +
        "&nbsp;&nbsp; arboles.push(arguments[i]); <br>" +
      "&nbsp; }<br>" +
      "&nbsp; return arboles; <br>"+
    "} <br>"
  );

  document.write("<hr>");

  let creaArray = function() {
    let arboles = new Array();
    // Agregamos cada uno de los argumentos pasados al array
    for (let i = 0; i < arguments.length; i++) {
      arboles.push(arguments[i]);
    }
    return arboles;
  }

  document.write("creaArray('secuoya', 'pino', 'roble', 'arce') <br>");
  document.write(creaArray("secuoya", "pino", "roble", "arce"));
}