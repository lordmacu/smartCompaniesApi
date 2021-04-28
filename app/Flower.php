<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    //
    protected $table="flowers";
    
    public function getFlower(){
        return $this->select("sede_id","name","id")->get();
    }
}
