<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $table = "subcategory";
    public $timestamps = false;

    protected $primaryKey = "scid";
}
