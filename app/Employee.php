<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flower;
use App\Item;
use App\Process;
use App\Dropdown;
use App\Variety;
use App\Control;

class Employee extends Model
{
    //
    protected $table="employees";
     
    public function getEmployees(){
        return $this->select("id","sede_id","name","position","type_position")->get();
    }
}
