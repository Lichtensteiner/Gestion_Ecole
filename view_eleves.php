<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Élève</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-800 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">GestionSco Gabon</h1>
            <a href="dashboard.php" class="bg-blue-700 px-4 py-2 rounded shadow hover:bg-blue-600">
                <i class="fas fa-arrow-left"></i> Retour au tableau de bord
            </a>
        </div>
    </header>

    <main class="container mx-auto my-8 p-4 bg-white shadow-md rounded">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold">Informations sur l'élève</h2>
        </div>

        <!-- Informations sensibles -->
        <section class="mb-6">
            <h3 class="text-xl font-semibold mb-3 text-blue-800">1. Informations sensibles</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p><strong>Nom complet :</strong> John Doe</p>
                <p><strong>Date et lieu de naissance :</strong> 01/01/2005, Libreville</p>
                <p><strong>Sexe :</strong> Masculin</p>
                <p><strong>Adresse postale :</strong> BP 123, Libreville</p>
                <p><strong>Téléphone :</strong> +241 12345678</p>
                <p><strong>Email :</strong> john.doe@example.com</p>
                <p><strong>Nationalité :</strong> Gabonaise</p>
            </div>
        </section>

        <!-- Informations académiques -->
        <section class="mb-6">
            <h3 class="text-xl font-semibold mb-3 text-blue-800">2. Informations académiques</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p><strong>Matricule :</strong> 2023001</p>
                <p><strong>Cours actuel :</strong> Mathématiques avancées</p>
                <p><strong>Niveau :</strong> Secondaire</p>
                <p><strong>Filière :</strong> Sciences</p>
                <p><strong>Historique des classes :</strong> 6e, 5e, 4e, 3e</p>
                <p><strong>Moyenne générale :</strong> 14/20</p>
                <p><strong>Statut académique :</strong> Actif</p>
            </div>
        </section>

        <!-- Informations familiales -->
        <section class="mb-6">
            <h3 class="text-xl font-semibold mb-3 text-blue-800">3. Informations familiales</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p><strong>Parents :</strong> M. et Mme Doe</p>
                <p><strong>Contact parents :</strong> +241 98765432</p>
                <p><strong>Profession des parents :</strong> Enseignants</p>
                <p><strong>Adresse :</strong> BP 456, Libreville</p>
                <p><strong>Urgence :</strong> Tante Jane Doe (+241 87654321)</p>
            </div>
        </section>

        <!-- Informations administratives -->
        <section class="mb-6">
            <h3 class="text-xl font-semibold mb-3 text-blue-800">4. Informations administratives</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p><strong>Date d'inscription :</strong> 01/09/2022</p>
                <p><strong>Frais de scolarité :</strong> 300,000 FCFA (Payé : 200,000 FCFA, Dû : 100,000 FCFA)</p>
                <p><strong>Bourses :</strong> Aucun</p>
                <p><strong>Documents fournis :</strong> Certificat de naissance, relevés de notes</p>
            </div>
        </section>

        <!-- Santé -->
        <section class="mb-6">
            <h3 class="text-xl font-semibold mb-3 text-blue-800">5. Santé</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p><strong>Groupe sanguin :</strong> O+</p>
                <p><strong>Antécédents médicaux :</strong> Asthme</p>
                <p><strong>Allergies :</strong> Pollen</p>
                <p><strong>Contact médical :</strong> Dr. Ndong (+241 65432178)</p>
            </div>
        </section>

        <!-- Activités parascolaires -->
        <section class="mb-6">
            <h3 class="text-xl font-semibold mb-3 text-blue-800">6. Activités parascolaires</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p><strong>Clubs :</strong> Club scientifique</p>
                <p><strong>Sports :</strong> Basketball</p>
                <p><strong>Récompenses :</strong> Médaille d'or en science</p>
            </div>
        </section>

        <!-- Comportement -->
        <section class="mb-6">
            <h3 class="text-xl font-semibold mb-3 text-blue-800">7. Comportement</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p><strong>Observations :</strong> Élève très appliqué</p>
                <p><strong>Rapports disciplinaires :</strong> Aucun</p>
                <p><strong>Fréquentation :</strong> 2 absences, 1 retard</p>
            </div>
        </section>

        <!-- Autres informations -->
        <section class="mb-6">
            <h3 class="text-xl font-semibold mb-3 text-blue-800">8. Autres informations</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <p><strong>Photo d'identité :</strong></p>
                <img src="photo_eleve.jpg" alt="Photo de l'élève" class="w-32 h-32 object-cover border rounded">
                <p><strong>Nom d'utilisateur :</strong> john.doe</p>
                <p><strong>Mot de passe :</strong> ********</p>
            </div>
        </section>

        <div class="text-center mt-6">
            <button class="bg-green-600 text-white px-6 py-2 rounded shadow hover:bg-green-500">
                <i class="fas fa-save"></i> Enregistrer
            </button>
            <button class="bg-red-600 text-white px-6 py-2 rounded shadow hover:bg-red-500">
                <i class="fas fa-trash"></i> Supprimer
            </button>
        </div>
    </main>

    <footer class="bg-gray-800 text-white text-center p-4 mt-6">
        &copy; 2024 GestionSco Gabon
    </footer>
</body>
</html>
