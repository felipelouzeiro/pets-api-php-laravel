<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        return [
            [
            'name' => "pet1",
            "description" => "conteúdo da descrição"
            ],
            [
            'name' => "pet2",
            "description" => "conteúdo da descrição"
        ]
    ];
    }
}
