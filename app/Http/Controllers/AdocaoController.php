<?php

namespace App\Http\Controllers;

use App\Models\Adocao;
use Illuminate\Http\Request;

class AdocaoController extends Controller
/**
 * Cria um novo registro de adoção
 *
 * @param Request $request
 * @return Adocao
 */
{
    public function store(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
            'donation' => ['required', 'numeric', 'between:10,100'],
            'pet_id' => ['required', 'int', 'exists:pets,id'],
        ]);

        $adoptionData = $request->all();

        return Adocao::create($adoptionData);
    }
}
