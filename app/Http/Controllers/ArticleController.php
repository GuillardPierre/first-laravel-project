<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return view("errors.not-found");
        }
        return view("pages.article-details", [
            "title" => $article["title"],
            "content" => $article["content"],
        ]);
    }

    public function create()
    {
        $articles = [
            [
                "title" => "L’IA soigne mieux",
                "content" =>
                    "L’intelligence artificielle aide les médecins à diagnostiquer plus vite.",
            ],
            [
                "title" => "Villes verte",
                "content" =>
                    "Les métropoles deviennent plus écologiques et durables.",
            ],
            [
                "title" => "Télétravail",
                "content" => "Plus de liberté, mais aussi plus de solitude.",
            ],
        ];

        foreach ($articles as $article) {
            Article::create([
                "title" => $article["title"],
                "content" => $article["content"],
            ]);
        }
    }

    public function update($id)
    {
        $article = Article::find($id);
        $article->title = "Titre modifié";
        $article->content = "Contenu modifié";
        $article->save();
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
    }
}
