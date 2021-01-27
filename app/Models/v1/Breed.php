<?php

namespace App\Models\v1;

use App\Models\v1\Pet;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model {
    public $timestamps = false;
    
    protected $fillable = ['name','type'];

    protected static $typeNames = ['cachorro','gato','ave','peixe'];

    protected $appends = ['links'];

    public function pets(){
        return $this->hasMany(Pet::class);
    }

    public function getTypeAttribute($type) : string
    {
        return static::$typeNames[$type];
    }

    public static function getTypeNames()
    {
        return static::$typeNames;
    }

    public function getLinksAttribute() : array
    {
        return [
            'self' => url('/api/v1/breeds/' . $this->id),
            'pets' => url('/api/v1/breeds/'. $this->id . '/pets')
        ];
    }
}