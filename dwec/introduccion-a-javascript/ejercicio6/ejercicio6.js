function calcularLetra() {
  var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N',
  'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

  var numero = prompt("Introduce tu número de DNI (sin la letra)");
  var letra = prompt("Introduce la letra de tu DNI (en mayúsculas)");
  // Pasamos la letra a mayúscula para evitar errores.
  letra = letra.toUpperCase();

  if(numero < 0 || numero > 99999999) {
    alert("El número proporcionado no es válido");
  }
  else {
    // Dividimos el número proporcionado entre 23. Buscamos en el array de letras la posición resultado de la operación.
    // Si la letra del array es igual a la proporcionada por el usuario son correctos, sino no.
    if(letras[numero % 23] != letra) {
      alert("La letra o el número proporcionados no son correctos");
    }
    else {
      alert("El número de DNI y su letra son correctos");
    }
  }
}
