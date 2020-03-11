<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CuentaMemento
 *
 * @author pabhoz
 */
class CuentaMemento {
    protected $numero;
    protected $saldo;

    function __construct($numero, $saldo) {
        $this->numero = $numero;
        $this->saldo = $saldo;
    }
    //Memento no tiene métodos setters pues cada memento es un estado único
    function getNumero() {
        return $this->numero;
    }

    function getSaldo() {
        return $this->saldo;
    }


}
