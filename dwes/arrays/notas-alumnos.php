<?php
/**
 * User: Rafael Carmona Luque
 * File: notas-alumnos.php
 * Date: 03/10/17
 * Description: Muestra las notas de los alumnos de 2DAW para el módulo DWES
 */



        $output;
        $alumnos = array(
          array("nombre" => "Nieves María", "apellidos" => "Borrero Barea", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Rafael", "apellidos" => "Carmona Arrabal", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Rafael", "apellidos" => "Carmona Luque", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Alberto", "apellidos" => "Perez Cano", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Daniel", "apellidos" => "Gestino Notario", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Dario", "apellidos" => "Fernandez Osuna", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "David", "apellidos" => "Mateo Cuenca", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Isabel María", "apellidos" => "Gómez Palomeque", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Javier", "apellidos" => "Ponferrada López", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Jesús", "apellidos" => "Mejias Leiva", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Jesús", "apellidos" => "Requena Pérez", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Jorge", "apellidos" => "Granados Jurado", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "José", "apellidos" => "Lucena", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Juan", "apellidos" => "Rueda Morales", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Mario", "apellidos" => "Ferrer Nieto", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Miguel Ángel", "apellidos" => "Gavilán Merino", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Pablo", "apellidos" => "León Alcaide", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Pedro", "apellidos" => "Caballero", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Rafael", "apellidos" => "Mellado Jiménez", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Soledad", "apellidos" => "Cruz Moleón", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Victor Manuel", "apellidos" => "Gómez Muñoz", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
          array("nombre" => "Victoriano", "apellidos" => "Sevillano Vega", "1ev" => 7, "2ev" => 8, "3ev" => 8, "final" => 8),
        );

        $output.= "
            <table border='1' style='margin: 0 auto'>
                <tr style='border: double;'>
                    <td style='font-weight: bold;'>Nombre</td>
                    <td style='font-weight: bold;'>Apellidos</td>
                    <td style='font-weight: bold;'>1EV</td>
                    <td style='font-weight: bold;'>2EV</td>
                    <td style='font-weight: bold;'>3EV</td>
                    <td style='font-weight: bold;'>Final</td>
                </tr>
            ";

        foreach ($alumnos as $array => $alumno) {
            $output.= "<tr>";
            foreach ($alumno as $item) {
                $output.= "<td style='border: 1px solid'>" . $item . "</td>";
            }
            $output.= "</tr>";
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