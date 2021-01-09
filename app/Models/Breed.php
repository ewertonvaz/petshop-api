<?php

namespace App\Models;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model {
    public $timestamps = false;
    
    protected $fillable = ['name','type'];

    protected static $typeNames = ['cachorro','gato','ave','peixe'];

    //protected $appends = ['links', 'type_names'];

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
}