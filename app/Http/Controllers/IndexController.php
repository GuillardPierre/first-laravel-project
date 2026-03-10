<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $articles = [
            ["title" => "L’IA soigne mieux", "content" => "L’intelligence artificielle aide les médecins à diagnostiquer plus vite."],
            ["title" => "Villes verte", "content" => "Les métropoles deviennent plus écologiques et durables."],
            ["title" => "Télétravail", "content" => "Plus de liberté, mais aussi plus de solitude."],
        ];

        return view("welcome", [
            "name" => "Pierre",
            "articles" => $articles,
        ]);
    }
}
