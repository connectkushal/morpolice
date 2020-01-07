<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplainSubcategory extends Model
{
    protected $guarded =[];
    
    public function category()
    {
        return $this->belongsTo('App\ComplainCategory', 'category_id');
    }

    public function complains()
    {
        return $this->hasMany('App\Complain', 'subcategory_id');
    }
}
