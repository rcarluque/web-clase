<?php
/**
 * User: Rafael Carmona Luque
 * File: verbos-irregulares.php
 * Date: 15/10/17
 * Description: Muestra una tabla con verbos irregulares a completar en función de una dificultad.
 */

?>

<form method="post" action="" >
  Número de verbos irregulares para test:
  <input type="number" name="num_verbos">
  Dificultad:
  <select name="difucultad">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select>
  <br><br>
  <input type="submit" name="datos_form" value="Aceptar">
</form>

<?php

  $output;
  $irregularVerbs = array (
    array('be',        'was / were','been',      'ser'),
    array('beat',      'beat',      'beaten',    'golpear'),
    array('become',    'became',    'become',    'llegar a ser'),
    array('begin',     'began',     'begun',     'empezar'),
    array('bend',      'bent',      'bent',      'doblar'),
    array('bet',       'bet',       'bet',       'apostar'),
    array('bite',      'bit',       'bitten',    'morder'),
    array('bleed',     'bled',      'bled',      'sangrar'),
    array('blow',      'blew',      'blown',     'soplar'),
    array('break',     'broke',     'broken',    'romper'),
    array('bring',     'brought',   'brought',   'traer'),
    array('build',     'built',     'built',     'construir'),
    array('burn',      'burnt',     'burnt',     'quemar'),
    array('burst',     'burst',     'burst',     'estallar'),
    array('buy',       'bought',    'bought',    'comprar'),
    array('catch',     'caught',    'caught',    'coger'),
    array('choose',    'chose',     'chosen',    'elegir'),
    array('come',      'came',      'come',      'venir'),
    array('cost',      'cost',      'cost',      'costar'),
    array('cut',       'cut',       'cut',       'cortar'),
    array('deal',      'dealt',     'dealt',     'tratar'),
    array('dig',       'dug',       'dug',       'cavar'),
    array('do',        'did',       'done',      'hacer'),
    array('draw',      'drew',      'drawn',     'dibujar'),
    array('dream',     'dreamt',    'dreamt',    'soñar'),
    array('drink',     'drank',     'drunk',     'beber'),
    array('drive',     'drove',     'driven',    'conducir'),
    array('eat',       'ate',       'eaten',     'comer'),
    array('fall',      'fell',      'fallen',    'caer'),
    array('feed',      'fed',       'fed',       'alimentar'),
    array('feel',      'felt',      'felt',      'sentir'),
    array('fight',     'fought',    'fought',    'luchar'),
    array('find',      'found',     'found',     'encontrar'),
    array('fly',       'flew',      'flown',     'volar'),
    array('forget',    'forgot',    'forgotten', 'olvidar'),
    array('forgive',   'forgave',   'forgiven',  'perdonar'),
    array('freeze',    'froze',     'frozen',    'congelar'),
    array('get',       'got',       'got',       'conseguir'),
    array('give',      'gave',      'given',     'dar'),
    array('go',        'went',      'gone',      'ir'),
    array('grow',      'grew',      'grown',     'crecer'),
    array('hang',      'hung',      'hung',      'colgar'),
    array('have',      'had',       'had',       'tener'),
    array('hear',      'heard',     'heard',     'oír'),
    array('hide',      'hid',       'hidden',    'esconder'),
    array('hit',       'hit',       'hit',       'golpear'),
    array('hold',      'held',      'held',      'sujetar'),
    array('hurt',      'hurt',      'hurt',      'herir'),
    array('keep',      'kept',      'kept',      'mantener'),
    array('know',      'knew',      'known',     'saber'),
    array('lay',       'laid',      'laid',      'extender'),
    array('lead',      'led',       'led',       'guiar'),
    array('learn',     'learnt',    'learnt',    'aprender'),
    array('leave',     'left',      'left',      'marcharse'),
    array('lend',      'lent',      'lent',      'prestar'),
    array('let',       'let',       'let',       'permitir'),
    array('lie',       'lay',       'lain',      'tumbarse'),
    array('light',     'lit',       'lit',       'encender'),
    array('lose',      'lost',      'lost',      'perder'),
    array('make',      'made',      'made',      'fabricar'),
    array('mean',      'meant',     'meant',     'significar'),
    array('meet',      'met',       'met',       'conocer a'),
    array('pay',       'paid',      'paid',      'pagar'),
    array('put',       'put',       'put',       'poner'),
    array('read',      'read',      'read',      'leer'),
    array('ride',      'rode',      'ridden',    'montar'),
    array('ring',      'rang',      'rung',      'llamar'),
    array('rise',      'rose',      'risen',     'elevar'),
    array('run',       'ran',       'run',       'correr'),
    array('say',       'said',      'said',      'decir'),
    array('see',       'saw',       'seen',      'ver'),
    array('sell',      'sold',      'sold',      'vender'),
    array('send',      'sent',      'sent',      'enviar'),
    array('set',       'set',       'set',       'colocar'),
    array('sew',       'sewed',     'sewn',      'coser'),
    array('shake',     'shook',     'shaken',    'agitar'),
    array('shine',     'shone',     'shone',     'brillar'),
    array('shoot',     'shot',      'shot',      'disparar'),
    array('show',      'showed',    'shown',     'mostrar'),
    array('shut',      'shut',      'shut',      'cerrar'),
    array('sing',      'sang',      'sung',      'cantar'),
    array('sink',      'sank',      'sunk',      'hundirse'),
    array('sit',       'sat',       'sat',       'sentarse'),
    array('sleep',     'slept',     'slept',     'dormir'),
    array('smell',     'smelt',     'smelt',     'oler'),
    array('speak',     'spoke',     'spoken',    'hablar un idioma'),
    array('spell',     'spelt',     'spelt',     'deletrear'),
    array('spend',     'spent',     'spent',     'gastar'),
    array('spill',     'spilt',     'spilt',     'derramarse'),
    array('spoil',     'spoilt',    'spoilt',    'estropear'),
    array('spread',    'spread',    'spread',    'untar'),
    array('spring',    'sprang',    'sprung',    'saltar'),
    array('stand',     'stood',     'stood',     'estar de pie'),
    array('steal',     'stole',     'stolen',    'robar'),
    array('stick',     'stuck',     'stuck',     'pegar'),
    array('sting',     'stung',     'stung',     'picar'),
    array('swear',     'swore',     'sworn',     'jurar'),
    array('sweep',     'swept',     'swept',     'barrer'),
    array('swim',      'swam',      'swum',      'nadar'),
    array('take',      'took',      'taken',     'tomar'),
    array('teach',     'taught',    'taught',    'enseñar'),
    array('tear',      'tore',      'torn',      'desgarrar'),
    array('tell',      'told',      'told',      'contar'),
    array('think',     'thought',   'thought',   'pensar'),
    array('throw',     'threw',     'thrown',    'tirar'),
    array('understand','understood','understood','comprender'),
    array('wake up',   'woke up',   'woken up',  'despertarse'),
    array('wear',      'wore',      'worn',      'llevar puesto'),
    array('win',       'won',       'won',       'ganar'),
    array('write',     'wrote',     'written',   'escribir')
   );

  $num_verbos;
  $output;

  if(isset($_POST['datos_form'])){
    if($_POST['num_verbos'] <= 0) {
      echo "<span style='color: red;'>Has introducido un número erroneo de verbos</span><br>";
    } else {
      $num_verbos = $_POST['num_verbos'];

      $output.= "
      <table border='1' style='margin: 0 auto'>
        <tr style='border: double;'>
          <td style='font-weight: bold;'>Infinitivo</td>
          <td style='font-weight: bold;'>Pasado</td>
          <td style='font-weight: bold;'>Participio</td>
          <td style='font-weight: bold;'>Español</td>
        </tr>
      ";
      for ($i = 0; $i < count($irregularVerbs[array_rand($num_verbos)]); $i++) {
        $output.= "<tr style='border: double;'>";
        for ($j = 0; $j < 4; $j++) { 
          $output.= "<td>".$irregularVerbs[$i][$j]."</td>";
        } 
        $output.= "</tr>";
      }

      $output.= "</table>";
      echo $output; 

    }
  } 

?>

<button class="show-code" onclick="showCode()">Ver código</button>

<div id="div-code">
  <?php
    show_editor_code($_GET['file']);
  ?>
</div>