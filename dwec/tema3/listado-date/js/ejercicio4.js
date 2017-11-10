/**
 * @author Rafael Carmona Luque
 * Función que devuelve si el argumento es un fecha o no.
 */
{
  let esFecha = function(fecha) {
    // instanceof devuelve verdadero o falso si la variable es una instancia del objeto 
    // que deseemos. Igualmente se puede hacer con otros tipos de datos.
    return (fecha instanceof Date) ? "el valor es una fecha" : "el valor no es una fecha";
  }

  /**
   * Comprobaciones de funcionalidad.
   */
  let fecha = new Date();
  let cadena = "hola holita";

  document.open();
  document.write("<hr>");
  document.write(" let fecha = new Date(); <br> let cadena = 'hola holita'; <br><br>");
  document.write(esFecha(fecha));
  document.write("<br>"+ esFecha(cadena));
  document.close();
}