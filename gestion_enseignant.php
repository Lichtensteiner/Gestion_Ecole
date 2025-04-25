<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./asset/css/gestion_enseignant.css">
  <title>gestion_enseignants</title>
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
      <a href="/views/gestion_eleve.php" class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
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
          <option>Biologie</option>
          <option>Informatique</option>
          <option>Commerciale</option>
          
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

<script>document.getElementById('addStudent').addEventListener('click', function () {
  document.getElementById('studentModal').classList.remove('hidden');
});
document.getElementById('closeModal').addEventListener('click', function () {
  document.getElementById('studentModal').classList.add('hidden');
});
document.getElementById('cancelStudent').addEventListener('click', function () {
  document.getElementById('studentModal').classList.add('hidden');
});
document.querySelector('#teachers button.bg-green-600').addEventListener('click', function () {
  document.getElementById('teacherModal').classList.remove('hidden');
});
document.getElementById('closeTeacherModal').addEventListener('click', function () {
  document.getElementById('teacherModal').classList.add('hidden');
});
document.getElementById('cancelTeacher').addEventListener('click', function () {
  document.getElementById('teacherModal').classList.add('hidden');
});
document.addEventListener('DOMContentLoaded', function () {
  const navButtons = document.querySelectorAll('.nav-btn');
  const sections = document.querySelectorAll('.section');
  navButtons.forEach(button => {
    button.addEventListener('click', function () {
      navButtons.forEach(btn => btn.classList.remove('active'));
      sections.forEach(section => section.classList.remove('active'));
      this.classList.add('active');
      const sectionId = this.dataset.section;
      document.getElementById(sectionId).classList.add('active');
    });
  });
});</script>

</body>
</html>