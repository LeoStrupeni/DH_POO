<?php
include 'cuenta.php';

class Classic extends cuenta{
    
    protected $debitar;

    public function setDebitar($debitar){
        $this->debitar = $debitar;
    }

    public function getDebitar(){
        return $this->debitar;
    }

    public function debitar($monto,$codCajero){
        switch ($this->Balance) {
            case 'Banelco':
                $this->Balance=($monto*1.05);
            break;
            case 'link':
                $this->Balance=($monto*1.1);
            break;
            default:
                $this->Balance=$monto;
            break;
        }
    }

}