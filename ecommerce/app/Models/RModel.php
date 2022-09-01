<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RModel extends Model
{
    use HasFactory;
    
    CONST INACTIVED = 0;
    CONST ACTIVED = 1;
    CONST DELETED = 3;

    protected $primaryKey = "id";
    protected $fillable = [];
    public $timestamps = true;
    public $incrementing = true;

    public function beforeSave(){
        return true;  
    }

    public function save(array $options = []){
        try {
            if (!$this->beforeSave()) {
                return false;
            }
            return parent::save($options);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
