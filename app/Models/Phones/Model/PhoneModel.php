<?php


namespace App\Models\Phones\Model;
use App\Models\Phones\Phone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PhoneModel extends Model{

    use HasFactory;
    protected $guarded = [];
    
    protected $table = "model";
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