<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'type',
        'shelf',
        'image_path',
        'description'
    ];

    public function shelf() {

        $this->belongTo(Shelf::class);
    }
}
