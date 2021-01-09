<?php

namespace App\Models;

use App\Models\Breed;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model {
    protected $fillable = [
        'name',
        'breed_id'
    ];

    public function breed()
    {
        return $this->hasOne(Breed::class);
    }
}