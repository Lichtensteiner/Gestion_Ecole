<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./asset/css/gestion_note.css">
  <link rel="shortcut icon" href="./asset/img/vector-school-icon.jpg">
  <title>Gestion_note</title>
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
      <button data-section="dashboard" class="nav-btn hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2 active">
        <i class="fas fa-chart-line"></i>
        <span>Tableau de bord</span>
      </button>
      <button data-section="students" class="nav-btn hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-user-graduate"></i>
        <span>&#xc9;l&#xe8;ves</span>
      </button>
      <button data-section="teachers" class="nav-btn hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-chalkboard-teacher"></i>
        <span>Enseignants</span>
      </button>
      <button data-section="classes" class="nav-btn hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-school"></i>
        <span>Classes</span>
      </button>
      <button data-section="grades" class="nav-btn hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-star"></i>
        <span>Notes</span>
      </button>
    </div>
    <div class="flex items-center gap-3 bg-blue-700 p-2 rounded">
      <i class="fas fa-user-shield"></i>
      <span>Admin</span>
    </div>
  </div>
</nav>

<!-- Dashboard Section -->
<main class="container mx-auto mt-8">
  <div id="dashboard" class="section active">
    <!-- Original dashboard content here -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Stats Cards -->
      <div class="dashboard-card bg-white p-6 rounded-lg shadow-md transition-all">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500"><i class="fas fa-users text-blue-500 mr-2"></i>Total &#xc9;l&#xe8;ves</p>
            <h3 class="text-2xl font-bold">1,234</h3>
            <p class="text-sm text-green-500 mt-2"><i class="fas fa-arrow-up"></i> +5% ce mois</p>
          </div>
          <div class="bg-blue-100 p-4 rounded-full">
            <i class="fas fa-user-graduate text-3xl text-blue-500"></i>
          </div>
        </div>
      </div>

      <div class="dashboard-card bg-white p-6 rounded-lg shadow-md transition-all">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500"><i class="fas fa-chalkboard-teacher text-green-500 mr-2"></i>Enseignants</p>
            <h3 class="text-2xl font-bold">87</h3>
            <p class="text-sm text-green-500 mt-2"><i class="fas fa-arrow-up"></i> +2% ce mois</p>
          </div>
          <div class="bg-green-100 p-4 rounded-full">
            <i class="fas fa-chalkboard-teacher text-3xl text-green-500"></i>
          </div>
        </div>
      </div>

      <div class="dashboard-card bg-white p-6 rounded-lg shadow-md transition-all">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500"><i class="fas fa-school text-yellow-500 mr-2"></i>Classes</p>
            <h3 class="text-2xl font-bold">42</h3>
            <p class="text-sm text-yellow-500 mt-2"><i class="fas fa-equals"></i> Stable</p>
          </div>
          <div class="bg-yellow-100 p-4 rounded-full">
            <i class="fas fa-school text-3xl text-yellow-500"></i>
          </div>
        </div>
      </div>

      <div class="dashboard-card bg-white p-6 rounded-lg shadow-md transition-all">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500"><i class="fas fa-chart-line text-red-500 mr-2"></i>Moyenne G&#xe9;n&#xe9;rale</p>
            <h3 class="text-2xl font-bold">12.8</h3>
            <p class="text-sm text-green-500 mt-2"><i class="fas fa-arrow-up"></i> +0.3 pts</p>
          </div>
          <div class="bg-red-100 p-4 rounded-full">
            <i class="fas fa-chart-bar text-3xl text-red-500"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Activities -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
          <i class="fas fa-history text-blue-500"></i>
          Activit&#xe9;s R&#xe9;centes
        </h2>
        <div class="space-y-4">
          <div class="flex items-center gap-4 p-3 hover:bg-gray-50 rounded-lg transition-all">
            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
              <i class="fas fa-plus text-green-500"></i>
            </div>
            <div class="flex-1">
              <p>Note ajout&#xe9;e en Math&#xe9;matiques - 6&#xe8;me A</p>
              <span class="text-sm text-gray-500">Il y a 5min</span>
            </div>
          </div>
          <div class="flex items-center gap-4 p-3 hover:bg-gray-50 rounded-lg transition-all">
            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
              <i class="fas fa-exclamation text-red-500"></i>
            </div>
            <div class="flex-1">
              <p>Absence signal&#xe9;e - Mve Zogo</p>
              <span class="text-sm text-gray-500">Il y a 15min</span>
            </div>
          </div>
          <div class="flex items-center gap-4 p-3 hover:bg-gray-50 rounded-lg transition-all">
            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
              <i class="fas fa-user-plus text-blue-500"></i>
            </div>
            <div class="flex-1">
              <p>Nouvel &#xe9;l&#xe8;ve inscrit - Marie Koumba</p>
              <span class="text-sm text-gray-500">Il y a 1h</span>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
          <i class="fas fa-calendar-alt text-blue-500"></i>
          Emploi du temps aujourd&apos;hui
        </h2>
        <div class="space-y-4">
          <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-all">
            <div class="flex items-center gap-3">
              <i class="fas fa-clock text-blue-500"></i>
              <span>8h - 10h</span>
            </div>
            <span class="font-medium">Math&#xe9;matiques</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">6&#xe8;me A</span>
          </div>
          <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-all">
            <div class="flex items-center gap-3">
              <i class="fas fa-clock text-blue-500"></i>
              <span>10h - 12h</span>
            </div>
            <span class="font-medium">Fran&#xe7;ais</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">5&#xe8;me B</span>
          </div>
          <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-all">
            <div class="flex items-center gap-3">
              <i class="fas fa-clock text-blue-500"></i>
              <span>14h - 16h</span>
            </div>
            <span class="font-medium">Histoire-G&#xe9;o</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">4&#xe8;me C</span>
          </div>
        </div>
      </div>
    </div>
  </div>

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

  <!-- Teachers Section -->
  <div id="teachers" class="section">
    <h2 class="text-2xl font-bold mb-6">Gestion des Enseignants</h2>
    <div class="bg-white rounded-lg shadow-md p-6">
      <div class="flex justify-between mb-6">
        <div class="flex gap-4">
          <input type="text" placeholder="Rechercher un enseignant..." class="p-2 border rounded-lg">
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            <i class="fas fa-search mr-2"></i>Rechercher
          </button>
        </div>
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700" id="addTeacher">
          <i class="fas fa-plus mr-2"></i>Nouvel Enseignant
        </button>
      </div>
      <table class="w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="p-4 text-left">Nom</th>
            <th class="p-4 text-left">Mati&#xe8;re</th>
            <th class="p-4 text-left">Contact</th>
            <th class="p-4 text-left">Email</th>
            <th class="p-4 text-left">Dipl&#xf4;me</th>
            <th class="p-4 text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t">
            <td class="p-4">Ndong Marie</td>
            <td class="p-4">Math&#xe9;matiques</td>
            <td class="p-4">0241456789</td>
            <td class="p-4">marie.ndong@email.com</td>
            <td class="p-4">CAPES</td>
            <td class="p-4">
              <button class="text-blue-600 hover:text-blue-800 mr-2" title="Modifier"><i class="fas fa-edit"></i></button>
              <button class="text-red-600 hover:text-red-800 mr-2" title="Supprimer"><i class="fas fa-trash"></i></button>
              <button class="text-green-600 hover:text-green-800" title="Voir d&#xe9;tails"><i class="fas fa-eye"></i></button>
            </td>
          </tr>
          <!-- Add more teacher rows as needed -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Classes Section -->
  <div id="classes" class="section">
    <h2 class="text-2xl font-bold mb-6">Gestion des Classes</h2>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- Main Class Info Card -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex items-center justify-between mb-4">
          <h3 class="text-xl font-bold">6&#xe8;me A</h3>
          <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">32 &#xe9;l&#xe8;ves</span>
        </div>
        <div class="space-y-3">
          <p><i class="fas fa-user-tie mr-2"></i>Prof. Principal: M. Ondo</p>
          <p><i class="fas fa-clock mr-2"></i>8h - 17h</p>
          <p><i class="fas fa-map-marker-alt mr-2"></i>Salle: 105</p>
          <hr class="my-3">
          <p class="font-semibold">Statistiques:</p>
          <div class="grid grid-cols-2 gap-2 text-sm">
            <div>Moyenne: 12.5/20</div>
            <div>Taux pr&#xe9;sence: 95%</div>
          </div>
          <button class="w-full mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 manage-class-btn">
            G&#xe9;rer la classe
          </button>
        </div>
      </div>

      <!-- Class Details Sections -->
      <div class="lg:col-span-2 space-y-6">
        <!-- Students Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-lg font-bold mb-4">&#xc9;l&#xe8;ves</h4>
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead class="bg-gray-50">
                <tr>
                  <th class="p-2 text-left">Nom</th>
                  <th class="p-2 text-left">Moyenne</th>
                  <th class="p-2 text-left">Absences</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-t">
                  <td class="p-2">Mba Jean</td>
                  <td class="p-2">13.5/20</td>
                  <td class="p-2">2</td>
                </tr>
                <!-- Additional students... -->
              </tbody>
            </table>
          </div>
        </div>

        <!-- Schedule Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-lg font-bold mb-4">Emploi du Temps</h4>
          <div class="grid grid-cols-5 gap-2 text-sm">
            <div class="bg-gray-50 p-2 rounded">
              <div class="font-bold">Lundi</div>
              <div>8h - Math</div>
              <div>10h - Fran&#xe7;ais</div>
            </div>
            <!-- Additional days... -->
          </div>
        </div>

        <!-- Resources Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-lg font-bold mb-4">Ressources &amp; &#xc9;quipements</h4>
          <div class="grid grid-cols-2 gap-4">
            <div>
              <h5 class="font-semibold">Mat&#xe9;riel disponible:</h5>
              <ul class="list-disc list-inside">
                <li>Projecteur</li>
                <li>Tableau interactif</li>
                <li>30 tablettes</li>
              </ul>
            </div>
            <div>
              <h5 class="font-semibold">Documents:</h5>
              <ul class="list-disc list-inside">
                <li>Programme scolaire</li>
                <li>Guides p&#xe9;dagogiques</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Communication Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-lg font-bold mb-4">Communication &amp; Activit&#xe9;s</h4>
          <div class="space-y-4">
            <div>
              <h5 class="font-semibold">Prochaines r&#xe9;unions:</h5>
              <p>R&#xe9;union parents-profs: 15/03/2024</p>
            </div>
            <div>
              <h5 class="font-semibold">Activit&#xe9;s extrascolaires:</h5>
              <p>Club de math&#xe9;matiques: Mercredi 14h-16h</p>
              <p>Sortie p&#xe9;dagogique: 20/03/2024</p>
            </div>
          </div>
        </div>

        <!-- Discipline Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="text-lg font-bold mb-4">Discipline &amp; Comportement</h4>
          <div class="space-y-4">
            <div class="flex justify-between items-center">
              <span>Incidents ce mois:</span>
              <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">2 mineurs</span>
            </div>
            <div>
              <h5 class="font-semibold">Derniers rapports:</h5>
              <ul class="list-disc list-inside">
                <li>05/03: Retard en cours (Mba Jean)</li>
                <li>02/03: Devoir non fait (Koumba Marie)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Grades Section -->
  <div id="grades" class="section">
    <h2 class="text-2xl font-bold mb-6">Gestion des Notes</h2>
    <div class="bg-white rounded-lg shadow-md p-6">
      <div class="flex justify-between mb-6">
        <div class="flex gap-4">
          <select class="p-2 border rounded-lg">
            <option>Sélectionner une classe</option>
            <option>6ème A</option>
            <option>6ème B</option>
          </select>
          <select class="p-2 border rounded-lg">
            <option>Sélectionner une matière</option>
            <option>Mathématiques</option>
            <option>Français</option>
          </select>
          <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            <i class="fas fa-search mr-2"></i>Afficher
          </button>
        </div>
        <button id="addGrade" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
          <i class="fas fa-plus mr-2"></i>Ajouter des notes
        </button>
      </div>
      <table class="w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="p-4 text-left">Élève</th>
            <th class="p-4 text-left">Devoir 1</th>
            <th class="p-4 text-left">Devoir 2</th>
            <th class="p-4 text-left">Composition</th>
            <th class="p-4 text-left">Moyenne</th>
            <th class="p-4 text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-t">
            <td class="p-4">Obiang Pierre</td>
            <td class="p-4"><input type="number" min="0" max="20" class="w-20 p-1 border rounded" value="15"></td>
            <td class="p-4"><input type="number" min="0" max="20" class="w-20 p-1 border rounded" value="13"></td>
            <td class="p-4"><input type="number" min="0" max="20" class="w-20 p-1 border rounded" value="14"></td>
            <td class="p-4">14.00</td>
            <td class="p-4">
              <button class="text-blue-600 hover:text-blue-800 mr-2" title="Modifier">
                <i class="fas fa-edit"></i>
              </button>
              <button class="text-red-600 hover:text-red-800 mr-2" title="Supprimer">
                <i class="fas fa-trash"></i>
              </button>
              <button class="text-green-600 hover:text-green-800" title="Voir détails">
                <i class="fas fa-eye"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</main>

