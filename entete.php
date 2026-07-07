<?php
// Détecte automatiquement le nom du fichier actuel (ex: accueil.php, exposition.php)
$page_actuelle = basename($_SERVER['PHP_SELF']);
?>

<link rel="stylesheet" type="text/css" href="styleentete.css?v=21">

<nav class="navbar navbar-expand-md entete-page">
  <div class="container-fluid conteneur-nav d-flex align-items-center justify-content-between">
    
    <button class="navbar-toggler custom-burger" type="button" data-bs-toggle="collapse" data-bs-target="#menuDynamique" aria-controls="menuDynamique" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse content-liens" id="menuDynamique">
      <ul class="navbar-nav menu-liens me-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo ($page_actuelle == 'accueil.php') ? 'active' : ''; ?>" href="accueil.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page_actuelle == 'exposition.php') ? 'active' : ''; ?>" href="exposition.php">Exposition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($page_actuelle == 'inscriptions.php') ? 'active' : ''; ?>" href="inscriptions.php">S'inscrire</a>
        </li>
      </ul>
    </div>

    <div class="logo-box navbar-brand m-0">
      <span class="logo-sunu">Sunu</span> 
      <span class="logo-savoir">Savoir-Faire</span>
    </div>

  </div>
</nav>