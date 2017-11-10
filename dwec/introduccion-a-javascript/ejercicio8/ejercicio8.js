function comprobar() {
  var num = prompt('Ingresa un número:');

  if (!/^([0-9])*$/.test(num)) {
    alert("No se ha introducido un valor numerico");
  } else{
    var resultado = parImpar(num);
    alert(resultado);
  }

}

function parImpar(num) {
  if(num%2 === 0) return "El número "+num+" es par";
  else return "El número "+num+" es impar";
}
