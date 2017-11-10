function comprobar() {
  var cadena = prompt('Ingrese la cadena de comprobación:');
  palindromo(cadena);
}

function palindromo(cadena) {
  var resultado = "La cadena \""+cadena+"\" \n";

  // Convertimos la cadena a minuscula y después guardamos en un array las letras.
  var letrasEspacios = cadena.toLowerCase().split("");

  // Eliminar los espacios en blanco (no podemos usar la funcion "replace")
  var cadenaSinEspacios = "";
  for(i in letrasEspacios) {
    if(letrasEspacios[i] != " ") {
      cadenaSinEspacios += letrasEspacios[i];
    }
  }

  var letras = cadenaSinEspacios.split("");
  var letrasReves = cadenaSinEspacios.split("").reverse();

  // Este paso tambien es muy largo porque no se utiliza la sentencia "break"
  var iguales = true;
  for(i in letras) {
    if(letras[i] == letrasReves[i]) {
      // Todo bien
    }
    else {
      // Alguna letra es distinta, por lo que ya no es un palindromo
      iguales = false;
    }
  }

  if(iguales) {
    resultado += " es un palíndromo";
  }
  else {
    resultado += " no es un palíndromo";
  }

  alert(resultado);
}
