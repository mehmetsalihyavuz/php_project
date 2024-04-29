<?php


namespace App\Models\Phones\Color;

use App\Models\Phones\Phone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PhoneColor extends Model{

    use HasFactory;
    protected $guarded = [];

    protected $table = "color";
    private $color;

    public function __construct(Phone $color) {
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
}