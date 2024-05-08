<?php

namespace App\Models\Phones\Purchase;

use App\Models\Phones\SmartPhone;
use App\Models\Phones\LandlinePhone;
use App\Models\Phones\FeaturePhone;
use App\Models\User;


class Salary
{
    private $salary;

    private $price;

    private $result;

    protected $balance;

    public function __construct($salary, $price)
    {
        if ($salary > $price){

            $this->balance = $salary - $price;

            $this->result = $this->balance;

        } 
        
        else 
    }
}