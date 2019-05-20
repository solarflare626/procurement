<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\lot;
use App\bidder_lot;
use App\actual_bidding;
class bidder extends Model
{
    protected $guarded = [];

    public function lot() {
        $data = lot::where('id', '=', $this->lot_id)->first();
       
        return $data;
    }

    public function showLots() {
        $datas = bidder_lot::where('bidder_id', '=', $this->id)->get();
       $lots = [];
       foreach ($datas as $key => $data) {
           $lot = lot::find($data->lot_id);
           array_push($lots,$lot->lot_no);
       }
        return implode(',',$lots);
    }

    public function actual_bidding() {
        $data = actual_bidding::where('bidder_id', '=', $this->id)->first();
       
        return $data;
    }
}
