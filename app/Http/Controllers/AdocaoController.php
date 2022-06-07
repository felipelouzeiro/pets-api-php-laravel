<?php

namespace App\Http\Controllers;

use App\Models\Adocao;
use Illuminate\Http\Request;
use App\Http\Requests\AdocaoRequest;

class AdocaoController extends Controller
/**
 * Cria um novo registro de adoção
 *
 * @param Request $request
 * @return Adocao
 */
{
    /**
     * Retorna uma lista de Adoções
     *
     * @return Collection
     */
    public function index()
    {
        return Adocao::with('pet')->get();
    }

    public function store(AdocaoRequest $request)
    {
        $adoptionData = $request->all();

        return Adocao::create($adoptionData);
    }
}
