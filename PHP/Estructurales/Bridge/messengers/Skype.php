<?php

class Skype implements MessagingI {
    public function send($body) {
        // Send a message through the Skype API
        return "$body VIA Skype API";
    }
}