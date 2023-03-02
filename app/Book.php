<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Book extends Model
{
    public $keyType = 'string';
    protected $table = 'books';
    public $incrementing = false;
    protected $primaryKey = "book_id";

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    protected $fillable = [
        'book_id',
        'book_name',
        'price',
        'cat_id',
        'img',
        'description',
        'pub_id',
    ];
    public function scopeSearch($query){
        if(request()->search){
            $search = request()->search;
            $query->where('book_name','LIKE','%'.$search.'%')->paginate(8);
        }

        return $query;
    }

}
