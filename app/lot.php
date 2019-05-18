<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\App_items;

class lot extends Model
{
    // Table Name
    protected  $table = 'lots';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    
    protected $guarded = []; 
    public $timestamps = true;
    
    public function items() {
        $data = App_items::where('lot_id', '=', $this->id)->get();
        return $data;
    }

    public function total_amount() {
        $items = $this->items();

        $total = 0;
        foreach ($items as $key => $item) {
            $total = $item->amount;
        }

        return $total;
    }
}
