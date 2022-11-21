<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongstoMany(Category::class, 'book_category');
    }
    protected $fillable = [
        'title',
    ];
    public function author()
    {
        return $this->hasOne(Publisher::class, 'publisher_iud');
    }
}
