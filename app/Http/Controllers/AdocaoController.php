<?php

namespace App\Http\Controllers;

use App\Models\Adocao;
use Illuminate\Http\Request;

class AdocaoController extends Controller
{
    public function store(Request $request)
    {
        $adoptionData = $request->all();

        return Adocao::create($adoptionData);
    }
}
