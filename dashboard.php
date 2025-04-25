<?php
include './config/db.php'; // Inclure le fichier de configuration

// Comptage des statistiques
$eleves = $pdo->query("SELECT COUNT(*) FROM eleves")->fetchColumn();
$enseignants = $pdo->query("SELECT COUNT(*) FROM enseignants")->fetchColumn();
$classes = $pdo->query("SELECT COUNT(*) FROM classes")->fetchColumn();
$moyenne_generale = $pdo->query("SELECT AVG(moyenne) FROM eleves")->fetchColumn();
?>




<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="." /><script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./asset/css/dashboard.css">
  <title>Document</title>
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
      <button class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-chart-line"></i>
        <span>Tableau de bord</span>
      </button>
      <button class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-user-graduate"></i>
        <span>Élèves</span>
      </button>
      <button class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-chalkboard-teacher"></i>
        <span>Enseignants</span>
      </button>
      <button class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
        <i class="fas fa-school"></i>
        <span>Classes</span>
      </button>
      <button class="hover:bg-blue-700 p-2 rounded transition-all flex items-center gap-2">
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

<!-- Dashboard -->
<main class="container mx-auto mt-8">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Stats Cards -->
    <div class="dashboard-card bg-white p-6 rounded-lg shadow-md transition-all">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-gray-500"><i class="fas fa-users text-blue-500 mr-2"></i>Total Élèves</p>
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
          <p class="text-gray-500"><i class="fas fa-chart-line text-red-500 mr-2"></i>Moyenne Générale</p>
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
        Activités Récentes
      </h2>
      <div class="space-y-4">
        <div class="flex items-center gap-4 p-3 hover:bg-gray-50 rounded-lg transition-all">
          <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
            <i class="fas fa-plus text-green-500"></i>
          </div>
          <div class="flex-1">
            <p>Note ajoutée en Mathématiques - 6ème A</p>
            <span class="text-sm text-gray-500">Il y a 5min</span>
          </div>
        </div>
        <div class="flex items-center gap-4 p-3 hover:bg-gray-50 rounded-lg transition-all">
          <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
            <i class="fas fa-exclamation text-red-500"></i>
          </div>
          <div class="flex-1">
            <p>Absence signalée - Mve Zogo</p>
            <span class="text-sm text-gray-500">Il y a 15min</span>
          </div>
        </div>
        <div class="flex items-center gap-4 p-3 hover:bg-gray-50 rounded-lg transition-all">
          <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
            <i class="fas fa-user-plus text-blue-500"></i>
          </div>
          <div class="flex-1">
            <p>Nouvel élève inscrit - Marie Koumba</p>
            <span class="text-sm text-gray-500">Il y a 1h</span>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-xl font-bold mb-4 flex items-center gap-2">
        <i class="fas fa-calendar-alt text-blue-500"></i>
        Emploi du temps aujourd'hui
      </h2>
      <div class="space-y-4">
        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-all">
          <div class="flex items-center gap-3">
            <i class="fas fa-clock text-blue-500"></i>
            <span>8h - 10h</span>
          </div>
          <span class="font-medium">Mathématiques</span>
          <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">6ème A</span>
        </div>
        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-all">
          <div class="flex items-center gap-3">
            <i class="fas fa-clock text-blue-500"></i>
            <span>10h - 12h</span>
          </div>
          <span class="font-medium">Français</span>
          <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">5ème B</span>
        </div>
        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-all">
          <div class="flex items-center gap-3">
            <i class="fas fa-clock text-blue-500"></i>
            <span>14h - 16h</span>
          </div>
          <span class="font-medium">Histoire-Géo</span>
          <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">4ème C</span>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Add hover effects to buttons
  const buttons = document.querySelectorAll('button');
  buttons.forEach(button => {
    button.addEventListener('mouseover', () => {
      button.classList.add('scale-105');
    });
    button.addEventListener('mouseout', () => {
      button.classList.remove('scale-105');
    });
  });

  // Add click handlers for navigation
  const navButtons = document.querySelectorAll('nav button');
  navButtons.forEach(button => {
    button.addEventListener('click', () => {
      console.log(`Navigating to ${button.textContent.trim()}`);
    });
  });
});
</script>
</body>
</html>