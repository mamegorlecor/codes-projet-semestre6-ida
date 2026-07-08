<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suñu Savoir-Faire - Exposition</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    
    <style>
        :root {
            --marron-brand: #C07A1E;
            --bg-page: #F9F9F9;
        }

        body {
            background-color: var(--bg-page);
            font-family: sans-serif;
            /* Décale tout le contenu pour ne pas qu'il glisse sous l'en-tête fixe */
            padding-top: 110px !important; 
        }

        /* ==========================================================================
           STYLES DE LA PAGE D'EXPOSITION (L'en-tête est gérée par son propre CSS)
           ========================================================================== */

        /* Filtres */
        .filter-section h4 {
            font-weight: bold;
            margin-right: 15px;
        }
        .btn-filter {
            background-color: var(--marron-brand);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 6px 15px;
            font-weight: 500;
        }
        .btn-filter:hover, .btn-filter:focus {
            background-color: #a36515;
            color: white;
        }

        /* Cartes d'exposition */
        .artisan-card {
            border: 1px solid #DCDCDC;
            border-radius: 12px;
            background-color: white;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            height: 100%;
            transition: transform 0.2s;
        }
        .artisan-card:hover {
            transform: translateY(-2px);
        }
        .card-img-container {
            height: 200px;
            overflow: hidden;
            background-color: #f0f0f0;
        }
        .card-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-body-custom {
            padding: 20px;
        }
        .artisan-title {
            font-family: serif;
            font-weight: bold;
            font-size: 1.25rem;
            margin-bottom: 12px;
        }
        .info-line {
            margin-bottom: 8px;
            font-size: 0.95rem;
        }
        .info-line i {
            font-size: 1.1rem;
        }
        .secteur-text {
            font-style: italic;
            font-family: serif;
        }

        /* Bouton Voir plus */
        .btn-voir-plus {
            background-color: var(--marron-brand);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 6px 25px;
            font-weight: 500;
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
        }
        .btn-voir-plus:hover {
            background-color: #a36515;
            color: white;
        }

        /* Footer Styles de base */
        .custom-footer {
            background-color: var(--marron-brand);
            color: white;
            padding: 30px 0 15px 0;
            margin-top: 50px;
        }
        .footer-links a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }

        /* ==========================================================================
           AJUSTEMENTS RESPONSIVES POUR MOBILES (Max 767px)
           ========================================================================== */
        @media (max-width: 767px) {
            body {
                padding-top: 80px !important; /* Un peu moins d'espace sur mobile */
            }
            .filter-section .d-flex {
                justify-content: center !important;
                gap: 10px !important;
            }
            .filter-section h4 {
                width: 100%;
                text-align: center;
                margin-right: 0;
                margin-bottom: 5px;
            }
            .btn-filter {
                font-size: 0.9rem;
                padding: 6px 12px;
                width: 47%;
            }
            .dropdown { display: inline-block; width: 50%; text-align: center; }
            .dropdown .btn-filter { width: 100%; }

            .card-img-container {
                height: 160px;
            }
            .card-body-custom {
                padding: 15px;
            }
            .artisan-title {
                font-size: 1.15rem;
            }

            .custom-footer { text-align: center !important; }
            .custom-footer .text-start, .custom-footer .text-md-end {
                text-align: center !important;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <?php include('entete.php'); ?>

    <div class="container mt-4 mt-md-5 filter-section">
        <div class="d-flex align-items-center gap-3 flex-wrap">
            <h4 class="mb-0">Filtres</h4>
            
            <div class="dropdown">
                <button class="btn btn-filter dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Par Région
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item p-2" data-type="region" data-value="tous" href="#">Tous</a></li>
                    <li><a class="dropdown-item p-2" data-type="region" data-value="dakar" href="#">Dakar</a></li>
                    <li><a class="dropdown-item p-2" data-type="region" data-value="thiès" href="#">Thiès</a></li>
                    <li><a class="dropdown-item p-2" data-type="region" data-value="casamance" href="#">Casamance</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-filter dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Par Catégorie
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item p-2" data-type="categorie" data-value="tous" href="#">Tous</a></li>
                    <li><a class="dropdown-item p-2" data-type="categorie" data-value="textile" href="#">Textile</a></li>
                    <li><a class="dropdown-item p-2" data-type="categorie" data-value="menuiserie" href="#">Menuiserie</a></li>
                    <li><a class="dropdown-item p-2" data-type="categorie" data-value="transformation" href="#">Transformation</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container my-4 my-md-5">
        <div class="row g-3 g-md-4" id="artisan-grid">
            
            <div class="col-md-6 col-lg-6 artisan-column">
                <div class="artisan-card text-center">
                    <div class="card-img-container">
                        <img src="images/couture.png" alt="Couture">
                    </div>
                    <div class="card-body-custom">
                        <div class="artisan-title">Couture Excellence</div>
                        <div class="info-line text-secondary">
                            <i class="bi bi-geo-alt-fill text-danger"></i> Région : <span class="text-dark fw-semibold region-value">Dakar</span>
                        </div>
                        <div class="info-line text-secondary">
                            Secteur : <span class="text-dark secteur-text secteur-value">Textile</span>
                        </div>
                        <a href="couture_excellence.php" class="btn-voir-plus text-decoration-none">Voir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 artisan-column">
                <div class="artisan-card text-center">
                    <div class="card-img-container">
                        <img src="images/bois.png" alt="Menuiserie">
                    </div>
                    <div class="card-body-custom">
                        <div class="artisan-title">Art Bois Sénégal</div>
                        <div class="info-line text-secondary">
                            <i class="bi bi-geo-alt-fill text-success"></i> Région : <span class="text-dark fw-semibold region-value">Thiès</span>
                        </div>
                        <div class="info-line text-secondary">
                            Secteur : <span class="text-dark secteur-text secteur-value">Menuiserie</span>
                        </div>
                        <a href="artbois.php" class="btn-voir-plus text-decoration-none">Voir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 artisan-column">
                <div class="artisan-card text-center">
                    <div class="card-img-container">
                        <img src="images/chipsmangues.png" alt="Fruits">
                    </div>
                    <div class="card-body-custom">
                        <div class="artisan-title">Gie teranga Fruits</div>
                        <div class="info-line text-secondary">
                            <i class="bi bi-geo-alt-fill text-primary"></i> Région : <span class="text-dark fw-semibold region-value">Casamance</span>
                        </div>
                        <div class="info-line text-secondary">
                            Secteur : <span class="text-dark secteur-text secteur-value">Transformation</span>
                        </div>
                        <a href="terangafruit.php" class="btn-voir-plus text-decoration-none">Voir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 artisan-column">
                <div class="artisan-card text-center">
                    <div class="card-img-container">
                        <img src="images/transfoorange.png" alt="Transformation">
                    </div>
                    <div class="card-body-custom">
                        <div class="artisan-title">MandaBio</div>
                        <div class="info-line text-secondary">
                            <i class="bi bi-geo-alt-fill text-warning"></i> Région : <span class="text-dark fw-semibold region-value">Casamance</span>
                        </div>
                        <div class="info-line text-secondary">
                            Secteur : <span class="text-dark secteur-text secteur-value">Transformation</span>
                        </div>
                        <a href="MandaBio.php" class="btn-voir-plus text-decoration-none">Voir plus</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include('piedpage.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script_exposition.js"></script>
</body>
</html>