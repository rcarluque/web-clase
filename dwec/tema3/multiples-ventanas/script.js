{
  // Buscamos el botón y le añadimos la llamada al hacer click
 let button = document.getElementById("myButton");

 button.addEventListener("click", function() { 
    for (let i = 0; i < 5; i++) {
      // Creamos la ventana
      let ventana = window.open("", "", "width=300, height=200");
      // Escribimos en el fichero todo lo necesario
      ventana.document.open();
      ventana.document.write(
        "<html>" +
        "<head> <title>Ventana de Prueba</title> </head>" +
        "<body>" +
          "<p>Ventana: "+ i +"<p>" +
          "<button onclick='parent.window.close()'>Cerrar</button>" +
        "</body>" +
        "</html>"
      );
      ventana.document.close();
    }
 });   

 /* Aporte -> en el onclick del botón de cada ventana podemos tanto aplicar la propiedad
 self.close() cómo parent.window.close() */

}