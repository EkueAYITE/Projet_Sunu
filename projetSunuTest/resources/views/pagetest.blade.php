<!-- Formulaire d'ajout -->
<form action="{{ route('ajouter') }}" method="POST">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom">
    <label for="date">Email :</label>
    <input type="date" name="email" id="email">
    <button type="submit">Ajouter</button>
</form>

<!-- Formulaire de modification -->
<form action="{{ route('modifier', ['id' => $utilisateur->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="{{ $utilisateur->nom }}">
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="{{ $utilisateur->email }}">
    <button type="submit">Modifier</button>
</form>

<!-- Formulaire de suppression -->
<form action="{{ route('supprimer', ['id' => $utilisateur->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
