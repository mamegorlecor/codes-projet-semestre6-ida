<?php 
include('configsunu.php');
$message = "";

$errors = [
    'nom' => '', 'email' => '', 'password' => '', 'region' => '',
    'numerotelephone' => '', 'cni' => '', 'ninea' => '', 'justification' => ''
];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $password_brut = $_POST['password']; 
    $region = htmlspecialchars($_POST['region']);
    $numerotelephone = trim($_POST['numerotelephone']);
    $cni = $_POST['cni'];
    $ninea = $_POST['ninea'];
    $justification = null;

    if (empty($nom)) { $errors['nom'] = 'Le nom est obligatoire'; }
    if (empty($email)) { $errors['email'] = "L'adresse email est obligatoire"; }
    if (empty($password_brut)) { $errors['password'] = 'Le mot de passe est obligatoire'; }
    if (empty($region)) { $errors['region'] = 'La région est obligatoire'; }
    if (empty($numerotelephone)) { $errors['numerotelephone'] = 'Le numéro de téléphone est obligatoire'; }
    if (empty($cni)) { $errors['cni'] = "Le numéro de carte d'identité est obligatoire"; }
    if (empty($ninea)) { $errors['ninea'] = 'Le NINEA est obligatoire'; }
    
    if (isset($_FILES['justification']) && $_FILES['justification']['error'] === UPLOAD_ERR_OK) {
        $justification = file_get_contents($_FILES['justification']['tmp_name']);
    } else {
        $errors['justification'] = 'Le document justificatif est obligatoire ou invalide';
    }

    if (empty(array_filter($errors))) {
        
        $password_hache = password_hash($password_brut, PASSWORD_DEFAULT);

        try {
            $sth = $connexion->prepare("INSERT INTO utilisateurs(nom, email, password, region, numerotelephone, cni, ninea, justification) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
            $resultat = $sth->execute([$nom, $email, $password_hache, $region, $numerotelephone, $cni, $ninea, $justification]);

            if ($resultat) {
                $message = "<span style='color:green'>Inscription réussie !</span>";
                header("Location:connexion.php");
            } else {
                $message = "<span style='color:red'>L'inscription n'a pas abouti.</span>";
            }
        } catch (PDOException $e) {
            
            $message = "<span style='color:red'>Erreur SQL : " . $e->getMessage() . "</span>";
        }
    } else {
        $message = "<span style='color:red'>Veuillez corriger les erreurs du formulaire.</span>";
    }
}  

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Page d'inscription</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
<form action="inscription.php" method="POST" enctype="multipart/form-data">
            <label for="nom">Nom :</label><br>
            <input type="text" name="nom" id="nom"><br>
            <span style="color:red"><?php echo $errors['nom']; ?></span><br>
            <label for="email">Adresse email :</label><br>
            <input type="email" name="email" id="email"><br>
            <span style="color:red"><?php echo $errors['email']; ?></span><br>
            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" id="password"><br>
            <span style="color:red"><?php echo $errors['password']; ?></span><br>
            <label for="region">Région :</label><br>
            <input type="text" name="region" id="region"><br>
            <span style="color:red"><?php echo $errors['region']; ?></span><br>
            <label for="numerotelephone">Numéro téléphone :</label><br>
            <input type="number" name="numerotelephone" id="numerotelephone" length="9"><br>
            <span style="color:red"><?php echo $errors['numerotelephone']; ?></span><br>
            <label for="numero">Numéro carte nationale d'identité :</label><br>
            <input type="number" name="cni" id="cni" length="9"><br>
            <span style="color:red"><?php echo $errors['cni']; ?></span><br>
            <label for="ninea">ninea</label><br>
            <input type="number" name="ninea" id="ninea"><br>
            <span style="color:red"><?php echo $errors['ninea']; ?></span><br>
            <label for="justification">Vos documents(NINEA et CNI) :</label><br>
            <input type="file" name="justification" id="justification"><br>
            <span style="color:red"><?php echo $errors['justification']; ?></span><br>
            <input type="submit" value="s'inscrire">
            </form>
            </body>
                </html>

