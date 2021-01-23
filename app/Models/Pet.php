<?php

namespace App\Models;

use App\Models\Breed;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model {
    use ChangeDateFormatTrait;
    
    protected $fillable = [
        'name',
        'breed_id'
    ];

    protected $appends = ['breed_name', 'breed_type', 'links'];

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }

    public function getBreedNameAttribute() : string
    {
        //return Breed::find($this->breed_id)->name;
        return $this->breed->name;
    }

    public function getBreedTypeAttribute() : string
    {
        //return Breed::find($this->breed_id)->type;
        return $this->breed->type;
    }

    public function getLinksAttribute() : array
    {
        return [
            'self' => url('/api/v1/pets/' . $this->id),
            'breed' => url('/api/v1/breeds/'. $this->breed_id)
        ];
    }
}