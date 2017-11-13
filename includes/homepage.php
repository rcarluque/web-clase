<?php
  // Extaemos los datos del archivo json
  $json_url = "json/home-links.json";
  $json = file_get_contents($json_url);
  $data = json_decode($json, TRUE);
?>

<div class="lenguajes">

<?php
  foreach($data['data'] as $key => $val){ 

    echo "<div class='contenido-lenguajes'>
      <a href='/folder/".$val['name']."/'>
        <img class='img-lenguajes' src='".$val['imgUrl']."'/>
        <div class='overlay'>
          <div class='text-lenguajes'>".$val['description']."</div>
        </div>
      </a>
    </div>";

  }
?>

</div>

<div class="perfil">
  <img src="imgs/avatar-rafa.png" class="img-avatar" />
  <p class="description"> Soy <span class="bold">Rafael Carmona Luque</span>, actual estudiante de Desarrollo de
  Aplicaciones Web en el I.E.S Gran Capitán de Córdoba.
  Poseo los estudios de Técnico en Sistemas Microinformaticos y Redes (SMR) y
  Técnico Superior de Desarrollo de Aplicaciones Multiplataforma (DAM).</p>
</div>