<!-- Student Modal -->
<div id="studentModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto hidden">
  <div class="relative top-20 mx-auto p-5 border w-3/4 shadow-lg rounded-md bg-white">
    <div class="flex justify-between items-center">
      <h3 class="text-xl font-bold">Nouvel &#xc9;l&#xe8;ve</h3>
      <button id="closeModal" class="text-gray-600 hover:text-gray-800">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <form id="studentForm" class="mt-4 grid grid-cols-2 gap-4">
      <div class="col-span-2 grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">Nom</label>
          <input type="text" name="lastname" class="mt-1 p-2 w-full border rounded-md" required>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Pr&#xe9;nom</label>
          <input type="text" name="firstname" class="mt-1 p-2 w-full border rounded-md" required>
        </div>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Date de Naissance</label>
        <input type="date" name="birthdate" class="mt-1 p-2 w-full border rounded-md" required>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Lieu de Naissance</label>
        <input type="text" name="birthplace" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Classe</label>
        <select name="class" class="mt-1 p-2 w-full border rounded-md" required>
          <option>6&#xe8;me A</option>
          <option>6&#xe8;me B</option>
          <option>5&#xe8;me A</option>
          <option>5&#xe8;me B</option>
        </select>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Sexe</label>
        <select name="gender" class="mt-1 p-2 w-full border rounded-md">
          <option>Masculin</option>
          <option>F&#xe9;minin</option>
        </select>
      </div>
      <div class="col-span-2">
        <label class="block text-sm font-medium text-gray-700">Adresse</label>
        <input type="text" name="address" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <div class="col-span-2 grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">Nom du Parent/Tuteur</label>
          <input type="text" name="parent_name" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Contact Parent</label>
          <input type="tel" name="parent_phone" class="mt-1 p-2 w-full border rounded-md">
        </div>
      </div>
      <div class="col-span-2 flex justify-end gap-4 mt-4">
        <button type="button" id="cancelStudent" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
          Annuler
        </button>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
          Enregistrer
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Teacher Modal -->
<div id="teacherModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto hidden">
  <div class="relative top-20 mx-auto p-5 border w-3/4 shadow-lg rounded-md bg-white">
    <div class="flex justify-between items-center">
      <h3 class="text-xl font-bold">Nouvel Enseignant</h3>
      <button id="closeTeacherModal" class="text-gray-600 hover:text-gray-800">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <form id="teacherForm" class="mt-4 grid grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Nom</label>
        <input type="text" name="lastname" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Pr&#xe9;nom</label>
        <input type="text" name="firstname" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Mati&#xe8;re principale</label>
        <select name="subject" class="mt-1 p-2 w-full border rounded-md">
          <option>Math&#xe9;matiques</option>
          <option>Fran&#xe7;ais</option>
          <option>Histoire-G&#xe9;o</option>
          <option>SVT</option>
          <option>Physique-Chimie</option>
        </select>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">T&#xe9;l&#xe9;phone</label>
        <input type="tel" name="phone" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Dipl&#xf4;me</label>
        <input type="text" name="diploma" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <div class="col-span-2">
        <label class="block text-sm font-medium text-gray-700">Adresse</label>
        <input type="text" name="address" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <div class="col-span-2 flex justify-end gap-4 mt-4">
        <button type="button" id="cancelTeacher" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
          Annuler
        </button>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
          Enregistrer
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Class Management Modal -->
<div id="classManageModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto hidden">
  <div class="relative top-20 mx-auto p-5 border w-11/12 shadow-lg rounded-md bg-white">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-xl font-bold">Gestion de la Classe: 6ème A</h3>
      <button id="closeClassManageModal" class="text-gray-600 hover:text-gray-800">
        <i class="fas fa-times"></i>
      </button>
    </div>

    <!-- Class Management Tabs -->
    <div class="border-b border-gray-200 mb-4">
      <nav class="flex -mb-px">
        <button class="class-tab active bg-blue-50 text-blue-600 px-4 py-2 font-medium border-b-2 border-blue-500">
          Informations générales
        </button>
        <button class="class-tab px-4 py-2 font-medium text-gray-600 hover:text-blue-600">
          Élèves
        </button>
        <button class="class-tab px-4 py-2 font-medium text-gray-600 hover:text-blue-600">
          Emploi du temps
        </button>
        <button class="class-tab px-4 py-2 font-medium text-gray-600 hover:text-blue-600">
          Notes et évaluations
        </button>
        <button class="class-tab px-4 py-2 font-medium text-gray-600 hover:text-blue-600">
          Discipline
        </button>
        <button class="class-tab px-4 py-2 font-medium text-gray-600 hover:text-blue-600">
          Communication
        </button>
      </nav>
    </div>

    <!-- Action Buttons -->
    <div class="flex gap-4 mb-6">
      <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
        <i class="fas fa-plus mr-2"></i>Ajouter un élève
      </button>
      <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        <i class="fas fa-calendar-alt mr-2"></i>Planifier un cours
      </button>
      <button class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700">
        <i class="fas fa-bell mr-2"></i>Envoyer une notification
      </button>
      <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">
        <i class="fas fa-file-alt mr-2"></i>Générer un rapport
      </button>
    </div>

    <!-- Class Content Area -->
    <div class="grid grid-cols-3 gap-6">
      <!-- Quick Stats -->
      <div class="col-span-1 bg-gray-50 p-4 rounded-lg">
        <h4 class="font-bold mb-4">Statistiques rapides</h4>
        <div class="space-y-3">
          <div class="flex justify-between">
            <span>Effectif total:</span>
            <span class="font-bold">32</span>
          </div>
          <div class="flex justify-between">
            <span>Moyenne générale:</span>
            <span class="font-bold">12.5/20</span>
          </div>
          <div class="flex justify-between">
            <span>Taux de présence:</span>
            <span class="font-bold text-green-600">95%</span>
          </div>
        </div>
      </div>

      <!-- Recent Activities -->
      <div class="col-span-2 bg-gray-50 p-4 rounded-lg">
        <h4 class="font-bold mb-4">Activités récentes</h4>
        <div class="space-y-3">
          <div class="flex items-center gap-3 bg-white p-2 rounded">
            <i class="fas fa-user-edit text-blue-500"></i>
            <span>Note ajoutée en Mathématiques</span>
            <span class="text-gray-500 text-sm">Il y a 2h</span>
          </div>
          <div class="flex items-center gap-3 bg-white p-2 rounded">
            <i class="fas fa-exclamation-circle text-red-500"></i>
            <span>Absence signalée: Jean Mba</span>
            <span class="text-gray-500 text-sm">Il y a 3h</span>
          </div>
          <div class="flex items-center gap-3 bg-white p-2 rounded">
            <i class="fas fa-calendar-check text-green-500"></i>
            <span>Devoir programmé: Français</span>
            <span class="text-gray-500 text-sm">Il y a 5h</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Grade Modal -->
