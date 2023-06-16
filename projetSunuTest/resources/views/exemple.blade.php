<!DOCTYPE html>
<html>
<head>
    <title>Opérations CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
<h1>Opérations CRUD</h1>

<!-- Formulaire d'ajout -->
<form action="{{ route('ajouter') }}" method="post">
    @csrf
    <input type="text" name="nom" placeholder="Nom"><br>
    <input type="text" name="prenom" placeholder="Prénom"><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <button type="submit">Ajouter</button>
</form>

<!-- Tableau de données -->
<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <!-- Boucle pour afficher les données -->
    <!-- À remplacer par la logique de génération des lignes de tableau -->
    <tr>
        <td>John Doe</td>
        <td>john.doe@example.com</td>
        <td>Some description</td>
        <td>
            <a href="/modifier/1">Modifier</a>
            <br>
            <a href="/supprimer/1">Supprimer</a>
        </td>

    </tr>
    </tbody>
</table>

<!-- Formulaire de modification -->
<form action="{{ route('modifier/1') }}" method="post">
    <input type="text" name="nom" placeholder="Nom" value="John Doe"><br>
    <input type="text" name="prenom" placeholder="Prénom" value="john.doe@example.com"><br>
    <textarea name="description" placeholder="Description">Some description</textarea><br>
    <button type="submit">Modifier</button>
</form>

<!-- Formulaire de suppression -->
<form action="/supprimer/1" method="post">
    <button type="submit">Supprimer</button>
</form>
</body>
</html>
