<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Flower;
use App\Item;
use App\Process;
use App\Dropdown;
use App\Variety;
use App\Control;

class Dropdown extends Model
{
    //
    protected $table="dropdowns";
    
    public function sede(){
        return $this->belongsTo(Sede::class)->select("id","name");
    }
    
     public function process(){
        return $this->belongsTo(Process::class)->select("id","name");
    }
     public function item(){
        return $this->belongsTo(Item::class)->select("id","name");
    }
       public function flower(){
        return $this->belongsTo(Flower::class)->select("id","name");
    }
    
    public function getDropdowns(){
        return $this
                
                ->with("sede")
                ->with("process")
                ->with("item")
                ->with("flower")
                ->select("flower_id","item_id","process_id","sede_id","desplegable")
                ->get();
    }
}
