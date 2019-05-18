<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\invitation_lot;

class invitation extends Model
{
    protected $guarded = []; 
    //

    public function invitation_lots() {
        $data = invitation_lots::where('invitation_id', '=', $this->id)->get();
        return $data;
    }
}
