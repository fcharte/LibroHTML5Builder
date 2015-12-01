<!doctype html>
<html lang="es">
 <head>
  <meta charset="utf-8">
  <title>Variables en PHP</title>
 </head>
 <body>
 <h1>Variables simples</h1
 <ul>
<?php
$a = 10;
$b = &$a;

$b = 5;
print "<p>".gettype(&$b)."<p>".$a;
?>
 </ul>

 <h1>Vectores</h1
 <ul>
<?php
$vector = array(166.386, 'Un euro', 1, true);

print "<li>Elementos en el vector: ".count($vector).
      "<li>vector[1]: ".$vector[1].
      "<li>vector[5]: ".$vector[5].
      "<li>vector: ".$vector;
?>
 </ul>

 <h1>Vectores asociativos</h1
 <ul>
<?php
$tarea = array(
  'fecha' => '25/Feb/2012',
  'dias' => 23,
  'completada' => false,
  'descripcion' => 'Lo que tengamos que hacer'
);

print "<li>Fecha: ".$tarea['fecha'].
      "<li>Días: ".$tarea['dias'].
      "<li>Completada: ".$tarea['completada'].
      "<li>Descripción: ".$tarea['descripcion'].
      "<li>Número de elementos: ".count($tarea).
      "<li>Elemento 0: ".$tarea[0];

foreach($tarea as $nombre => $valor)
 print "<li>".$nombre.": ".$valor;
?>
 </ul>

 </body>
</html>