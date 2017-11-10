/**
 * @author Rafael Carmona Luque
 */

let listaNumerica = document.getElementById("olDiasSemana");
let diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

diasSemana.forEach(function(dia) {
  let li = document.createElement("li");
  let texto = document.createTextNode(dia);
  li.appendChild(texto);
  listaNumerica.appendChild(li);
});