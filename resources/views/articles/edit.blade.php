@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier l'Article</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('articles.update', $article->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Contenu</label>
                            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $article->content }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Retour à la liste des articles</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

