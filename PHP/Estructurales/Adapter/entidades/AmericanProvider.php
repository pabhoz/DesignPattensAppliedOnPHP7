<?php

/*
 * El proveedor americano vende insumos a fabricas y cotiza sus materiales
 * usando el método howMuchMoneyFor
 */

/**
 * Description of AmericanProvider
 *
 * @author pabhoz
 */
class AmericanProvider {
    
    private static $rate = 34.50;

    public static function howMuchMoneyFor($meters): float{
        echo "American Provider: Mmm, for $meters meters of my material you should pay ".$meters*self::$rate."</br>";
        return $meters * self::$rate;
    }
}
