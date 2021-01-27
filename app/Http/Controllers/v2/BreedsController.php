<?php

namespace App\Http\Controllers\v2;

class BreedsController extends BaseController
{
    public function __construct()
    {
        $this->abstractClass = 'App\Models\v2\Breed';
        $this->validationRules =  ['name' => 'required'];
    }

    public function typesIndex()
    {
        return response()->json($this->abstractClass::getTypeNames(), 200);
    }

    public function showPets(int $id){
        $breed = $this->abstractClass::find($id);
        return response()->json($breed->pets, 200);
    }
}