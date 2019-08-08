<?php
include 'cuenta.php';

class Classic extends cuenta{
    
    protected $debitar;

    public function debitar($monto,$codCajero){
        switch ($codCajero) {
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
    
    public function acreditar($monto){
        $this->Balance=$monto;
        $this->setFechaUltimoMovimientos(date());
    
    
    }



}