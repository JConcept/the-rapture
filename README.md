# the-rapture
Simple PHP project - learning templating and applying basic SQL requests

This is a tutorial in french (sorry) for students of [@hepl](https://github.com/hepl-web).

Original work on : https://github.com/hepl-sgc/the-rapture

## Démarrer
Aller avec votre éditeur de texte dans : `core` -> `Sites` -> `Rapture`  
Ce sera notre dossier de travail.

Avant de commencer, modifier le fichier de connexion à votre base de données pour le faire correspondre à la vôtre qui se trouve _(à partir de la racine)_ : `config` -> `database.php`

Si vous n'avez pas encore créé votre base de données, importez celle qui se trouve ici : [./sgbd_rapture.sql](./sgbd_rapture.sql)

## Comprendre la structure `MVC`
`MVC` est une architecture de dossier utilisé dans ce projet, cela permet de séparer le code en morceaux courts. Cela le rend plus facile à comprendre, plus facile à maintenir et respecte le principe du [BEM](https://en.bem.info/methodology/) :
> « BEM (Block, Élement, Modificateur) est une approche à base de composants pour le développement web. L'idée derrière cela est de diviser l'interface utilisateur en blocs indépendants. Cela rend le développement de l'interface facile et rapide, même avec une interface complexe, et il permet la réutilisation du code existant sans copier/coller. »

Dans le cadre du `MVC` la strucutre est séparée en trois parties :
- `Models` : il s'occupe de la connexion à la base de données. Il contient des méthodes standards pour mettre à jour les données (ajouts, suppressions, modifications).
- `Views` : présente le résultat renvoyé par le modèle en code html pour que l'utilisateur puisse interagir avec.
- `Controllers` : il reçoit les évènements de la vue et enclenche les actions à effectuer. S'il faut rafraichir des données, le controlleur va demander les modifications au modèle qui va renvoyer à la vue les bonnes valeurs.

Dans notre cas, on a programé l'ajout du dossier `Requests` pour que l'on y dépose tout le code sql.


## Fonctionnement
Maintenant nous allons éditer les fichiers pour modifier le site qui était statique en un site dynamique -> où les données se transforment en fonction de l'utilisateur.


### `Controllers` -> `HomeController.php`
Dans la classe `HomeController` et dans la fonction publique `show`, c'est ici que vous allez pouvoir définir les variables que vous allez appeler dans votre vue.

Pour les définir il faut faire comme ceci :
``` PHP
$data['VARIABLE'] = 'ContenuVARIABLEtexte'; // remplacer VARIABLE par le nom de votre variable
$data['VARIABLE2'] = VARIABLE2::méthodeName(); // idem sauf que méthodeName expliquée ci-dessous
```
Dans `méthodeName` le remplacer par `get` ou `list` suivit du nom que vous donnez à votre action _(commençant par une majuscule)_, qui sera votre nom de fichier sql dans `Requests` , pour choisir get ou list :
- `get` : retourne uniquement une donnée sans tableau
- `list` : retourne plusieurs tableaux de données


### Créer son modèle
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
