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
        'shelf_id',
        'image_path',
        'description'
    ];

    public function shelf() {

        return $this->belongTo(Shelf::class);
    }
}
