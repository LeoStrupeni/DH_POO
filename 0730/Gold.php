<?php
include 'cuenta.php';

class Gold extends cuenta{

    protected $debitar;

    public function debitar($monto,$codCajero){
        switch ($codCajero) {
            case 'link':
                $this->Balance=($monto*1.05);
            break;
            default:
                $this->Balance=$monto;
            break;
        }
    }

}