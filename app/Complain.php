<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $guarded = [];

    public function category()
    {
        $this->belongsTo('App\Category');
    }

    public function subCategory()
    {
        $this->belongsTo('App\SubCategory');
    }
}
