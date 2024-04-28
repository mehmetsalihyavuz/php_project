<?php


namespace App\Models\Phones\Model;
use App\Models\Phones\Phone;


class PhoneModel  {

    private $model;

    public function __construct(Phone $model) {
        $this->model = $model;
    }
    public function getModel(){
        return $this->model;
    }
    
    public function setModel($model){
        $this->model = $model;
    }
}