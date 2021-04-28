<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    //
    protected $table="processes";
    
    public function  getProceses(){
        return $this->select("id","name")->get();
    }
}
