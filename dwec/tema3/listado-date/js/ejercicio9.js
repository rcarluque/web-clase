/**
 * @author Rafael Carmona Luque
 * Función que calcula los días que restan hasta final de año
 */
{
  let calcularHastaFinDeAnno = function() {
    let hoy = new Date();
    // Creamos ob objeto Date() con el último día del año
    let anoNuevo = new Date(hoy.getFullYear(), 11, 31);
    // Ahora sumamos un día al final del último día del año. El cuál será el año nuevo.
    anoNuevo.setDate(anoNuevo.getDate() + 1);

    // Obtenemos la diferencia entre ambos días
    let diasDif = anoNuevo.getTime() - hoy.getTime();
    // Redondeamos el valor de la cuenta que calculará los días restantes
    let dias = Math.round(diasDif/(1000 * 60 * 60 * 24));

    return dias;
  }

  document.open();
  document.write("Quedan "+calcularHastaFinDeAnno()+" días hasta fin de año.");
  document.close();
}