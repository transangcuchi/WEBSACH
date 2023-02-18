<?php

namespace App\Models;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    public $keyType = 'string';

    public $incrementing = false;
    protected $primaryKey = "book_id";

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
