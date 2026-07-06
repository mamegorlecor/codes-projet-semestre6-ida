<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suñu Savoir-Faire - Accueil</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    
    <!-- Lien vers ton fichier CSS externe -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    

    <div class="container my-4 my-md-5 text-center">
        
        <p class="intro-text px-2 px-md-3 max-width-1000 mx-auto">
            Bienvenue sur votre application web conçue uniquement pour augmenter la visibilité des petites et moyennes entreprises locales, permettre à nos artisans d'exposer leurs produits, de développer leurs ventes et de renforcer leur présence sur le marché national.
        </p>

        <h2 class="section-title">Nos objectifs</h2>
        
        <ul class="objectifs-list mb-4 px-3 px-md-0">
            <li><strong>Aider les Petites et Moyennes Entreprises</strong> et les artisans dans le domaine de la transformation des produits agricoles.</li>
            <li><strong>Promouvoir la consommation</strong> des produits locaux.</li>
            <li><strong>Digitaliser la recherche</strong> de produits fabriqués au Sénégal par nos artisans et nos PME.</li>
        </ul>

        <p class="digital-callout text-center px-2">
            Venez exploiter le pouvoir de la digitalisation et trouver facilement les entreprises qui fabriquent les produits que vous cherchez !
        </p>

        <div class="carousel-container my-4 my-md-5 px-2 px-md-0">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/bissap.png" class="d-block w-100" alt="Jus locaux">
                    </div>
                    <div class="carousel-item">
                        <img src="images/chaise.png" class="d-block w-100" alt="Produits locaux">
                    </div>
                    <div class="carousel-item">
                        <img src="images/sac.png" class="d-block w-100" alt="Artisanat Textile">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>

        <div class="argument-block text-start px-3">
            <p class="argument-title">Pourquoi aider nos PME dans le domaine de la transformation et nos artisans ?</p>
            <p>Soutenir nos artisans et nos transformatrices, c'est encourager directement la consommation des produits locaux.</p>
        </div>

        <div class="argument-block text-start px-3">
            <p>Rechercher une petite ou moyenne entreprise ou un artisan local devient plus facile : c'est aussi s'engager pour la création d'emplois.</p>
        </div>

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>