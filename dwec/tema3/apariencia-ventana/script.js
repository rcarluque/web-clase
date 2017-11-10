{
   // Buscamos el botón y le añadimos la llamada al hacer click
  let button = document.getElementById("myButton");

  button.addEventListener("click", function() { 
    // Creamos la ventana
    let ventana = window.open("", "", "width=300, height=200");
    // Escribimos en el fichero todo lo necesario
    ventana.document.write(
      "<html>" +
      "<head> <title>Ventana de Prueba</title> </head>" +
      "<body>" +
        "<p>Se han utilizado las siguientes propiedades:<p>" +
        "<ul>" +
          "<li> Height = 200</li>" +
          "<li> Width = 300 </li>" +
        "</ul>" +
      "</body>" +
      "</html>"
    );
  });   
}