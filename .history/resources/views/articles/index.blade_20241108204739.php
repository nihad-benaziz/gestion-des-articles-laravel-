@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Articles</h1>

    <!-- Bouton pour ajouter un nouvel article -->
    <div class="mb-4">
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Ajouter un nouvel article</a>
    </div>

    <!-- Table des articles -->
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ Str::limit($article->content, 50) }}</td>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
