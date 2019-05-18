<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\invitation_lot;

class invitation extends Model
{
    protected $guarded = []; 
    //

    public function invitation_lots() {
        // $data = invitation_lot::where('invitation_id', '=', $this->id)->get();
        // return $data;
        return $this->hasMany('App\invitation_lot', 'invitation_id');
    }
    public function bidders() {
        // $data = invitation_lot::where('invitation_id', '=', $this->id)->get();
        // return $data;
        return $this->hasMany('App\bidder', 'invitation_id');
    }


    public function actual_biddings()
    {
        return $this->hasMany('App\actual_bidding', 'invitation_id');
    }

    public function actual_bidders()
    {
        $actual_biddings = $this->actual_biddings()->get();
        $bidders = [];
        foreach ($actual_biddings as $key => $bidding) {
           array_push($bidders,$bidding->bidder());
        }

        return $bidders;
    }
}
