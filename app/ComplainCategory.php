<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplainCategory extends Model
{
    protected $guarded =[];

    public function subcategories()
    {
        return $this->hasMany("App\ComplainSubcategory", "category_id");
    }
}
