{
  var anade = function() {
    let li = document.createElement("li");
    let texto = document.createTextNode("Añadiendo filas a la lista");
    li.appendChild(texto);

    let lista = document.getElementById("lista");
    lista.appendChild(li);

    /* Otra forma más rápida y no menos correcta sería:

    var otroLi = "<li>Texto de prueba</li>";
    lista.innerHTML += otroLi;
    */
  }
}
