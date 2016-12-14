<?php
/**
 *
 */
class JugarDado {

private $minNumDado=0;
private $maxNumDado=0;
private $tirardado= 0;

//getters
public function getminNumDado(){
  return $this->minNumDado;
}
public function getmaxNumDado(){
  return $this->maxNumDado;
}
//setters
public function setminNumDado($minNumDado){
  if ($minNumDado<0) {
    $this->minNumDado=0;
  }else {
    $this->minNumDado=$minNumDado;
  }
}
public function setmaxNumDado($maxNumDado){
  if ($maxNumDado>12) {
    $this->maxNumDado=12;
  }else {
    $this->maxNumDado=$maxNumDado;
  }
}

public function tirardado()
{
  return $this->tirardado=rand($this->minNumDado,$this->maxNumDado);
}





}





 ?>
