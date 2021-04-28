<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    //
    protected $table="sedes";
    
     public function getSedes(){
        return $this->select("id","name")->get();
    }
}
