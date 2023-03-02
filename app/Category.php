<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    //protected $primaryKey = 'cat_id';

    protected $fillable = [
        'cat_id',
        'cat_name',
    ];

    //
    public function scopeSearchCat($query){
        if(request()->search){
            $search = request()->search;
            $query->where('cat_id','LIKE','%'.$search.'%')->paginate(8);
        }

        return $query;
    }
}
