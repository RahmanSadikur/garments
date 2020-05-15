<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLog extends Model
{
    //
    protected $table = "orderlog";
    public $timestamps = false;

    protected $primaryKey = "olid";
}
