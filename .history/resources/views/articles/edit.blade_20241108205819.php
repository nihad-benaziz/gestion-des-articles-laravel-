<a href="{{ url()->previous() }}" class="btn btn-secondary">Retour</a>

<h1>Modifier l'article</h1>
<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" value="{{ $article->title }}" required>
    <label for="content">Contenu :</label>
    <textarea name="content" id="content" required>{{ $article->content }}</textarea>
    <button type="submit">Enregistrer les modifications</button>
</form>
