<?php

class Whatsapp implements MessagingI {
    public function send($body) {
        // Send a message through the Whatsapp API
        return "$body VIA Whatsapp API";
    }
}