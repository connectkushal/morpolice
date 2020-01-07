<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\ComplainCategory');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\ComplainSubcategory');
    }
}
