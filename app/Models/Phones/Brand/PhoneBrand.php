<?php


namespace App\Models\Phones\Brand;

use App\Models\Phones\Phone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PhoneBrand extends Model{

    use HasFactory;
    protected $guarded = [];
    protected $table = "brand";
    private $brand;

    public function __construct(Phone $brand) {
        $this->brand = $brand;
    }
    public function getBrand(){
        return $this->brand;
    }
    
    public function setBrand($brand){
        $this->brand = $brand;
    }
}