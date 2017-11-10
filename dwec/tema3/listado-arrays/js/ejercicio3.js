{
  document.write( "let arboles = new Array('secuoya', 'pino', 'roble', 'arce'); <br>" +
    "document.write(Array.isArray(arboles));"
  );

  document.write("<hr>");

  let arboles = new Array("secuoya", "pino", "roble", "arce");
  document.write(Array.isArray(arboles));
}