<?php
session_start();

// Variables d'erreur et de succès
$erreur = $success = "";

// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "gestion_ecole");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Traitement du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connexion'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "SELECT id, nom_complet, mot_de_passe, role FROM utilisateurs WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($mot_de_passe, $user['mot_de_passe'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nom_complet'] = $user['nom_complet'];
            $_SESSION['role'] = $user['role'];

           // Rediriger vers la page dashboard après connexion
           header("Location: dashboard.php");
            exit();
        } else {
            $erreur = "Mot de passe incorrect.";
        }
    } else {
        $erreur = "Aucun utilisateur trouvé avec cet email.";
    }
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/inscription.css">
    <link rel="shortcut icon" href="./asset/img/vector-school-icon.jpg">
    <title>Connexion / Inscription</title>
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
        <h2>Connexion</h2>
        <?php if (isset($erreur)) : ?>
            <p class="error"><?= $erreur; ?></p>
        <?php endif; ?>

        <!-- Formulaire de Connexion -->
        <form method="POST" action="index.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
       
            <button type="submit" name="connexion">Se connecter</button>
        </form>

        <p>Pas encore inscrit ? <a href="./inscrption.php" onclick="toggleForms()">S'inscrire ici</a></p>
    <script>
        function toggleForms() {
            var connexionForm = document.getElementById("connexion-form");
            var inscriptionForm = document.getElementById("inscription-form");
            
            if (connexionForm.style.display === "none") {
                connexionForm.style.display = "block";
                inscriptionForm.style.display = "none";
            } else {
                connexionForm.style.display = "none";
                inscriptionForm.style.display = "block";
            }
        }
    </script>
</body>
</html>
