<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ENFANTS;
use Illuminate\Support\Facades\Auth;
class SokhnaController extends Controller
{

 // Cette fonction nous permet de faire le traitement du formulaire de connexion.
 public function traitement_form_login(Request $request) {
    Auth::attempt([
        'email' => ['required', 'email'],
        'password' => ['required', 'mot_de_passe']
    ]);

    return redirect('/accueil')->with('succes', 'Yes ! Connexion réussie.');
}
// Cette fonction nous permet de faire le traitement du formulaire d'inscription.
public function enregistrerANFANTS(Request $request) {
    $request->validate([
        'prenom' => 'required',
        'nom' => 'required',
        'email' =>'required|unique:personnes',
        'mot_de_passe' => 'required|min:8',
        'adress' => 'required',
    ]);
    $ENFANT = new ENFANTS();
        $ENFANT->prenom = $request->input('prenom');
        $ENFANT->nom = $request->input('nom');
        $ENFANT->email = $request->input('email');
        $personne->adress = $request->input('adress');
        $personne->mot_de_passe = bcrypt($request->input('mot_de_passe')); // "bcrypt" nous permet de cripter les mots de passe.
        $personne->save();

        // Ici on retourne la page de connexion si l'inscription a été bien effectuer.
        return redirect('/connexion')->with('message', 'Bravo ! Inscription réussie. Connectez-vous maintenant.');
    }
}
