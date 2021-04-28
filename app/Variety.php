<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    //
    protected $table="varieties";
    
     public function getVarities(){
        return $this->select("id","name","flower_id","sede_id")->get();
    }
}
