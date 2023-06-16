<!-- Formulaire d'ajout -->
<form action="{{ route('ajouter') }}" method="POST">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom">
    <label for="date">Email :</label>
    <input type="date" name="email" id="email">
    <button type="submit">Ajouter</button>
</form>
