<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table="items";
    
       public function getFlower(){
        return $this->select("name","id")->get();
    }
}
