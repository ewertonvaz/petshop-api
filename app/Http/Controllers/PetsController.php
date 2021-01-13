<?php

namespace App\Http\Controllers;

class PetsController extends BaseController
{
    public function __construct()
    {
        $this->abstractClass = 'App\Models\Pet';
        $this->validationRules =  [
            'name' => 'required',
            'breed_id' => 'required'
        ];
    }

/*     public function index()
    {
        $pets = Pet::all();        
        foreach($pets as $pet) {
            $pet['breed'] = $pet->breed;
        } 
        return response()->json($pets, 200); 
    }
 */
}