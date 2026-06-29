<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <link rel="stylesheet" href="css/ajouter_produit.css">
</head>
<body>

<div class="page-container">
    <p class="info-text">Les produits que vous ajoutez ne sont pas directement ajoutés dans votre page. Il est fondamental pour nous d'analyser le produit et vérifier qu'il est légal de le vendre.</p>

    <h2>Ajouter un nouveau produit</h2>

    <div class="form-container">
        <form method="POST">
            
            <label>Nom entreprise ou artisan :</label>
            <input type="text" name="nom" required>

            <label>Nom du produit :</label>
            <input type="text" name="nomproduit" required>

            <label>Description :</label>
            <textarea name="description" required></textarea>

            <button type="submit" class="btn-valider">Valider</button>
        </form>
    </div>
</div>

</body>
</html>