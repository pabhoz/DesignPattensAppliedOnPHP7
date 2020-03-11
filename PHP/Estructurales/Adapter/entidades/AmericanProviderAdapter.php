<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AmericanProviderAdapter
 *
 * @author pabhoz
 */
class AmericanProviderAdapter implements SalesAgent {

    public static function valueFor(float $inches): float {
        $meters = $inches * 0.0254;
        $dollars = AmericanProvider::howMuchMoneyFor($meters);
        $britishPounds = 0.797410012 * $dollars;
        return $britishPounds;
    }

}
