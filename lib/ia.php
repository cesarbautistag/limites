<?php

class ia
{
//utilización de atributos
  public $columna=0;
  public $fila=0;


//utilización de métodos
  public function getColumna(){
   return $this->columna ;
  }

   public function getFila(){
    return $this->fila;
  }

  public function randomPos(){
    $this->fila=rand (0,3 );
    $this->columna=rand (0,3);
  }
//setters & if
  public function setFila($fil){
    if ($fil<0){
      $this->fila=0;
    }
    if ($fil<0){
      $this->fila=0;
    }
   elseif ($fil>3){
     $this->fila=3;
   }
    else{
      $this->fila=$fil;
    }

  }
  public function setColumna($col){
    if ($col<0){
        $this->colulmna=0;
    }
    elseif ($col>3){
      $this->columna=3;
  }else {
      $this->columna=$col;}

  }


} ?>
