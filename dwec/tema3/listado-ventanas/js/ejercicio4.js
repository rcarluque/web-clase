{
  let button = document.getElementById("button4");
  
  button.addEventListener("click", function() {
    let ventana = window.open("", "", "width=300, height=200");

    ventana.document.write("Protocolo: "+window.location.protocol +"<br>");
    ventana.document.write("Servidor: "+window.location.host+"<br>");
    ventana.document.write("Ruta: "+window.location.pathname+"<br>");
  });
}