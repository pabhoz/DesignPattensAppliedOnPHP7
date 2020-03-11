<?php

spl_autoload_register(function($class){
   if(file_exists("entidades/".$class.".php")){
       include "entidades/".$class.".php";
   }elseif(file_exists("interfaces/".$class.".php")){
           include "interfaces/".$class.".php";
       
   }
});

EnglishFactory::requestForPrice(235);