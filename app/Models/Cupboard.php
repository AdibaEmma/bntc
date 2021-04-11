<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shelf;


class Cupboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function shelf() {

        $this->hasMany(Shelf::class);
    }
}
