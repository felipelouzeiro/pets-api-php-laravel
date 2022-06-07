<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PetRequest;
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
    /**
     * Cria um pet no banco de dados
     *
     * @param PetRequest
     * @return Pet
     */
    public function store(PetRequest $request)
    {
        $petData = $request->all();
        return Pet::create($petData);
    }
}
