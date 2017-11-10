<?php
/**
 * User: Rafael Carmona Luque
 * File: continentes.php
 * Date: 13/10/17
 * Description: Muestra la lista de continentes. Al seleccionar uno, aparecerá la lista de paises.
 * Al seleccionar un país aparecerá su capital y bandera.
 */

  $output;
  $continentes = array(
    "Europa" => (
      array("España" => array("capital" => "Madrid", "bandera" => "http://flags.fmcdn.net/data/flags/w580/es.png"),
        "Francia" => array("capital" => "Paris", "bandera" => "http://flags.fmcdn.net/data/flags/w580/fr.png"),
        "Alemania" => array("capital" => "Berlín", "bandera" => "http://flags.fmcdn.net/data/flags/w580/de.png"),
      )
    ),
    "Asia" => (
      array("Japón" => array("capital" => "Tokio", "bandera" => "http://flags.fmcdn.net/data/flags/w580/jp.png"),
        "China" => array("capital" => "Pekín", "bandera" => "http://flags.fmcdn.net/data/flags/w580/cn.png"),
        "India" => array("capital" => "Nueva Delhi", "bandera" => "http://flagpedia.net/data/flags/small/in.png"),
      )
    ),
    "África" => (
      array("Camerún" => array("capital" => "Yaoundé", "bandera" => "http://flagpedia.net/data/flags/small/cm.png"),
        "Argelia" => array("capital" => "Argel", "bandera" => "http://flags.fmcdn.net/data/flags/w580/dz.png"),
        "Sudafrica" => array("capital" => "Pretoria", "bandera" => "http://flagpedia.net/data/flags/small/za.png"),
      )
    ),
    "América" => (
      array("Estados Unidos" => array("capital" => "Washington", "bandera" => "http://flagpedia.net/data/flags/small/us.png"),
        "Argentina" => array("capital" => "Buenos Aires", "bandera" => "http://flagpedia.net/data/flags/small/ar.png"),
        "Brasil" => array("capital" => "Brasília", "bandera" => "http://flagpedia.net/data/flags/small/br.png"),
      )
    ),
    "Oceanía" => (
      array("Australia" => array("capital" => "Sidney", "bandera" => "http://flags.fmcdn.net/data/flags/w580/au.png"),
        "Nueva Zelanda" => array("capital" => "Wellington", "bandera" => "http://flagpedia.net/data/flags/small/nz.png"),
        "Palaos" => array("capital" => "Ngerulmud", "bandera" => "http://flags.fmcdn.net/data/flags/w580/pw.png"),
      )
    )
    );

    $continente_seleccionado = null;
    if (isset($_POST['continente'])) {
      $continente_seleccionado = $_POST['continente'];
    }

    $pais_seleccionado = null;
    if (isset($_POST['pais'])) {
      $pais_seleccionado = $_POST['pais'];
    }

        $output.= "<form method='post'>
                    <select name='continente' onchange='this.form.submit()'>
                      <option value='null'></option>";
                    // Recorremos el array de continentes
                    foreach ($continentes as $continente => $paises) {
                      // Asignamos cómo valor la clave de los continentes
                      $output.= "<option value='$continente' ";
                      // Si el continente seleccionado es igual a la clave, se queda como seleccionado.
                      if($continente == $continente_seleccionado) $output.= "selected='selected'";
                      $output.= ">$continente</option>";
                    }
        $output.= "</select>";
        

          foreach ($continentes as $continente => $paises) {
            if($continente == $continente_seleccionado){
              $output.= "<select name='pais' onchange='this.form.submit()'>
              <option value='null'></option>";
              foreach ($paises as $pais => $valores) {
                $output.= "<option value='$pais' ";
                if($pais == $pais_seleccionado) $output.= "selected='selected'";
                $output.= ">$pais</option>";
              }
              $output.= "</select>";   
            }
          }
      
        $output.= "</form>";

        foreach ($continentes as $continente => $paises) {
          if($continente == $continente_seleccionado){
            foreach ($paises as $pais => $valores) {
              if($pais == $pais_seleccionado) {
                $output.= "<table border=1 style='margin: 0 auto;'>";
                $output.= "<tr style='border: double'>";
                $output.= "<td><b>".$valores["capital"]."</b></td>";
                $output.= "<td><img src='".$valores["bandera"]."' style='width: 50px; height: 50px;' /></td>";
                $output.= "</tr>";
                $output.= "</table>";
              }
            }
          }
        }

    echo $output;

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>