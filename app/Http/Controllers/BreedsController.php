<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreedsController extends BaseController
{
    public function __construct()
    {
        $this->abstractClass = 'App\Models\Breed';
        $this->validationRules =  ['name' => 'required'];
    }

    public function typesIndex()
    {
        return response()->json($this->abstractClass::getTypeNames(), 200);
    }
}