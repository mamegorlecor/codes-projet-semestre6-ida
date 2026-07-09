<?php
$entreprise = "Gie Teranga Fruits";
$region = "Casamance";
$domaine = "Agroalimentaire";
$email = "terangajus26@gmail.com";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $entreprise; ?></title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { background-color: #f9f9f9; font-family: Arial, sans-serif; }

    .container {
      max-width: 750px;
      margin: 40px auto;
      padding: 30px;
      background: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
      border-radius: 4px;
    }

    /* Encadré entreprise */
    .entreprise-box {
      border: 2px solid #C07A1E;
      padding: 20px 30px;
      text-align: center;
      border-radius: 4px;
      margin-bottom: 5px;
      background-color: #fff;
    }
    .entreprise-box h3 {
      font-size: 1.4rem;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .entreprise-box .info {
      text-align: center;
    }
    .entreprise-box .info span {
      display: inline;
      font-size: 15px;
      margin: 0 25px;
    }

    /* Titre */
    .titre {
      color: #C07A1E;
      font-weight: bold;
      font-size: 1.1rem;
      text-align: left;
      margin: 10px 0 5px 0;
    }

    p { margin: 8px 0; font-size: 14px; line-height: 1.6; }

    /* Produits */
    .produits {
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }
    .produit {
      flex: 1;
      border: 1px solid #ddd;
      overflow: hidden;
      border-radius: 4px;
    }
    .produit img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      display: block;
    }
    .nom-produit {
      background-color: #C07A1E;
      color: #fff;
      padding: 8px 6px;
      font-weight: bold;
      font-size: 13px;
      min-height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    /* Contact */
    .contact {
      margin-top: 40px;
      font-size: 14px;
      text-align: left;
    }
    .contact a {
      font-weight: bold;
      text-decoration: underline;
      color: #C07A1E;
    }
  </style>
</head>
<body>
<div class="container">

  <div class="entreprise-box">
    <h3><?php echo $entreprise; ?></h3>
    <div class="info">
      <span><strong>Région :</strong> <?php echo $region; ?></span>
      <span><strong>Domaine :</strong> <?php echo $domaine; ?></span>
    </div>
  </div>

  <h4 class="titre">Présentation de l'entreprise</h4>
  <p>
    Le <?php echo $entreprise; ?> est une organisation spécialisée dans la production
    et la transformation de fruits locaux en Casamance. Elle valorise les ressources
    agricoles de la région à travers la fabrication de jus naturels, de confitures
    et de fruits séchés de haute qualité. Son objectif est de promouvoir les produits
    du terroir sénégalais tout en soutenant le développement économique des producteurs locaux.
  </p>

  <div class="produits">
    <div class="produit">
      <img src="jusmangue.jpg" alt="Jus de mangue naturel">
      <div class="nom-produit">Jus de mangue naturel</div>
    </div>
    <div class="produit">
      <img src="confitured'orange.jpg" alt="Confiture d'orange artisanale">
      <div class="nom-produit">Confiture d'orange artisanale</div>
    </div>
    <div class="produit">
      <img src="fruitsseche.jpg" alt="Fruits séchés">
      <div class="nom-produit">Fruits séchés</div>
    </div>
  </div>

  <div class="contact">
    <p>Pour commander ou discuter avec l'entreprise dans le but de nouer une
    collaboration, veuillez lui envoyer un email sur l'adresse suivante :</p>
    <p><strong>email :</strong>
      <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
    </p>
  </div>

</div>
</body>
</html>