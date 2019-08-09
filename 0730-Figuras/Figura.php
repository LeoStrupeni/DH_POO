<?php

abstract class Figura {
    protected $perimetro;
    protected $area;

    public function setPerimetro($perimetro){
        $this->perimetro=$perimetro;
    }
    public function setArea($area){
        $this->area=$area;
    }
    public function getPerimetro(){
        return $this->perimetro;
    }
    public function getArea(){
        return $this->area;
    }
}