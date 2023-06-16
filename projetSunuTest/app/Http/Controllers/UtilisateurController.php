<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;


class UtilisateurController extends Controller
{
    public function ajouter(Request $request)
    {
        // Récupérer les données du formulaire
        $nom = $request->input('nom');
        $email = $request->input('email');

        // Créer un nouvel utilisateur dans la base de données
        $utilisateur = new Utilisateur();
        $utilisateur->nom = $nom;
        $utilisateur->email = $email;
        $utilisateur->save();

        // Rediriger vers la page d'accueil avec un message de succès
        return redirect()->route('page')->with('success', 'Utilisateur ajouté avec succès');
    }

    public function modifier(Request $request, $id)
    {
        // Récupérer l'utilisateur à modifier
        $utilisateur = Utilisateur::find($id);

        // Mettre à jour les données de l'utilisateur
        $utilisateur->nom = $request->input('nom');
        $utilisateur->email = $request->input('email');
        $utilisateur->save();

        // Rediriger vers la page d'accueil avec un message de succès
        return redirect()->route('page')->with('success', 'Utilisateur modifié avec succès');
    }

    public function supprimer($id)
    {
        // Trouver l'utilisateur à supprimer
        $utilisateur = Utilisateur::find($id);

        // Supprimer l'utilisateur de la base de données
        $utilisateur->delete();

        // Rediriger vers la page d'accueil avec un message de succès
        return redirect()->route('accueil')->with('success', 'Utilisateur supprimé avec succès');
    }
}
