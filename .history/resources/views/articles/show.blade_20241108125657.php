<h1>{{ $article->title }}</h1>
<p>{{ $article->content }}</p>
<a href="{{ route('articles.edit', $article->id) }}">Modifier</a>
<form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
