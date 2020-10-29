<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Vente de livres - Connexion</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="CSS/Connexion.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div id="Entete">
            <div id="categorie">
                <h1>Vente de livres</h1>
            </div>
            <div id="soustitre">
                <div>
                    <h3 id=soustitre>Connexion</h3>
                </div>
            </div>
        </div>
        <div id="Menu">
        <a href="RechercheD.php" class="Menu" id="Recherche">
            <div>
                <h3>Recherche</h3>
            </div>
        </a>
        <a href="#" onclick="alert('Connectez-vous avant de pouvoir ajouter des livres');" class="Menu" id="Livres">
            <div>
                
                <h3>Mes livres</h3>
            </div>
        </a>
        <a href="Connexion.php" class="Menu" id="Connexion">
            <div>
                <h3>Connexion</h3>
            </div>
        </a>
                
        </div>
        <div id="Corps">
        <form action="Ajout.php" method="POST">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom"><br>
            <label for="mdp">Mot de Passe</label>
            <input type="text" id="mdp" name="mdp"><br>
            <button type="submit" onclick="window.location.href='RechercheC.php'" form="formulaire" value="Connexion">Connexion</button>
        </form>
        <p>Pas de compte? <a href="Signup.php">Créez-en un</a></p>
        </div>
    </body>
</html>