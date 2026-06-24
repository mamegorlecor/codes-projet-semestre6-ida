
<?php 

include('configsunu.php');

$message="";

        $errors=['nom'=>'','nomproduit'=>'','description'=>''];

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $nom = htmlspecialchars($_POST['nom']);
    $nomproduit = htmlspecialchars($_POST['nomproduit']);
    $description = htmlspecialchars($_POST['description']);

        if(empty($nom)){
            $errors['nom']='Le nom   est obligatoire';
        }
        if(empty($nomproduit)){
            $errors['nomproduit']='Le nom est du produit est obligatoire';
        }
        if(empty($description)){
            $errors['description']="La description est obligatoire";
        }
        if(empty(array_filter($errors))){
        
        try{
    $sth=$connexion->prepare("INSERT INTO produit(nom,nomproduit, description) VALUES(?,?,?)");
    $sth->bindParam(1,$nom);
    $sth->bindParam(2,$nomproduit);
    $sth->bindParam(3,$description);
    $sth->execute();
    if($sth){

        $message="produit ajouté avec succés";
        header("Location:ajouterproduit.php");
        exit;
    }
    
}
catch(PDOException $e){
    
       echo $message.$e->getMessage;
    }
}
}

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>ajouter produit</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>

        <p>
            Les produits que vous ajoutez ne sont pas directement ajouter <br>dans votre page,il est fondementale pour nous d’analyser les <br>produits et vérifier qu’il est légal de les vendre
        </p>
        
        <form  method ="POST" id="form" enctype="multipart/form-data">
            <label for="nom">Nom entreprise ou artisan :</label><br>
            <input type="text" name="nom" id="nom"><br>
            <span style="color:red"><?php echo $errors['nom']; ?></span><br>
            <label for="nomproduit">Nom du produit :</label><br>
            <input type="text" name="nomproduit" id="nomproduit"><br>
            <span style="color:red"><?php echo $errors['nomproduit']; ?></span><br> 
            <label>Déscription du produit</label><br>
            <textarea name="description" id="description" cols="50px" rows="10px"></textarea><br>
            <span style="color:red"><?php echo $errors['description']; ?></span><br> 
            <input type="submit" value="Valider">   
        </form>
		
        <a href='deconnexion.php'>Se déconnecter</a>
		
    </body>
</html>