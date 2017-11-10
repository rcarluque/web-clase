{
  let button = document.getElementById("button5");
  
  button.addEventListener("click", function() {
    let ventana = window.open("", "", "width=400, height=300");

    ventana.document.write("<h1 id='reloj' style='margin: 20px;'></h1>");

    let reloj = function() {
      /**
       * Guardamos en una variable la hora actual.
       * Si creamos una nueva instancia del objeto Date sin pasarle parámetros se inicializa a la fecha 
       * y hora actuales. 
       */
      let horaActual = new Date();
    
      /**
       * Ahora de ese objeto Date tenemos que extraer los recursos que nos interesan: 
       * la hora, los minutos y los segundos. 
      */
      let hora = horaActual.getHours() 
      let minutos = horaActual.getMinutes() 
      let segundos = horaActual.getSeconds() 

      ventana.document.getElementById("reloj").innerHTML = hora + ":" + minutos + ":" + segundos +" h";

      setTimeout(reloj, 1000);
    }

    reloj();
  });
}