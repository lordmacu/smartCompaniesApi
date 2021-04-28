<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flower;
use App\Item;
use App\Process;
use App\Dropdown;
use App\Variety;
use App\Control;

class Comment extends Model
{
    //
    protected $table="comments";
     
    public function getComments(){
        return $this->select("id","name","process_id")->get();
    }
   
}
