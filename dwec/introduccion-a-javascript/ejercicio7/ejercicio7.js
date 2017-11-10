function calcularFactorial() {
  var numero = prompt("Introduce un número");
  var resultado = 1;

  for(var i = 1; i <= numero; i++) {
    // Esto dice que, el resultado es igual al resultado múltiplicado por i
    resultado *= i;
  }
  
  alert(resultado);
}
