<?php

class pyme extends Cliente implements Liquidable,Imprimible{
    protected $razonSocial;
    protected $cuit;
    protected $origen;

    //Creo una función constructora con sus parámetros necesarios

    public function __construct($razonSocial,$cuit,$origen){
        $this->razonSocial = $razonSocial;
        $this->cuit = $cuit;
        $this->origen = $origen;
    }
    
    //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado

    public function setRZ($razonSocial){
        $this->razonSocial = $razonSocial;
    }
    public function getRZ(){
        return $this->razonSocial;
    }

    public function setCuit($cuit){
        $this->cuit = $cuit;
    }
    public function getCuit(){
        return $this->cuit;
    }

    public function setOrigen($origen){
        $this->origen = $origen;
    }
    public function getOrigen(){
        return $this->origen;
    }

    public function liquidarHaberes($persona,$monto){
        
    }
    
    public function mostrar(){
        return $this->getRZ();
    }
    
}

?>