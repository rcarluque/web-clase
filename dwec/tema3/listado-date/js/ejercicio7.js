/**
 * @author Rafael Carmona Luque
 * Función que devuelve si el año es bisiesto o no.
 */
{
  let esBisiesto = function(fecha) {
    // Comprobamos que sea una fecha el parametro recibido. Posteriormente comprobamos si la 
    // división del año de la fecha entre 4 es 0, querrá decir que es bisiesto.
    if(fecha instanceof Date) return (fecha.getYear() % 4 == 0) ? "El año es bisiesto" : "El año no es bisiesto";
    else return "La fecha no es un objeto Date.";
  }

  let d = new Date();
  document.open();
  document.write(esBisiesto(d));
  document.close;
}