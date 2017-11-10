/**
 * @author Rafael Carmona Luque
 * Función que incrementa o decrementa el número de días de la fecha indicada.
 */

{
  let incrementaDias = function(cantidad, fecha) {
    // getDate devuelve el día del mes. A ese día de la fecha pasada, se suma
    // la cantidad, positiva o negativa y obtenemos el nuevo día.
    let dia = fecha.getDate() + cantidad;
    fecha.setDate(dia);
    return fecha;
  }

  /**
   * Comprobaciones de funcionalidad.
   */
  let d = new Date();
  d = incrementaDias(2, d);
  document.open();
  document.write("<hr>");
  document.write("let d = new Date(); <br> d = incrementaDias(2, d); <br><br>");
  document.write(d);
  document.close();

}
