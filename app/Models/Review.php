<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
