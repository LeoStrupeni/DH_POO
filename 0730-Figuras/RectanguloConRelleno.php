<?php

class RectanguloConRelleno extends Rectangulo {
    protected $color;

    public function __construct($color){
        $this->color = $color;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }

    public function dibujar(){
        echo    "<svg width='".$this->getBase()."' height='".$this->getAltura()."'>
                    <rect width='".$this->getBase()."' height='".$this->getAltura()." style='fill:".$this->getColor().";stroke:black'/>
                </svg>";
    }

}