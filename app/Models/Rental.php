<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{

    protected $fillable = [
        'rental_id',
        'user_id',
        'book_id',
        'rented_at',
        'returned_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    // アクセサ
    public function getUserNameAttribute()
    {
        return optional($this->user)->name;
    }

    public function getBookTitleAttribute()
    {
        return optional($this->book)->title;
    }

    public function getRentalDateAttribute()
    {
        return $this->rented_at->format('Y-m-d');
    }

    public function getReturnDateAttribute()
    {
        return optional($this->returned_at)->format('Y-m-d');
    }

}