<?php
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "gestion_ecole");

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Gestion de l'ajout d'un nouvel élève
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter_eleve'])) {
    $nom_complet = $_POST['nom_complet'];
    $date_naissance = $_POST['date_naissance'];
    $genre = $_POST['genre'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $tuteur_nom = $_POST['tuteur_nom'];
    $tuteur_telephone = $_POST['tuteur_telephone'];
    $classe_id = $_POST['classe_id'];

    $stmt = $conn->prepare("INSERT INTO eleves (nom_complet, date_naissance, genre, adresse, email, telephone, tuteur_nom, tuteur_telephone, classe_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssi", $nom_complet, $date_naissance, $genre, $adresse, $email, $telephone, $tuteur_nom, $tuteur_telephone, $classe_id);

    if ($stmt->execute()) {
        echo "<script>alert('Élève ajouté avec succès !');</script>";
    } else {
        echo "<script>alert('Erreur lors de l\'ajout de l\'élève.');</script>";
    }

    $stmt->close();
}

// Récupération de la liste des élèves
$result = $conn->query("SELECT * FROM eleves");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Gestion des Élèves</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f8f8;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }
        .btn-add {
            background-color: #28a745;
        }
        .btn-edit {
            background-color: #007bff;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gestion des Élèves</h1>
            <button class="btn btn-add" onclick="document.getElementById('addStudentModal').style.display='block'">
                <i class="fas fa-plus"></i> Nouvel Élève
            </button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date de Naissance</th>
                    <th>Classe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nom_complet']) ?></td>
                    <td><?= htmlspecialchars($row['date_naissance']) ?></td>
                    <td><?= htmlspecialchars($row['classe_id']) ?></td>
                    <td>
                        <button class="btn btn-edit"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal pour ajouter un nouvel élève -->
    <div id="addStudentModal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <h2>Ajouter un Élève</h2>
        <form method="POST">
            <input type="text" name="nom_complet" placeholder="Nom complet" required><br><br>
            <input type="date" name="date_naissance" required><br><br>
            <select name="genre">
                <option value="Masculin">Masculin</option>
                <option value="Féminin">Féminin</option>
                <option value="Autre">Autre</option>
            </select><br><br>
            <input type="text" name="adresse" placeholder="Adresse" required><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="text" name="telephone" placeholder="Téléphone"><br><br>
            <input type="text" name="tuteur_nom" placeholder="Nom du tuteur"><br><br>
            <input type="text" name="tuteur_telephone" placeholder="Téléphone du tuteur"><br><br>
            <input type="number" name="classe_id" placeholder="ID Classe"><br><br>
            <button type="submit" name="ajouter_eleve" class="btn btn-add">Ajouter</button>
            <button type="button" class="btn btn-delete" onclick="document.getElementById('addStudentModal').style.display='none'">Annuler</button>
        </form>
    </div>
</body>
</html>

<?php $conn->close(); ?>
