<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Vente de livres - Recherche</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="CSS/Recherche.CSS"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div id="Entete">
            <div id="categorie">
                <h1>Vente de livres</h1>
            </div>
            <div id="soustitre">
                <div>
                    <h3 id=soustitre>Recherche</h3>
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
        
        </div>
    </body>
</html>