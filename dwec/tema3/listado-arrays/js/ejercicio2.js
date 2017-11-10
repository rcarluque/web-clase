{
  document.write("let arboles = new Array('secuoya', 'pino', roble', 'arce'); <br>" +
    "delete arboles[3]; <br>" +
    "3 in arboles; // devuelve false"
  );

  document.write("<hr>");

  let arboles = new Array("secuoya", "pino", "roble", "arce");
  delete arboles[3];
  document.write(3 in arboles);
}