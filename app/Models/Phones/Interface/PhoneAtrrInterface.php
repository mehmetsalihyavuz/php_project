<?php

namespace App\Models\Phones\Interface;

interface BatteryInterface
{
    public function getBattery(): string;
}

interface MakingCallInterface
{
    public function makeCall(): string;
}

interface SendingMessageInterface{
    public function sendMessage(): string;
}