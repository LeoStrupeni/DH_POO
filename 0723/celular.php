<?php

class Celular {
    private $marca;
    private $modelo;
    private $proveedor;
    private $numeroTel;

    public function __construct($pMarca,$pModelo,$pProveedor,$pNumeroTel){
        $this->marca=$pMarca;
        $this->modelo=$pModelo;
        $this->proveedor=$pProveedor;
        $this->numeroTel=$pNumeroTel;
       
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($Marca){
        $this->marca=$Marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function getProveedor(){
        return $this->proveedor;
    }
    
    public function setProveedor($proveedor){
        $this->proveedor=$proveedor;
    }

    public function getNumeroTel(){
        return $this->numeroTel;
    }
    
    public function setNumeroTel($numeroTel){   
        $this->numeroTel=$numeroTel;
    }

}

?>
