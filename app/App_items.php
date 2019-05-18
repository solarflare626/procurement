<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App_items extends Model
{
    // Table Name
    protected $table = 'app_items';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    protected $guarded = []; 

    public static function fetch_all() {
        $data = App_items::all();
        return $data;
    }
}
