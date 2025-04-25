<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli("localhost", "root", "", "gestion_ecole");

    if ($conn->connect_error) {
        die("Erreur de connexion : " . $conn->connect_error);
    }

    $nom_complet = $conn->real_escape_string($_POST['nom_complet']);
    $email = $conn->real_escape_string($_POST['email']);
    $mot_de_passe = $_POST['mot_de_passe'];
    $confirmer_mot_de_passe = $_POST['confirmer_mot_de_passe'];
    $role = $conn->real_escape_string($_POST['role']);

    // Validation du mot de passe
    if ($mot_de_passe !== $confirmer_mot_de_passe) {
        $erreur = "Les mots de passe ne correspondent pas.";
    } else {
        $sql = "SELECT id FROM utilisateurs WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $erreur = "Cet email est déjà utilisé.";
        } else {
            $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_BCRYPT);

            $sql = "INSERT INTO utilisateurs (nom_complet, email, mot_de_passe, role)
                    VALUES ('$nom_complet', '$email', '$mot_de_passe_hache', '$role')";

            if ($conn->query($sql) === TRUE) {
                $success = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
                // Redirection immédiate après inscription réussie
                header("Location: dashboard.php");
                exit();  // Arrête l'exécution du script
            } else {
                $erreur = "Erreur lors de l'inscription : " . $conn->error;
            }
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/inscription.css">
    <link rel="shortcut icon" href="./asset/img/vector-school-icon.jpg">
    <title>Inscription</title>
</head>
<style>
    .form-container {
    width: 400px;
    margin: auto;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 8px;
}

input, select, button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

.error {
    color: red;
}

.success {
    color: green;
}

a {
    color: #4CAF50;
}

</style>
<body>
    <div class="form-container">
        <h2>Inscription</h2>
        <?php if (isset($erreur)) : ?>
            <p class="error"><?= $erreur; ?></p>
        <?php endif; ?>
        <?php if (isset($success)) : ?>
            <p class="success"><?= $success; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <input type="text" name="nom_complet" placeholder="Nom complet" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
            <input type="password" name="confirmer_mot_de_passe" placeholder="Confirmer le mot de passe" required>
            <select name="role" required>
                <option value="" disabled selected>Choisissez un rôle</option>
                <option value="admin">Admin</option>
                <option value="enseignant">Enseignant</option>
                <option value="etudiant">Étudiant</option>
            </select>
            <button type="submit">S'inscrire</button>
        </form>
        <p>Déjà inscrit ? <a href="index.php">Connectez-vous ici</a>.</p>
    </div>
</body>
</html>
