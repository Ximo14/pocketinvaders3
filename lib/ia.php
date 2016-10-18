<?php
/**
 * Ejercicio hecho by Ximo Gil
 */
class ia
{

// Declaración de una propiedad
  public $columna='';
  public $fila='';


// Declaración de un método
  //Getter
public function getColumna(){
    return $this->columna;
  }
  public function getFila(){
    return $this->fila;
  }

  //Setter
  public function setColumna($col){

    if($col<0){
        $this->columna=0;
    }
    elseif($col>3){
      $this->columna=3;
    }else{
      $this->columna=$col;
    }

  }

  public function setFila($fil){

    if($fil<0){
        $this->fila=0;
    }
    elseif($fil>3){
      $this->fila=3;
    }else{
      $this->fila=$fil;
    }
}






}
 ?>
