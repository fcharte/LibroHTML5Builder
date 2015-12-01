<?php
$año = 2013;
if(($año % 4 == 0) &&
  (($año % 100 != 0) || ($año % 400 == 0)))
    print $año.' es bisiesto';
else
    print $año.' no es bisiesto';

function expon($base, $exponente) {
   $valor = 1;
   while($exponente--)
       $valor *= $base;
   return $valor;
}

//print "<p>".expon(5,3);

$globales = Array($_SERVER, $_SESSION, $_REQUEST, $_GET, $_POST);

foreach($GLOBALS as $nombre => $valor) {
 print "<li>".$nombre.": ".$valor;
 if(is_array($valor)) {
   print "<ul>";
   foreach($valor as $elemento => $contenido)
     print "<li>".$elemento.": ".$contenido;
   print "</ul>";
 }
}

?>













