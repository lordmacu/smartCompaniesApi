<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    //
    protected $table="controls";
    
    public function getAllControlsByProcessAndSede(){
        return $this->orderBy("order_control")
                ->select("order_control","process_id","flower_id","sede_id","items.name","item_id","controls.id")
                ->join("items","items.id","item_id")
                ->get(); 
    }
}
