<?php

class Message {
    public function write(string $message): strings{
        echo $message;
    }
}


$message = new Message();
$message->write('ddd');