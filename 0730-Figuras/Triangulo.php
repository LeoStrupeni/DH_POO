<?php

class Triangulo extends Figura implements Comparable,Dibujable{
    protected $base;
    protected $lado2;
    protected $lado3;
    protected $altura;
    
    public function __construct($base,$lado1,$lado2,$altura){
        $this->base = $base;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->altura = $altura;
    }

    public function setBase($base){
        $this->base=$base;
    }
    public function getBase(){
        return $this->base;
    }
    public function setLado1($lado1){
        $this->lado1=$lado1;
    }
    public function getLado1(){
        return $this->lado1;
    }
    public function setLado2($lado2){
        $this->lado2=$lado2;
    }
    public function getLado2(){
        return $this->lado2;
    }
    public function setAltura($altura){
        $this->altura=$altura;
    }
    public function getAltura(){
        return $this->altura;
    }

    public function calcularPerimetro(){
        $perimetro = $this->getBase()+$this->getLado1()+$this->getLado2();
        $this->setPerimetro($perimetro);
    }
    
    public function calcularArea(){
        $area = $this->getBase()*$this->getAltura()/2;
        $this->setArea($area);
    }

    public function equals($param1,$param2){
        $resultado=false;
        if ($param1->getPerimetro()==$param2->getPerimetro() && $param1->getArea()==$param2->getArea()){
            $resultado=true;
        }
        return $resultado;       
    }

    public function dibujar(){
        echo    
        "<svg width='".$this->getBase()."' height='".$this->getAltura()."'>
            <path d='M150 0 L75 200 L225 200 Z' />
        </svg>";
        // No lo pude generar correctamente
    }
}