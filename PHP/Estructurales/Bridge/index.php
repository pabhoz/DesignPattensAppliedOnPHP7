<?php

spl_autoload_register(function($class){
   if(file_exists("devices/".$class.".php")){
       include "devices/".$class.".php";
   }elseif(file_exists("interfaces/".$class.".php")){
           include "interfaces/".$class.".php";
   }else{
       if(file_exists("messengers/".$class.".php")){
           include "messengers/".$class.".php";
       }
   }
});

 
$phone = new Phone;
$phone->setSender(new Skype);
 
echo $phone->send("Está cool el patrón Bridge");

$tablet = new Tablet;
$tablet->setSender(new Whatsapp);

echo $tablet->send("PAola llora mucho");