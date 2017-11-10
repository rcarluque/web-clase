/**
 * @author Rafael Carmona Luque
 * Función que calcula la edad a partir de la introducción de la fecha de nacimiento.
 * Recoge la edad desde un formulario de la vista. Imprime la edad en una ventana diferente.
 */
{
  let calcularEdad = function(fechaNacimiento) {
    if(fechaNacimiento instanceof Date) {
      var hoy = new Date();
      // Calculamos la edad
      var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
      // Calculamos el mes. Si es 0 querrá decir que quizás aun no tengamos la edad
      var mes = hoy.getMonth() - fechaNacimiento.getMonth();
      // Si el mes es menor de 0 o el mes es 0 y hoy es un día menor que el día de la fecha.
      // Aún tendremos menos edad.
      if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNacimiento.getDate())) {
          edad--;
      }
  
      return "Tienes "+edad+" años";
    } else {
      return "No se ha introducido un tipo fecha";
    }
    
}

  let button = document.getElementById("calcular_edad");
  button.addEventListener("click", function(){
    let fecha = document.getElementById("fecha_nacimiento").value;
    
    let values=fecha.split("-");
    let dia = values[2];
    let mes = values[1];
    let ano = values[0];
    
    // Restamos 1 al mes introducido, ya que el tipo Date() maneja los meses desde el 
    // 0 (enero) hasta el 11 (diciembre);
    let fechaNacimiento = new Date(ano, mes-1, dia);
    let ventana = window.open("", "", "width=800, height=400");

    ventana.document.open();
    ventana.document.write("<h1>"+calcularEdad(fechaNacimiento)+"</h1>");
    ventana.document.close();
  });

}