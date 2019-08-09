<?php
include 'cuenta.php';

class Platinum extends cuenta{
    protected $debitar;

    public function debitar($monto,$codCajero=null){
        $this->Balance>=5000 ? $this->Balance=$monto : $this->Balance=($monto*1.05);
    }
    

}