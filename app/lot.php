<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lot extends Model
{
    // Table Name
    protected  $table = 'lots';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    
    protected $guarded = []; 
    public $timestamps = true;
}
