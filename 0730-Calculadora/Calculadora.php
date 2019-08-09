<?php

class Calculadora {
    protected $operacion;
    protected $num1;
    protected $num2;
    
    public function __construct($operacion,$num1,$num2){
        $this->operacion = $operacion;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function setNum1($num1){
        $this->num1=$num1;
    }
   
    public function setNum2($num2){
        $this->num2=$num2;
    }

    
    public function getNum1(){
        return $this->num1;
    }

    public function getNum2(){
        return $this->num2;
    }
}