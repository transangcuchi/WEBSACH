<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $keyType = 'string';

    public $incrementing = false;
    protected $primaryKey = "book_id";

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
