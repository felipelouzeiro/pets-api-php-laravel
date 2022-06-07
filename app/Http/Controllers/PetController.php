<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    /**
     * Retorna a lista de pets cadastrados
     *
     * @return Collection
     */
    public function index()
    {
        return Pet::get();
    }

    public function store(Request $request)
    {
        $petData = $request->all();
        return Pet::create($petData);
    }
}
