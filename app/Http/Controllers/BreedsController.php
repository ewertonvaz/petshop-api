<?php

namespace App\Http\Controllers;

use App\Models\Breed;

class BreedsController extends Controller
{
      public function __construct()
    {
        //
    }

    //
    public function index()
    {
        return Breed::all();
/*         return [
            "Shi Tzu",
            "Pug",
            "Workshire"
        ]; */
    }

    public function typesIndex()
    {
        return Breed::getTypeNames();
    }
}