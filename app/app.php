<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class app extends Model
{
    //Table Name
    protected $table = '';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
