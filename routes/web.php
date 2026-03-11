<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get("/", [IndexController::class, "index"])->name("home");
Route::prefix("articles")
    ->controller(ArticleController::class)
    ->group(function () {
        Route::get("/creer", "create")->name("article.create");
        Route::get("/modifier/{id}", "update")->name("article.update");
        Route::get("/supprimer/{id}", "delete")->name("article.delete");
        Route::get("/{id}", "show")->name("article.details");
    });

Route::fallback(function () {
    return view("errors.not-found");
});
