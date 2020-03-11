<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cuenta
 *
 * @author pabhoz
 */
class Cuenta {

    private $numero;
    private $saldo;

    public function __construct(int $numero,float $saldo) {
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    function getNumero() {
        return $this->numero;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function retirar(float $cantidad){
        if($cantidad <= $this->getSaldo()){
            $this->saldo -= $cantidad;
        }
    }

    //Memento
    public function getState(): CuentaMemento
    {
        return new CuentaMemento($this->numero, $this->saldo);
    }

    public function setState(CuentaMemento $state)
    {
        if (!($state instanceof CuentaMemento)) {
            throw new Exception('Memento object not recognized.');
        }
        $this->saldo= $state->getSaldo();
        $this->numero = $state->getNumero();
    }
}
