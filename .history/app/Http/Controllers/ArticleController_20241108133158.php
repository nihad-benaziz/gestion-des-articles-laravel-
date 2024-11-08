<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupère tous les articles
        $articles = Article::all();
        // Passe les articles à la vue 'articles.index'
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Affiche le formulaire de création d'un article
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valide les données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Crée un nouvel article avec les données validées
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirige vers la liste des articles avec un message de succès
        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Récupère l'article spécifié
        $article = Article::findOrFail($id);
        // Affiche la vue de détail de l'article
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Récupère l'article spécifié
        $article = Article::findOrFail($id);
        // Affiche le formulaire d'édition avec l'article
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Valide les données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Récupère l'article et le met à jour avec les nouvelles données
        $article = Article::findOrFail($id);
        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirige vers la liste des articles avec un message de succès
        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Récupère l'article et le supprime
        $article = Article::findOrFail($id);
        $article->delete();

        // Redirige vers la liste des articles avec un message de succès
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
