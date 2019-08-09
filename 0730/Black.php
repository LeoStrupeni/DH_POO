<?php
include 'cuenta.php';

class Black extends cuenta{
    protected $debitar;

    public function debitar($monto,$codCajero=null){
        $this->Balance=$monto;
    }


}