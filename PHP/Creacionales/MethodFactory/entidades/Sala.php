<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sala
 *
 * @author pabhoz
 */
class Sala extends SalaFactory{

    private $numero;
    private $sillas;
    
    public function __construct(int $numero,array $sillas) {
        $this->numero = $numero;
        $this->sillas = $sillas;
    }
    
    public function getCapacidad(): int {
        return count($this->getSillas());
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function getSillas(): array {
        return $this->sillas;
    }

    public function setNumero(int $numero): int {
        $this->numero = $numero;
    }

    public function setSillas(array $sillas): array {
        $this->sillas = $sillas;
    }

}
