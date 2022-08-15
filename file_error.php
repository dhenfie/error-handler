<?php

class Message {
    public function write(string $message): void{
        echo $message;
    }
}


$message = new Message();
$message->writee('hello world');
