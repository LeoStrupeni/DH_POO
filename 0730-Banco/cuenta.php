<?php

abstract Class Cuenta extends Cliente implements Imprimible{
    protected $cbu;
    protected $Balance;
    protected $fechaUltimoMovimientos;
    protected $tipoCta;

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

    public function setTipoCta($tipoCta){
        $this->tipoCta = $tipoCta;
    }

    public function getTipoCta(){
        return $this->TipoCta;
    }

    public function setFechaUltimoMovimientos($fechaUltimoMovimientos){
        $this->fechaUltimoMovimientos = $fechaUltimoMovimientos;
    }

    public function getFechaUltimoMovimientos(){
        return $this->FechaUltimoMovimientos;
    }

    public abstract function debitar($monto,$codCajero);

    public function acreditar($monto,$tipocta){ 
        switch ($this->getTipoCta()) {
            case 'Classic':
                $this->Balance=($monto*0.95)+$this->Balance;
                $this->setFechaUltimoMovimientos(date());
            break;
            case 'Gold':
                $monto>=25000 ?  $this->Balance=$monto+$this->Balance : $this->Balance=($monto*0.97)+$this->Balance; 
                $this->setFechaUltimoMovimientos(date());
            break;
            case 'Platinum':
                $this->Balance=$monto+$this->Balance;
                $this->setFechaUltimoMovimientos(date());
            break;
            case 'Black':
                $monto>=1000000 ? $this->Balance=($monto*0.96)+$this->Balance : $this->Balance=$monto+$this->Balance;
                $this->setFechaUltimoMovimientos(date());
            break;
            default:
                echo "Error debe seleccionar un tipo de cuenta valida.";
            break;
        }      
    }

    public function pagarServicios($tipoCta){
        switch ($this->getTipoCta()) {
            case 'Classic':
                $this->debitar('100',null);
            break;
            case 'Gold':
                is_null($this->apellido) ? $this->debitar(len($this->RazonSocial)*5,null) : $this->debitar(len($this->apellido)*10,null) ;
            break;
            case 'Platinum':
                $this->debitar($this->Balance*0.1,null);
            break;
            case 'Black':
                $date=date();
                $weekday = date('l', strtotime($date));    
                $this->debitar($weekday*100+500,null);
            break;
            default:
                echo "Error debe seleccionar un tipo de cuenta valida.";
            break;
        }
    }
    public function mostrar(){
        return $this->getBalance();
    }
}