<h1>Ajouter un article</h1>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" required>
    <label for="content">Contenu :</label>
    <textarea name="content" id="content" required></textarea>
    <button type="submit">Enregistrer</button>
</form>
