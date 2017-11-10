/**
 * @author Rafael Carmona Luque
 * Función que devuelve el día de la semana de la fecha introducida o del día actual.
 */
{
  let diaDeLaSemana = function(fecha) {
    if(fecha == null){
      fecha = new Date();
    }

    switch(fecha.getDay()) {
      case 0:
        return "Domingo";
        break;
      case 1:
        return "Lunes";
        break;
      case 2:
        return "Martes";
        break;
      case 3:
        return "Miércoles";
        break;
      case 4:
        return "Jueves";
        break;
      case 5:
        return "Viernes";
        break;
      case 6:
        return "Sábado";
        break;
    }
  }

  let d = new Date(99,5,24,11,33,30,0);

  document.open();
  document.write("diaDeLaSemana(); <br> let d = new Date(99,5,24,11,33,30,0); <br> diaDeLaSemana(d); <br><br>");
  document.write(diaDeLaSemana() + "<br>");
  document.write(diaDeLaSemana(d));
  document.close();
}