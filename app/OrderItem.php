<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    protected $table = "orderitem";
    public $timestamps = false;

    protected $primaryKey = "otid";
}
