<?php

class Division implements Operable{
    protected $num1;
    protected $num2;

    public function __construct($num1,$num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function setNum1($num1){
        $this->num1=$num1;
    }
    public function getNum1(){
        return $this->num1;
    }
    
    public function setNum2($num2){
        $this->num2=$num2;
    }
    public function getNum2(){
        return $this->num2;
    }
    
    public function operar($num1,$num2){
        return $this->getNum1()/$this->getNum2();
    }
}