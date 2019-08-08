<?php

class Habilidad {
    private $nombre;
    private $expertise;

    public function __construct($pNombre,$pExpertise){
        $this->nombre=$pNombre;
        $this->expertise=$pExpertise;      
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getExpertise(){
        return $this->expertise;
    }

    public function setExpertise($expertise){
        $this->expertise=$expertise;
    }

}