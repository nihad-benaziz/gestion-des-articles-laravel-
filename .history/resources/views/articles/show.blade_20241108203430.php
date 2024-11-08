@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-4">
        <div class="card-header bg-dark text-white">
            <h2>{{ $article->title }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $article->content }}</p>
            <p class="text-muted">Publié le : {{ $article->created_at->format('d-m-Y') }}</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Retour à la liste</a>
            <div>
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifier</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
