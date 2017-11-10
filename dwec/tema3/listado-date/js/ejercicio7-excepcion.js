{
  let esBisiesto = function(fecha) {
    // Comprobamos que sea una fecha el parametro recibido. Posteriormente comprobamos si la 
    // división del año de la fecha entre 4 es 0, querrá decir que es bisiesto.
    if(fecha instanceof Date) return (fecha.getYear() % 4 == 0) ? "El año es bisiesto" : "El año no es bisiesto";
    else throw new DateException("La fecha no es un objeto Date.");
  }

  // Creamos un objeto DateException que será la excepción. Contiene el mensaje recibido y el nombre de la excepción
  let DateException = function(mensaje){
    this.mensaje = mensaje;
    this.nombre = "DateException";
  }

  // Convertimos la excepción a un formateado String para mejor muestra por consola.
  DateException.prototype.toString = function () {
    return this.nombre + ': "' + this.mensaje + '"';
  }

  let d = "holi";
  document.open();
  try { // instrucciones a probar
    document.write(esBisiesto(d));
  }
  catch (e) {
    console.log(e);
  }
  document.close;
}