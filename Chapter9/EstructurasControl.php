<?php
$a�o = 2013;
if(($a�o % 4 == 0) &&
  (($a�o % 100 != 0) || ($a�o % 400 == 0)))
    print $a�o.' es bisiesto';
else
    print $a�o.' no es bisiesto';

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













