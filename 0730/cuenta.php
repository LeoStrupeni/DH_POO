<?php

abstract Class cuenta{
    protected $cbu;
    protected $Balance;
    protected $fechaUltimoMovimientos;

    public function __construct($cbu){
        $this->cbu = $cbu;
    }

    public function setCbu($cbu){
        $this->cbu = $cbu;
    }

    public function getCbu(){
        return $this->cbu;
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }

    public function getBalance(){
        return $this->Balance;
    }

    public function setFechaUltimoMovimientos($fechaUltimoMovimientos){
        $this->fechaUltimoMovimientos = $fechaUltimoMovimientos;
    }

    public function getFechaUltimoMovimientos(){
        return $this->FechaUltimoMovimientos;
    }

    public abstract function debitar($monto,$codCajero);

    public function acreditar($monto){
        $this->Balance=$monto+$Balance;
        $this->setFechaUltimoMovimientos(date());
    }
}