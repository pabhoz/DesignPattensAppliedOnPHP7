<?php

abstract class Device implements DeviceI{
    protected $sender;
 
    public function setSender(MessagingI $sender) {
        $this->sender = $sender;
    }
}