<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
 
    protected $abstractClass;

    protected $validationRules = [];

    public function index()
    {
        return response()->json($this->abstractClass::all(), 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validationRules);

        return response()
            ->json($this->abstractClass::create($request->all()), 201);
    }
}