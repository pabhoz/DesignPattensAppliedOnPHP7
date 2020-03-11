<?php

spl_autoload_register(function($class){
   if(file_exists("entidades/".$class.".php")){
       include "entidades/".$class.".php";
   }elseif(file_exists("factories/".$class.".php")){
      include "factories/".$class.".php";
   }else{
       if(file_exists("interfaces/".$class.".php")){
           include "interfaces/".$class.".php";
       }
   }
});

$miFabrica = new SalasFactory();

$sala = $miFabrica->crearSala(1);
var_dump($sala);
/*$sala = $miFabrica->crearSalaIMAX();
var_dump($sala);
$sala = $miFabrica->crearSalaVIP();
var_dump($sala);
$sala = $miFabrica->crearSala4DX();
var_dump($sala);*/