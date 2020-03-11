<?php

class Phone extends Device {
    public function send($body) {
        $body .= "</br> Sent from a phone.";
 
        return $this->sender->send($body);
    }
}