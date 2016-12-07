<?php
// CONTROLLERS : donne les instructions à qqch qui se connecte à la BDD

namespace SGBD\Sites\Rapture\Controllers;

use \SGBD\App;
use \SGBD\Sites\Rapture\Models\User; // Models : accède à la bdd
use \SGBD\Sites\Rapture\Models\Place; // Ajouter tous les modèles créé
use \SGBD\Sites\Rapture\Models\Trip;

/**
* Cette classe gère l'affichage de la
* page d'accueil
*/
class HomeController
{
    public function show()
    {
        $data = [];
        $data['title'] = 'The Rapture - Agence de voyage';
        $data['user'] = User::getCurrent([':variableQuOnVeut' => 7]); // get + nom_du_fichier dans Requests->user | dont get->juste un sans tableau   list->plusieurs avec tableau : Récupérer l'utilisateur avec l'ID 3
        $data['currency'] = User::getCurrency([':id' => $data['user']->id]);
        //var_dump($data['user']); die(); //var_dump affiche le contenu de la variable --> pour visualiser les contenus de nos variables
        $data['places'] = Place::listPopular([':locale' => $data['user']->locale]); //modèle toujours au singulier places->place
        $data['trips'] = $this->updatePrices(Trip::listFeatured(), $data['currency']); // this fait référence au Controller (sans le this il va appeller une fonction qui n'existe pas => avec this il appelle la fonction de cette classe ci) || on va changer les valeurs récupérées du prix en quelque chose de lisible en dollar, eur, ... pour l'utilisateur car prix en centime



        var_dump($data['trips']); die();
        // Views :
        // Ajouter une entrée dans le tableau des variables
        // et récupérer un résultat de la base de données :
        // $data['user'] = User::getCurrent([':id' => 1]);
        return App::getView('home', null, $data);
    }
    public function updatePrices($trips, $currency) // trips étant un tableau => on lie et ajoute au-dessus currency pour les liers
    {
        foreach ($trips as $trip) {
            // $newPrice = ($trip->price/100 * $currency->rate); // nous renvoit un chiffre à virgules or il nous faut max deux chiffre

            //$newPrice = round(($trip->price/100 * $currency->rate), 2);
            //$trip->price = $currency->symbol . ' ' . $newPrice;
            
            $trip->price = $currency->symbol . ' ' . round(($trip->price/100 * $currency->rate), 2);

            //var_dump($newPrice); die();
            // assigner à trip->price :
            // - le symbole de la currency
            // - un espace
            // - la valeur "humaine" du prix dans la bonne currency
        }
        return $trips;
    }
}
