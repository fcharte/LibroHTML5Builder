<!doctype html>
<html lang="es">
 <head>
  <meta charset="utf-8">
  <title>Expresiones en PHP</title>
 </head>
 <body>
 <h1>Expresiones aritméticas</h1
 <ul>
<?php
$a = 47;
$b = 6;

print "<li>El cociente de ".$a." entre ".$b." es ".($a/$b).
      "<li>El resto de ".$a." entre ".$b." es ".($a%$b).
      "<li>Post-incremento ".($a++).
      "<li>Pre-incremento ".(++$b);
?>
 </ul>

 <h1>Expresiones relacionales</h1
 <ul>
<?php
function boolToStr($x) {
    return ($x ? "true":"false");
}
$a = 47;
$b = 6;
$c = '6';

print "<li>".$a." < ".$b." es ".($a<$b).
      "<li>".$a." > ".$b." es ".($a>$b).
      "<li>".$b." == ".$c." es ".($b==$c).
      "<li>".$b." === ".$c." es ".($b===$c);

?>
 </ul>

 <h1>Expresiones lógicas</h1
 <ul>
<?php
$a = true;
$b = true;
$c = false;

print "<li>".$a." Y ".$b." es ".($a && $b).
      "<li>".$a." Y ".$c." es ".($a && $c).
      "<li>".$a." O ".$b." es ".($a || $b).
      "<li>".$a." O ".$c." es ".($a || $c).
      "<li>".$a." XOR ".$b." es ".($a Xor $b).
      "<li>".$a." XOR ".$c." es ".($a Xor $c).
      "<li>!".$a." es ".(!$a).
      "<li>!".$c." es ".(!$c);
?>
 </ul>

 </body>
</html>