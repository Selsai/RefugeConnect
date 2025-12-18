<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $animals = Animal::all();

        return view('home', [
            'animals' => $animals,
        ]);
    }
}
