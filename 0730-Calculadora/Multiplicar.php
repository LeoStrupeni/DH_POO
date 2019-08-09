<?php

class Multiplicacion extends Suma implements Operable{
    public function operar($num1,$num2){
        return $this->getNum1()*$this->getNum2();
    }
    
}