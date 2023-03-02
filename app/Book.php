<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
