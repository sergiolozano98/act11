<?php

include 'act11class.php';

$tirar = new JugarDado();

$tirar->setminNumDado(6);
$tirar->setmaxNumDado(19);



for ($i=0; $i <12 ; $i++) {
  echo $tirar->tirardado();
  echo "<br>";
}



 ?>
