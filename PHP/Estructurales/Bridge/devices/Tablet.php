<?php

class Tablet extends Device {
    public function send($body) {
        $body .= "</br> Sent from a Tablet.";
 
        return $this->sender->send($body);
    }
}