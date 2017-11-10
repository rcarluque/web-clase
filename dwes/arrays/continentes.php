<?php
/**
 * User: Rafael Carmona Luque
 * File: continentes.php
 * Date: 04/10/17
 * Description: Información sobre continentes, países, capitales y banderas.
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
                      array("Australia" => array("capital" => "Canberra", "bandera" => "http://flags.fmcdn.net/data/flags/w580/au.png"),
                          "Nueva Zelanda" => array("capital" => "Wellington", "bandera" => "http://flagpedia.net/data/flags/small/nz.png"),
                          "Palaos" => array("capital" => "Ngerulmud", "bandera" => "http://flags.fmcdn.net/data/flags/w580/pw.png"),
                      )
                  )
              );

              $output.= "<table border='1' style='margin: 10px auto'>
                      <tr style='border: double'>
                          <td style='font-weight: bold'>Continente</td>
                          <td style='font-weight: bold'>Pais</td>
                          <td style='font-weight: bold'>Capital</td>
                          <td style='font-weight: bold'>Bandera</td>
                      </tr>
              ";

              foreach ($continentes as $continente => $paises){

                  foreach ($paises as $pais => $datos) {
                      $output.= "<tr style='border: double'>";
                      $output.= "<td font-weight: bold'>" . $continente . "</td>";
                      $output.= "<td>" . $pais . "</td>";
                      $output.= "<td>" . $datos["capital"] . "</td>";
                      $output.= "<td><img src='$datos[bandera]' style='width: 50px; height: 50px;'></td>";
                      $output.= "</tr>";
                  }
              }

              $output.= "</table>";
              echo $output;

      ?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>

