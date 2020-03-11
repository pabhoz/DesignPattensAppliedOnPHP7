<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnglishFactory
 *
 * @author pabhoz
 */
class EnglishFactory {
    public static function requestForPrice($materialInches){
        echo "English Factory: Ill ask for the price of $materialInches inches</br>";
        $gbp = round(AmericanProviderAdapter::valueFor($materialInches),2);
        echo "English Factory: Holy Queen, ".$gbp." British Pounds for ".$materialInches." Inches!";
    }
}
