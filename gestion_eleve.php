<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'gestion_ecole');

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Récupération des classes depuis la base de données
$classesQuery = "SELECT id, nom_classe FROM classes";
$classesResult = $conn->query($classesQuery);

// Récupération des informations pour pré-remplir le formulaire (si modification d'un élève)
$studentId = isset($_GET['id']) ? $_GET['id'] : null;
$studentData = null;
if ($studentId) {
    $studentQuery = "SELECT * FROM students WHERE id = ?";
    $stmt = $conn->prepare($studentQuery);
    $stmt->bind_param("i", $studentId);
    $stmt->execute();
    $studentData = $stmt->get_result()->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./asset/css/gestion_eleve.css">
  <title>Gestion_eleve</title>
</head>
<body class="bg-gray-50">
<!-- Navigation -->
<nav class="bg-gradient-to-r from-blue-800 to-blue-600 text-white p-4 shadow-lg">
  <div class="container mx-auto flex justify-between items-center">
    <div class="flex items-center gap-2">
      <i class="fas fa-graduation-cap text-2xl"></i>
      <h1 class="text-2xl font-bold">GestionSco Gabon</h1>
    </div>
    <div class="flex gap-4">
      <a href="/dashboard.php" class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-chart-line"></i>
        <span>Tableau de bord</span>
      </a>
      <a href="./views/gestion_eleve.php" class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-user-graduate"></i>
        <span>Élèves</span>
      </a>
      <a href="/views/gestion_enseignant.php" class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-chalkboard-teacher"></i>
        <span>Enseignants</span>
      </a>
      <a href="/views/gestion_classe.php" class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-school"></i>
        <span>Classes</span>
      </a>
      <a href="/views/gestion_note.php" class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-star"></i>
        <span>Notes</span>
      </a>
    </div>
    <div class="flex items-center gap-3 bg-blue-700 p-2 rounded">
      <i class="fas fa-user-shield"></i>
      <span>Admin</span>
    </div>
  </div>
</nav>


  <!-- Students Section -->
  <div id="students" class="section">
    <h2 class="text-2xl font-bold mb-6">Gestion des &#xc9;l&#xe8;ves</h2>
    <div class="bg-white rounded-lg shadow-md p-6">
      <div class="flex justify-between mb-6">
        <div class="flex gap-4">
          <input type="text" placeholder="Rechercher un &#xe9;l&#xe8;ve..." class="p-2 border rounded-lg">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            <i class="fas fa-search mr-2"></i>Rechercher
          </button>
        </div>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700" id="addStudent">
          <i class="fas fa-plus mr-2"></i>Nouvel &#xc9;l&#xe8;ve
        </button>
      </div>
      <table class="w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="p-4 text-left">Nom</th>
            <th class="p-4 text-left">Classe</th>
            <th class="p-4 text-left">Parent</th>
            <th class="p-4 text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t">
            <td class="p-4">Mba Jean</td>
            <td class="p-4">6&#xe8;me A</td>
            <td class="p-4">0241789654</td>
            <td class="p-4">
              <button class="text-blue-600 hover:text-blue-800 mr-2" title="Modifier"><i class="fas fa-edit"></i></button>
              <button class="text-red-600 hover:text-red-800 mr-2" title="Supprimer"><i class="fas fa-trash"></i></button>
              <button class="text-green-600 hover:text-green-800" title="Voir d&#xe9;tails"><i class="fas fa-eye"></i></button>
            </td>
          </tr>
          <!-- Add more student rows as needed -->
        </tbody>
      </table>
    </div>
  </div>
  <div id="studentModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto hidden">
    <div class="relative top-20 mx-auto p-5 border w-3/4 shadow-lg rounded-md bg-white">
      <div class="flex justify-between items-center">
        <h3 class="text-xl font-bold">
          <?php echo $studentId ? "Modifier l'élève" : "Nouvel Élève"; ?>
        </h3>
        <button id="closeModal" class="text-gray-600 hover:text-gray-800">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <form id="studentForm" class="mt-4 grid grid-cols-2 gap-4" method="POST" action="save_student.php">
        <input type="hidden" name="id" value="<?php echo $studentId ?? ''; ?>">
        <div class="col-span-2 grid grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" name="lastname" class="mt-1 p-2 w-full border rounded-md" 
                   value="<?php echo htmlspecialchars($studentData['lastname'] ?? '', ENT_QUOTES); ?>">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Prénom</label>
            <input type="text" name="firstname" class="mt-1 p-2 w-full border rounded-md" 
                   value="<?php echo htmlspecialchars($studentData['firstname'] ?? '', ENT_QUOTES); ?>">
          </div>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Date de Naissance</label>
          <input type="date" name="birthdate" class="mt-1 p-2 w-full border rounded-md" 
                 value="<?php echo htmlspecialchars($studentData['birthdate'] ?? '', ENT_QUOTES); ?>">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Lieu de Naissance</label>
          <input type="text" name="birthplace" class="mt-1 p-2 w-full border rounded-md" 
                 value="<?php echo htmlspecialchars($studentData['birthplace'] ?? '', ENT_QUOTES); ?>">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Classe</label>
          <select name="class" class="mt-1 p-2 w-full border rounded-md">
            <?php
            while ($class = $classesResult->fetch_assoc()) {
                $selected = ($studentData['class_id'] ?? '') == $class['id'] ? 'selected' : '';
                echo "<option value='{$class['id']}' $selected>{$class['nom_classe']}</option>";
            }
            ?>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Sexe</label>
          <select name="gender" class="mt-1 p-2 w-full border rounded-md">
            <option value="Masculin" <?php echo ($studentData['gender'] ?? '') == 'Masculin' ? 'selected' : ''; ?>>Masculin</option>
            <option value="Féminin" <?php echo ($studentData['gender'] ?? '') == 'Féminin' ? 'selected' : ''; ?>>Féminin</option>
          </select>
        </div>
        <div class="col-span-2">
          <label class="block text-sm font-medium text-gray-700">Adresse</label>
          <input type="text" name="address" class="mt-1 p-2 w-full border rounded-md" 
                 value="<?php echo htmlspecialchars($studentData['address'] ?? '', ENT_QUOTES); ?>">
        </div>
        <div class="col-span-2 grid grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">Nom du Parent/Tuteur</label>
            <input type="text" name="parent_name" class="mt-1 p-2 w-full border rounded-md" 
                   value="<?php echo htmlspecialchars($studentData['parent_name'] ?? '', ENT_QUOTES); ?>">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">Contact Parent</label>
            <input type="tel" name="parent_phone" class="mt-1 p-2 w-full border rounded-md" 
                   value="<?php echo htmlspecialchars($studentData['parent_phone'] ?? '', ENT_QUOTES); ?>">
          </div>
        </div>
        <div class="col-span-2 flex justify-end gap-4 mt-4">
          <button type="button" id="cancelStudent" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
            Annuler
          </button>
          <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            <?php echo $studentId ? "Mettre à jour" : "Enregistrer"; ?>
          </button>
        </div>
      </form>
    </div>
  </div>
  <?php $conn->close(); ?>
<script>
  // Add event listener to the add student button
  document.getElementById('addStudent').addEventListener('click', function() {
    document.getElementById('studentModal').classList.remove('hidden');
  });

  // Add event listener to the close modal button
  document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('studentModal').classList.add('hidden');
  });

  // Add event listener to the cancel student button
  document.getElementById('cancelStudent').addEventListener('click', function() {
    document.getElementById('studentModal').classList.add('hidden');
  });

  document.addEventListener('DOMContentLoaded', function() {
    // Get all nav buttons and sections
    const navButtons = document.querySelectorAll('.nav-btn');
    const sections = document.querySelectorAll('.section');

    // Add click handler for each nav button 
    navButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Remove active class from all nav buttons and sections
        navButtons.forEach(btn => btn.classList.remove('active'));
        sections.forEach(section => section.classList.remove('active'));

        // Add active class to clicked button
        this.classList.add('active');

        // Get corresponding section ID and activate it
        const sectionId = this.dataset.section;
        document.getElementById(sectionId).classList.add('active');
      });
    });
  });
</script>

</body>
</html>