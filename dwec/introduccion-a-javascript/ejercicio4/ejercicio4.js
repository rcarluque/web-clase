function comprobar() {
  var valores = [true, 5, false, "hola", "adios", 2];

  // Determinamos cual es mayor. Op Ternario -> variable = condición ? valor si cierto : valor si falso
  var resultado = valores[3] > valores[4] ? "La cadena "+valores[3]+" es mayor" : "La cadena "+valores[4]+" es mayor"
  alert(resultado);

  // Combinamos valores booleanos y obtenermos el resultado ->
  var valor1 = valores[0];
  var valor2 = valores[2];
  // -> TRUE
  var resultado = valor1 || valor2;
  alert(resultado);
  // -> FALSE
  resultado = valor1 && valor2;
  alert(resultado);

  // Operaciones matemáticas
  var num1 = valores[1];
  var num2 = valores[5];

  var suma = num1 + num2;
  alert(suma);

  var resta = num1 - num2;
  alert(resta);

  var multiplicacion = num1 * num2;
  alert(multiplicacion);

  var division = num1 / num2;
  alert(division);

  var resto = num1 % num2;
  alert(resto);
}
