<?php

namespace App\Models;

use App\Models\Breed;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model {
    protected $fillable = [
        'name',
        'breed_id'
    ];

    protected $appends = ['breed_name'];

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }

    public function getBreedNameAttribute() : string
    {
        return Breed::find($this->breed_id)->name;
    }
}