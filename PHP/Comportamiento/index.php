<?php

spl_autoload_register(function($class){
   if(file_exists($class.".php")){
       include $class.".php";
   }
});

$cuenta = new Cuenta("012345678", 45500);
$cuenta->retirar(12700);
echo "</br> Retiro de mi cuenta de 45500 unos 12700 pesos: ";
var_dump($cuenta);
echo "</br> Creao un memento: ";
$memento = $cuenta->getState();

var_dump($memento);
echo "</br> retiro de mi cuenta 4500 mas: ";
$cuenta->retirar(4500);
var_dump($cuenta);
echo "</br>Restauro mi cuenta al memento: ";
$cuenta->setState($memento);
var_dump($cuenta);