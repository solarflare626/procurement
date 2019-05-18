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
}
