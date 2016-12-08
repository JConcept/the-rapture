# Petit tuto sur les oppérations faites au cours

## Démarrer
Aller avec votre éditeur de texte dans : `core` -> `Sites` -> `Rapture`  
Ce sera notre dossier de travail.

## Créer son modèle
(modifier le HomeController, ajouter son modèle, ajouter sa requête [dossier + fichier sql] ET modifier l'autoload)

__Ceci est appliquable pour l'ajout de n'importe quel autre modèle :__  
Nous voulons créer l'appel de variable _(dans notre dossier `Views`)_ : `$trips`  
Pour retourner une liste de voyage sur la page principale avec des prix (avec une boucle foreach).

- Pour créer l'appel de variable, ajouter dans `Controllers` -> `HomeController.php` à la suite des autres déclarations :
``` PHP
$data['trips'] = Trip::listFeatured();
```
- Dans `Models` dupliquer un fichier existant et nommer le `Trip.php` ;
    - Remplacer aux bons endroits le nom du fichier que vous avez dupliquer par le nouveau nom, vous devriez obtenir ceci :
    ``` PHP
    <?php
    namespace SGBD\Sites\Rapture\Models;
    use \SGBD\App;
    use \SGBD\BaseModel;

    class Trip extends BaseModel
    {
        protected $folder = 'Trip';
    }
    ```
- _Pour que votre page charge tous les composants dont il a besoin,_ ajouter son modèle à la fin de `autoload.php` soit :
``` PHP
require_once(SITE_PATH . 'Models/Trip.php');
```
- _Pour charger le modèle dans le controleur,_ ajouter dans l'entête de `Controllers` -> `HomeController.php` à la suite des autres lignes similaires :
``` PHP
use \SGBD\Sites\Rapture\Models\Trip;
```
- Et pour finir, _vous allez pouvoir créer votre fichier sql ainsi que son dossier,_ dans `Requests` ajouter le dossier `Trip` et ajouter le fichier `featured.sql`. Et entrer votre code sql.
- Poue le tester, retourner dans `Controllers` -> `HomeController.php` où on a définit l'appel de variable dans notre première étape. Et ajouter cette ligne-ci _(cela permet de voir ce que retourne notre code sql)_ :
```
var_dump($data['trips']); die();
```

[![Allez vers la vidéo de tuto](./tuto-assets/op1.swf)](http://jconcept.be/hepl/the-rapture/op1.swf "Allez vers la vidéo de tuto")

### Modèle réappliquable
Maintenant faisons un TODO plus général :
- Dans le `Controllers` -> `HomeController.php` :  
À la suite des autres définitions de variables
``` PHP
$data['VARIABLE'] = Trip::listFICHIER(); // fichier étant le nom du fichier sql sans le .sql
```  
Au début du fichier :
``` PHP
use \SGBD\Sites\Rapture\Models\VARIABLE;
```
- Dans `Models` dupliquer un fichier existant et nommer le `VARIABLE.php` et remplacer aux bons endroits :
    ``` PHP
    <?php
    namespace SGBD\Sites\Rapture\Models;
    use \SGBD\App;
    use \SGBD\BaseModel;

    class VARIABLE extends BaseModel
    {
        protected $folder = 'VARIABLE';
    }
    ```
- Ajouter à la fin de `autoload.php` :
``` PHP
require_once(SITE_PATH . 'Models/VARIABLE.php');
```
- Dans `Requests` ajouter le dossier `Trip` et ajouter le fichier `featured.sql`. Et entrer votre code sql.
