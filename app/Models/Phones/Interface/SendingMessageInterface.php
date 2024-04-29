<?php

namespace App\Models\Phones\Interface;

interface SendingMessageInterface{
    public function sendMessage(): string;
}