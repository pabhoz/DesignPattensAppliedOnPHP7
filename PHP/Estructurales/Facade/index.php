<?php

require "NicePDOFacade.php";

$nicePDO = new NicePDOFacade("mysql", "localhost", "mysql", "root", "");
$results = $nicePDO->select("SELECT * FROM `user` WHERE 1");

foreach ($results as $user) {
    echo $user['User']."</br>";
}
