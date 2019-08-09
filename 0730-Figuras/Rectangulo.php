<?php

class Rectangulo extends Figura implements Comparable,Dibujable {
    protected $base;
    protected $altura;
    
    public function __construct($base,$altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function setBase($base){
        $this->base=$base;
    }
    public function getBase(){
        return $this->base;
    }
    public function setAltura($altura){
        $this->altura=$altura;
    }
    public function getAltura(){
        return $this->altura;
    }

    public function calcularPerimetro(){
        $perimetro = $this->getBase()*2+$this->getAltura()*2;
        $this->setPerimetro($perimetro);
    }
    
    public function calcularArea(){
        $area = $this->getBase()*$this->getAltura();
        $this->setArea($area);
    }

    public function equals($param1,$param2){
        $resultado=false;
        if ($param1->getBase()==$param2->getBase() && $param1->getAltura()==$param2->getAltura()){
            $resultado=true;
        }
        return $resultado;       
    }

    public function dibujar(){
        echo    "<svg width='".$this->getBase()."' height='".$this->getAltura()."'>
                    <rect width='".$this->getBase()."' height='".$this->getAltura()."'/>
                </svg>";
    }

}
