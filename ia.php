<?php
//Definicion de la clase ia.
class ia{
public $col;
public $fil;

	//establecemos el rand, para obtener el numero aletorio.
	public function randomPos(){
		$this->columna=rand(0,3);
		$this->fila=rand(0,3);
		}
		
	//metodo GET.
	public function getColumna()
    {
        return $this->columna;
    }
	public function getFila()
    {
        return $this->fila;
    }
	//metodo SET.
	public function setColumna($col){
		$this->columna=$col;
	}
	public function setFila($fil){
		$this->fila=$fil;
	}

	}



?>
	