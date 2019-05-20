<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\lot;
use App\bidder;
use App\invitation;
class bidder_lot extends Model
{
    protected $guarded = [];

    public function lot() {
        $data = lot::where('id', '=', $this->lot_id)->first();
       
        return $data;
    }
    public function bidder() {
        $data = bidder::where('id', '=', $this->bidder_id)->first();
       
        return $data;
    }

    public function invitation() {
        $data = invitation::where('id', '=', $this->invitation_id)->first();
       
        return $data;
    }
}
