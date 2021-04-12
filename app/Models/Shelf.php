<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cupboard;
use App\Models\Book;

class Shelf extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cupboard_id'
    ];

    public function cupboard() {

        $this->belongsTo(Cupbaord::class );
    }

    public function books() {
        $this->hasMany(Book::class)
    }
}
