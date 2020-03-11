<?php

spl_autoload_register(function($class){
   if(file_exists("entidades/".$class.".php")){
       include "entidades/".$class.".php";
   }elseif(file_exists("factories/".$class.".php")){
      include "factories/".$class.".php";
   }
});

$sala = new Sala(1,[]);
print_r($sala->getCapacidad());
