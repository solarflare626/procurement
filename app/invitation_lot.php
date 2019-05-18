<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invitation_lot extends Model
{
    protected $guarded = []; 
    
    public function lot() {
        $data = lot::where('id', '=', $this->lot_id)->get();
        return $data;
    }
}
