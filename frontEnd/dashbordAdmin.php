<?php session_start();
// if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] == 'admin') { 
//   header("Location: login.php"); exit(); } 
//   echo "Welcome to the User Dashboard!"; 
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chef Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="bg-black shadow-md p-4 flex justify-between items-center">
    <div class="flex items-center"><a href="#">
        <img src=".../img/cuisine_logo-removebg-preview.png" class="max-w-full h-auto w-[100px] " alt="logo">
      </a>
      <h1 class="text-2xl font-bold text-white"> Dashboard panel</h1>
    </div>
    <div class="flex items-center">
      <span class="mr-4 text-white">Hello, <strong>User</strong></span>
      <img src="https://via.placeholder.com/40" alt="profile" class="rounded-full w-10 h-10">
    </div>
  </nav>



  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800">

      <nav class="mt-8">
        <a href="#" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white">Dashboard</a>
        <button id="bteVoirReservation" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white"> Voir tous les reservation </button>
        <button id="bteAjoutActivite" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white"> ajout activite</button>
        <button href="view_reservbuttontions.php" id="bteReservbuttoncceptte" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white">reservation acceptee</button>
        <button href="logout.php" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white">Logout</button>
      </nav>
    </aside>
    <main class="flex-1  overflow-y-auto">
      <div class="container mx-auto p-4">
        <!-- Welcome Section -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6 flex justify-between items-center">
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Welcome, Client!</h2>
            <p class="text-gray-600 mt-2">Check your profil, and stay connecte!</p>
          </div>
          <div>
            <img src="https://via.placeholder.com/120" alt="chef icon" class="w-32">
          </div>
        </div>

        <!-- voir tous les reservation  Section -->
        <section class="mb-8 section" id="allreservation">
          <h2 class="text-xl font-bold mb-4"> Reservations History</h2>
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full bg-white">
              <thead>
                <tr>
                  <th class="py-2 px-4 text-left">Client</th>
                  <th class="py-2 px-4 text-left">Date</th>
                  <th class="py-2 px-4 text-left">Time</th>
                  <th class="py-2 px-4 text-left">Guests</th>
                  <th class="py-2 px-4 text-left">Status</th>
                  <th class="py-2 px-4 text-left">Actions</th>
                </tr>
              </thead>
              <tbody>

                <tr class="border-t">
                  <td class="py-2 px-4">Asma lachhab</td>
                  <td class="py-2 px-4">2024-12-17</td>
                  <td class="py-2 px-4">19:00</td>
                  <td class="py-2 px-4">4</td>
                  <td class="py-2 px-4 text-yellow-500">Pending</td>
                  <td class="border-b p-3">
                    <button class="text-green-500 hover:underline">Accept</button> |
                    <button class="text-red-500 hover:underline">Refuse</button>
                  </td>
                </tr>

                <tr class="border-t">
                  <td class="py-2 px-4">Sara boulahia</td>
                  <td class="py-2 px-4">2024-12-18td>
                  <td class="py-2 px-4">15:00</td>
                  <td class="py-2 px-4">6</td>
                  <td class="py-2 px-4 text-yellow-500">Pending</td>
                  <td class="border-b p-3">
                    <button class="text-green-500 hover:underline">Accept</button> |
                    <button class="text-red-500 hover:underline">Refuse</button>
                  </td>
                </tr>
                <tr class="border-t">
                  <td class="py-2 px-4">Sara boulahia</td>
                  <td class="py-2 px-4">2024-12-18td>
                  <td class="py-2 px-4">15:00</td>
                  <td class="py-2 px-4">6</td>
                  <td class="py-2 px-4 text-yellow-500">Pending</td>
                  <td class="border-b p-3">
                    <button class="text-green-500 hover:underline">Accept</button> |
                    <button class="text-red-500 hover:underline">Refuse</button>
                  </td>
                </tr>

                <tr class="border-t">
                  <td class="py-2 px-4">Sara boulahia</td>
                  <td class="py-2 px-4">2024-12-18td>
                  <td class="py-2 px-4">15:00</td>
                  <td class="py-2 px-4">6</td>
                  <td class="py-2 px-4 text-yellow-500">Pending</td>
                  <td class="border-b p-3">
                    <button class="text-green-500 hover:underline">Accept</button> |
                    <button class="text-red-500 hover:underline">Refuse</button>
                  </td>
                </tr>

                <tr class="border-t">
                  <td class="py-2 px-4">Sara boulahia</td>
                  <td class="py-2 px-4">2024-12-18td>
                  <td class="py-2 px-4">15:00</td>
                  <td class="py-2 px-4">6</td>
                  <td class="py-2 px-4 text-yellow-500">Pending</td>
                  <td class="border-b p-3">
                    <button class="text-green-500 hover:underline">Edit</button> |
                    <button class="text-red-500 hover:underline">Cancel</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>




        <!-- Add Menu Section -->
        <section class="mb-8 section hidden" id="formActivite">
          <div class="flex items-center justify-center min-h-screen">
            <div class="w-full max-w-[550px] bg-white rounded-lg shadow-md p-6">
              <form action="../traitement/ajoutactivite.php" method="post" class="space-y-6">
                <div class="sm:flex sm:space-x-6 space-y-6 sm:space-y-0">
                  <div class="w-full">
                    <label for="Titre" class="block text-sm font-medium text-gray-700 mb-2">Titre</label>
                    <input type="text" name="Titre" id="Titre" class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 py-2 px-4" />
                  </div>
                  <div class="w-full">
                    <label for="destination" class="block text-sm font-medium text-gray-700 mb-2">Destination</label>
                    <input type="text" name="destination" id="destination" class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 py-2 px-4" />
                  </div>
                </div>
                <div>
                  <label for="Description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                  <textarea name="Description" id="Description" rows="4" class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 py-2 px-4"></textarea>
                </div>
                <div class="sm:flex sm:space-x-6 space-y-6 sm:space-y-0">
                  <div class="w-full">
                    <label for="dateDebut" class="block text-sm font-medium text-gray-700 mb-2">Date de début</label>
                    <input type="date" name="dateDebut" id="dateDebut" class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 py-2 px-4" />
                  </div>
                  <div class="w-full">
                    <label for="dateFin" class="block text-sm font-medium text-gray-700 mb-2">Date de fin</label>
                    <input type="date" name="dateFin" id="dateFin" class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 py-2 px-4" />
                  </div>
                </div>
                <div class="sm:flex sm:space-x-6 space-y-6 sm:space-y-0">
                  <div class="w-full">
                    <label for="Prix" class="block text-sm font-medium text-gray-700 mb-2">Prix</label>
                    <input type="number" name="Prix" id="Prix" class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 py-2 px-4" />
                  </div>
                  <div class="w-full">
                    <label for="nbrPlaces" class="block text-sm font-medium text-gray-700 mb-2">Nombre de places</label>
                    <input type="number" name="nbrPlaces" id="nbrPlaces" class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 py-2 px-4" />
                  </div>
                </div>
                <div>
                  <label for="Description" class="block text-sm font-medium text-gray-700 mb-2">Type d'activité</label>
                  <select name="type_activite" id="Description" class="w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 py-2 px-4">
                    <option value="vols">Vols</option>
                    <option value="hotels">Hôtels</option>
                    <option value="circuits">Circuits touristiques</option>
                  </select>
                </div>
                <div>
                  <button type="submit" class="w-full bg-indigo-600 text-white font-medium py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Enregistrer
                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>



        <!-- all reservation acceptee -->

        <section class="mb-8 section hidden" id="reservationacceptee">
            <h2 class="text-xl font-bold mb-4"> Reservations acceptees</h2>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead >
                        <tr>
                            <th class="py-2 px-4 text-left">Client</th>
                            <th class="py-2 px-4 text-left">Date</th>
                            <th class="py-2 px-4 text-left">Time</th>
                            <th class="py-2 px-4 text-left">Guests</th>
                            <th class="py-2 px-4 text-left">Status</th>
                            <th class="py-2 px-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr class="border-t">
                            <td class="py-2 px-4">Asma lachhab</td>
                            <td class="py-2 px-4">2024-12-17</td>
                            <td class="py-2 px-4">19:00</td>
                            <td class="py-2 px-4">4</td>
                            <td class="py-2 px-4 text-yellow-500">Pending</td>
                            <td class="border-b p-3">
              <button class="text-green-500 hover:underline">Accept</button> | 
              <button class="text-red-500 hover:underline">Refuse</button>
            </td>
                        </tr>
                        
                        <tr class="border-t">
                            <td class="py-2 px-4">Sara boulahia</td>
                            <td class="py-2 px-4">2024-12-18td>
                            <td class="py-2 px-4">15:00</td>
                            <td class="py-2 px-4">6</td>
                            <td class="py-2 px-4 text-yellow-500">Pending</td>
                            <td class="border-b p-3">
              <button class="text-green-500 hover:underline">Accept</button> | 
              <button class="text-red-500 hover:underline">Refuse</button>
            </td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-2 px-4">Sara boulahia</td>
                            <td class="py-2 px-4">2024-12-18td>
                            <td class="py-2 px-4">15:00</td>
                            <td class="py-2 px-4">6</td>
                            <td class="py-2 px-4 text-yellow-500">Pending</td>
                            <td class="border-b p-3">
              <button class="text-green-500 hover:underline">Accept</button> | 
              <button class="text-red-500 hover:underline">Refuse</button>
            </td>
                        </tr>

                        <tr class="border-t">
                            <td class="py-2 px-4">Sara boulahia</td>
                            <td class="py-2 px-4">2024-12-18td>
                            <td class="py-2 px-4">15:00</td>
                            <td class="py-2 px-4">6</td>
                            <td class="py-2 px-4 text-yellow-500">Pending</td>
                            <td class="border-b p-3">
              <button class="text-green-500 hover:underline">Accept</button> | 
              <button class="text-red-500 hover:underline">Refuse</button>
            </td>
                        </tr>

                        <tr class="border-t">
                            <td class="py-2 px-4">Sara boulahia</td>
                            <td class="py-2 px-4">2024-12-18td>
                            <td class="py-2 px-4">15:00</td>
                            <td class="py-2 px-4">6</td>
                            <td class="py-2 px-4 text-yellow-500">Pending</td>
                            <td class="border-b p-3">
              <button class="text-green-500 hover:underline">Edit</button> | 
              <button class="text-red-500 hover:underline">Cancel</button>
            </td>
                        </tr>                    </tbody>
                </table>
            </div>
        </section>
      </div>



      <!-- Footer -->
      <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; 2024 Travigo set web de voyage. All rights reserved.</p>
      </footer>
    </main>
    <script>
      let AllSection = document.querySelectorAll('section');
      document.getElementById('bteVoirReservation').addEventListener('click', () => {
        AllSection.forEach(section => {
          if (section.id != "allreservation") {
            section.classList.add('hidden')
          } else {
            section.classList.remove('hidden')
          }
        })

      });

      document.getElementById('bteAjoutActivite').addEventListener('click', () => {
        AllSection.forEach(section => {
          if (section.id != "formActivite") {
            section.classList.add('hidden')
          } else {
            section.classList.remove('hidden')
          }
        })

      });

      document.getElementById('bteReservbuttoncceptte').addEventListener('click', () => {
        AllSection.forEach(section => {
          if (section.id != "reservationacceptee") {
            section.classList.add('hidden')
          } else {
            section.classList.remove('hidden')
          }
        })

      });
      
    </script>
</body>

</html>