<?php
/**
 * User: Rafael Carmona Luque
 * File: agenda.php
 * Date: 21/10/17
 * Description: Aplicación para gestionar una agenda de contactos.
 */

  session_start();
  $output;

  // Creamos la tabla con las cabeceras.
  $output.= 
  "<table border=1 style='margin: 0 auto;'>
    <tr style='border: double'>
      <td><b>Nombre</b></td>
      <td><b>Apellidos</b></td>
      <td><b>Número de Teléfono</b></td>
    </tr>";

  // Añadimos a la tabla cada contacto existente.
  if(isset($_SESSION['contactos'])){
    foreach ($_SESSION['contactos'] as $key => $value) {
      $output.= "<form action='' method='post'>
      <tr style='border: double'>
        <td>".$value['nombre']."</td>
        <td>".$value['apellidos']."</td>
        <td>".$value['num_telf']."</td>
        <td> <input type='text' name='id_contacto' value='".$value['id']."' style='display: none;'/> <input type='submit' name='elimina_id' value='Eliminar' /> </td>
      </tr>
      </form>";
    }
  }
  $output.= "</table>";

  $output.= "<br><form action='' method='post'> <input type='submit' name='nuevo_contacto' value='Agregar nuevo contacto' /> </form>";

  /**
   * Cuando el usuario pulse el botón de añadir contacto se mostrará este formulario.
   */
  if(isset($_POST['nuevo_contacto'])){
    $output.= "<br><form action='' method='post'>
        Nombre: <br>
        <input type='text' name='nombre' required/> <br>
        Apellidos: <br>
        <input type='text' name='apellidos' required/> <br>
        Número de telefono: <br>
        <input type='number' name='num_telf' required/> <br><br>
        <input type='submit' name='registrar' value='Registrar' />
      </form>";
  }

  /**
   * Comprobamos que reciba el valor de 'registrar' que será cuando el usuario pulse el botón
   * de registrar el formulario de nuevo usuario.
   * Aquí se crea un array con el contacto, se añade a un array de contactos en $_SESSION
   * Y refrescamos la página
   */
  if(isset($_POST['registrar'])) {
    // Comprobamos que exista el objeto ID en session. En caso de que exista
    // la id será igual al objeto sesion, en caso de que no la id será 0.
    if(isset($_SESSION['id'])){
      $id = $_SESSION['id'];
    } else {
      $id = 0;
    }

    $contacto = array("id" => $id, "nombre" => $_POST['nombre'], "apellidos" => $_POST['apellidos'], "num_telf" => $_POST['num_telf']);
    $_SESSION['contactos'][] = $contacto;
    $output.= "<meta http-equiv='refresh' content='0'>";
    // Incrementamos la ID cada vez que terminemos la insercción de un contacto.
    $_SESSION['id']++;
  }

  /**
   * Comprobamos que el usuario haya pulsado el botón de eliminar el contacto de la agenda.
   * En tal caso recogemos la id y lo eliminamos.
   * Refrecamos la página
   */
  if(isset($_POST['elimina_id'])) {

    $id_contacto = $_POST['id_contacto'];

    /**
     * array_colum, devuelve un array con todos los valores de la clave ID que encuentre 
     * dentro de los array contenidos en el array $_SESSION['contactos']. 
     * Después buscamos en ese array el valor recibido al pulsar el boton de eliminar.
     * Guardamos en una variable la posición del array encontrado.
     */
    $id_encontrada = array_search($id_contacto, array_column($_SESSION['contactos'], 'id'));

    unset($_SESSION['contactos'][$id_encontrada]);
    // Volvemos a Re-indexar el array.
    $_SESSION['contactos'] = array_values($_SESSION['contactos']);
    // Refrescamos la página
    $output.= "<meta http-equiv='refresh' content='0'>";
  }

  echo $output;

?>