<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author pabhoz
 */
interface SalaI {
    public function getNumero(): int;
    public function getCapacidad(): int;
    public function getSillas(): array;
    
    public function setNumero(int $numero): int;
    public function setSillas(array $sillas): array;
}