<div id="gradeModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto hidden">
  <div class="relative top-20 mx-auto p-5 border w-3/4 shadow-lg rounded-md bg-white">
    <div class="flex justify-between items-center">
      <h3 class="text-xl font-bold">Ajouter des Notes</h3>
      <button id="closeGradeModal" class="text-gray-600 hover:text-gray-800">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <form id="gradeForm" class="mt-4">
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">Classe</label>
          <select name="class" class="mt-1 p-2 w-full border rounded-md" required>
            <option>6ème A</option>
            <option>6ème B</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Matière</label>
          <select name="subject" class="mt-1 p-2 w-full border rounded-md" required>
            <option>Mathématiques</option>
            <option>Français</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Type d'évaluation</label>
          <select name="evaluation_type" class="mt-1 p-2 w-full border rounded-md" required>
            <option>Devoir 1</option>
            <option>Devoir 2</option>
            <option>Composition</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700">Date</label>
          <input type="date" name="date" class="mt-1 p-2 w-full border rounded-md" required>
        </div>
      </div>
      <div class="mt-4">
        <table class="w-full">
          <thead class="bg-gray-50">
            <tr>
              <th class="p-2 text-left">Élève</th>
              <th class="p-2 text-left">Note (/20)</th>
              <th class="p-2 text-left">Observations</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="p-2">Obiang Pierre</td>
              <td class="p-2"><input type="number" min="0" max="20" class="w-20 p-1 border rounded"></td>
              <td class="p-2"><input type="text" class="w-full p-1 border rounded"></td>
            </tr>
            <!-- Add more student rows as needed -->
          </tbody>
        </table>
      </div>
      <div class="flex justify-end gap-4 mt-4">
        <button type="button" id="cancelGrade" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
          Annuler
        </button>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
          Enregistrer
        </button>
      </div>
    </form>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get all nav buttons and sections
  const navButtons = document.querySelectorAll('.nav-btn');
  const sections = document.querySelectorAll('.section');
  
  // Add click handler to each nav button
  navButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove active class from all buttons and sections
      navButtons.forEach(btn => btn.classList.remove('active'));
      sections.forEach(section => section.classList.remove('active'));
      
      // Add active class to clicked button
      button.classList.add('active');
      
      // Show corresponding section
      const sectionId = button.dataset.section;
      document.getElementById(sectionId).classList.add('active');
    });
  });

  // Add click handler for "Gérer la classe" buttons
  const classManageButtons = document.querySelectorAll('.manage-class-btn');
  classManageButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Show class management modal
      document.getElementById('classManageModal').classList.remove('hidden');
    });
  });

  // Close class management modal
  document.getElementById('closeClassManageModal').addEventListener('click', function() {
    document.getElementById('classManageModal').classList.add('hidden');
  });

  const classTabs = document.querySelectorAll('.class-tab');
  
  classTabs.forEach(tab => {
    tab.addEventListener('click', function() {
      // Remove active class from all tabs
      classTabs.forEach(t => {
        t.classList.remove('active', 'bg-blue-50', 'text-blue-600', 'border-b-2', 'border-blue-500');
        t.classList.add('text-gray-600');
      });
      
      // Add active class to clicked tab
      this.classList.add('active', 'bg-blue-50', 'text-blue-600', 'border-b-2', 'border-blue-500');
      this.classList.remove('text-gray-600');
      
      // Here you would normally update the content based on the selected tab
    });
  });

  document.getElementById('addStudent').addEventListener('click', function() {
    document.getElementById('studentModal').classList.remove('hidden');
  });

  document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('studentModal').classList.add('hidden');
  });

  document.getElementById('cancelStudent').addEventListener('click', function() {
    document.getElementById('studentModal').classList.add('hidden');
  });

  document.getElementById('addTeacher').addEventListener('click', function() {
    document.getElementById('teacherModal').classList.remove('hidden');
  });

  document.getElementById('closeTeacherModal').addEventListener('click', function() {
    document.getElementById('teacherModal').classList.add('hidden');
  });

  document.getElementById('cancelTeacher').addEventListener('click', function() {
    document.getElementById('teacherModal').classList.add('hidden');
  });

  document.getElementById('studentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form values
    const formData = new FormData(this);
    const studentData = Object.fromEntries(formData);
    
    // Add student to table
    const tbody = document.querySelector('#students table tbody');
    const tr = document.createElement('tr');
    tr.classList.add('border-t');
    tr.innerHTML = `
      <td class="p-4">${studentData.lastname} ${studentData.firstname}</td>
      <td class="p-4">${studentData.class}</td> 
      <td class="p-4">${studentData.parent_phone}</td>
      <td class="p-4">
        <button class="text-blue-600 hover:text-blue-800 mr-2" title="Modifier">
          <i class="fas fa-edit"></i>
        </button>
        <button class="text-red-600 hover:text-red-800 mr-2" title="Supprimer">
          <i class="fas fa-trash"></i>
        </button>
        <button class="text-green-600 hover:text-green-800" title="Voir détails">
          <i class="fas fa-eye"></i>
        </button>
      </td>
    `;
    
    tbody.appendChild(tr);

    const required = ['lastname', 'firstname', 'birthdate', 'class'];
    for(let field of required) {
      if(!formData.get(field)) {
        alert(`Le champ ${field} est obligatoire`);
        return;
      }
    }

    showSuccess('Élève ajouté avec succès!');
    document.getElementById('studentModal').classList.add('hidden');
    this.reset();
  });

  function showSuccess(message) {
    const alert = document.createElement('div');
    alert.classList.add('fixed', 'top-4', 'right-4', 'bg-green-100', 'text-green-800', 'p-4', 'rounded');
    alert.textContent = message;
    document.body.appendChild(alert);
    setTimeout(() => alert.remove(), 3000);
  }

  document.querySelectorAll('.fa-trash').forEach(btn => {
    btn.addEventListener('click', function() {
      if(confirm('Voulez-vous vraiment supprimer cet élève?')) {
        this.closest('tr').remove();
        showSuccess('Élève supprimé avec succès!');
      }
    });
  });

  document.querySelectorAll('.fa-eye').forEach(btn => {
    btn.addEventListener('click', function() {
      const studentName = this.closest('tr').querySelector('td').textContent;
      alert(`Détails pour l'élève: ${studentName}`);
      // Here you would typically show a modal with full student details
    });
  });

  // Grade modal handlers
  document.getElementById('addGrade').addEventListener('click', function() {
    document.getElementById('gradeModal').classList.remove('hidden');
  });

  document.getElementById('closeGradeModal').addEventListener('click', function() {
    document.getElementById('gradeModal').classList.add('hidden');
  });

  document.getElementById('cancelGrade').addEventListener('click', function() {
    document.getElementById('gradeModal').classList.add('hidden');
  });

  // Handle grade form submission
  document.getElementById('gradeForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Here you would typically save the grades
    showSuccess('Notes enregistrées avec succès!');
    document.getElementById('gradeModal').classList.add('hidden');
    this.reset();
  });

  // Handle grade deletion
  document.querySelectorAll('#grades .fa-trash').forEach(btn => {
    btn.addEventListener('click', function() {
      if(confirm('Voulez-vous vraiment supprimer ces notes?')) {
        this.closest('tr').remove();
        showSuccess('Notes supprimées avec succès!');
      }
    });
  });

  // Handle grade details view
  document.querySelectorAll('#grades .fa-eye').forEach(btn => {
    btn.addEventListener('click', function() {
      const studentName = this.closest('tr').querySelector('td').textContent;
      alert(`Détails des notes pour: ${studentName}`);
      // Here you would typically show a modal with detailed grade information
    });
  });
});
</script>

</body></html>