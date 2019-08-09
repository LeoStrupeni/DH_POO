<?php

class Circulo extends Figura implements Comparable,Dibujable{
    protected $radio;
    
    public function __construct($radio){
        $this->radio = $radio;
    }
    public function setRadio($radio){
        $this->radio=$radio;
    }
    public function getRadio(){
        return $this->radio;
    }

    public function calcularPerimetro(){
        $perimetro = $this->getRadio()*2*3.14;
        $this->setPerimetro($perimetro);
    }
    
    public function calcularArea(){
        $area = 3.14*$this->getRadio()*$this->getRadio();
        $this->setArea($area);
    }

    public function equals($param1,$param2){
        $resultado=false;
        if ($param1->getRadio()==$param2->getRadio()){
            $resultado=true;
        }
        return $resultado;       
    }

    public function dibujar(){
        echo    "<svg width='100' height='100'>
                    <circle cx='50' cy='50' r='".$this->getRadio()."'/>            
                </svg>";
    }

}