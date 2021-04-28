<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flower;
use App\Item;
use App\Process;
use App\Dropdown;
use App\Variety;
use App\Control;

class Labor extends Model
{
    
    protected $table="labor_user";
     
     public function getLaborByUser($labor,$user){
         return $this->where("user_id",$user)->where("id_labor",$labor)->first();
     }
   
}
