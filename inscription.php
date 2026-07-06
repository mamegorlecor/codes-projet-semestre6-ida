
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page d'inscription</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css "href="inscription.css">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
</head>
    <body>
        <div class="conteneur">
            <div class="critere">
            <p class="p1">Rejoignez la vitrine de l’excellence sénégalaise<br> 
Vous êtes un artisan, une PME ou un GIE de transformation,Valorisez votre talent sur la plateforme de
référence du génie local.<br>Pour préserver le prestige de notre réseau et rassurer nos partenaires, nous validons chaque inscription selon trois critères essentiels :</p>
 <ul class="listcritere">
    <li>Être une entreprise Sénégalaise ou un artisan</li>
<li>Avoir une propriété au nom de l’entreprise</li>
<li>Etre transparent : Les informations fournies doivent être exactes</li>
 </ul>
 <p class="p2">
    Si vous répondez à ces conditions d'admissibilité, nous vous invitons à renseigner les informations suivantes pour initier votre processus de validation.
 </p>
</div>

<div class="containeur-formulaire">
        <form action="inscriptions.php" class="form" method="POST" enctype="multipart/form-data">
            <label for="nom">Prénom nom ou nom entreprise:</label><br>
            <input type="text" class="form-control" name="nom" id="nom"><br>
            <label for="email">Adresse email :</label><br>
            <input type="email" class="form-control" name="email" id="email"><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" class="form-control" name="password" id="password"><br>
            <label for="region">Région :</label><br>
            <input type="text" class="form-control" name="region" id="region"><br>
            <label for="numerotelephone">Numéro téléphone :</label><br>
            <input type="number" class="form-control" name="numerotelephone" id="numerotelephone" length="9"><br>
            <label for="numero">Numéro carte nationale d'identité :</label><br>
            <input type="number" class="form-control" name="cni" id="cni" length="9"><br>
            <label for="ninea">ninea :</label><br>
            <input type="number" class="form-control" name="ninea" id="ninea"><br>
            <label for="justification">Vos documents(NINEA et CNI) :</label><br>
            <input type="file" class="form-control" name="justification" id="justification"><br>
            <input type="submit"  class="form-control" value="s'inscrire">
            </form>
    </div>
    <div class="lienconnexion">
        <a href="connexion.php">Se connecter</a>  
    </div>
</div>
    </body>
</html>