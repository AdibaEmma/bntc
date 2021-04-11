<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cupboard;

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
}
