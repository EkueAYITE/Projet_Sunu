<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'utilisateurs';

    protected $fillable = ['nom', 'email'];

    // Autres propriétés et relations du modèle

    // Méthode pour effectuer l'ajout d'un utilisateur
    public static function ajouterUtilisateur($donnees)
    {
        return self::create($donnees);
    }

    // Méthode pour effectuer la modification d'un utilisateur
    public function modifierUtilisateur($donnees)
    {
        $this->update($donnees);
    }

    // Méthode pour effectuer la suppression d'un utilisateur
    public function supprimerUtilisateur()
    {
        $this->delete();
    }

    // Autres méthodes et relations du modèle
}
