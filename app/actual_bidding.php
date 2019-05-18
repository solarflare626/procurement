<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actual_bidding extends Model
{
    protected $guarded = []; 

    public function bidder() {
        $data = bidder::where('id', '=', $this->bidder_id)->first();
       
        return $data;
    }
    
}
