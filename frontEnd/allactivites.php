<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Barre de navigation (Navbar) -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center text-white">
            <a href="#" class="text-2xl font-semibold">Mon Site</a>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:text-gray-200">Accueil</a></li>
                <li><a href="#" class="hover:text-gray-200">Activités</a></li>
                <li><a href="#" class="hover:text-gray-200">À Propos</a></li>
                <li><a href="#" class="hover:text-gray-200">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Section des Activités -->
    <section class="max-w-7xl mx-auto p-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Nos Activités</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php 
            // Inclure la classe activites
            require_once('../Classes/activties.php');
            require_once('../dataBase/db.php');
            $db = dataBase::getInstance()->getConnection();

            // Récupérer toutes les activités depuis la base de données
            $activitesList = activites::getAllActivites($db);

            // Afficher les activités sous forme de cartes
            foreach ($activitesList as $activite) {
                echo $activite->afficherActivites();
            }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-6">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-sm">&copy; 2024 Mon Site. Tous droits réservés.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="hover:text-gray-200">Facebook</a>
                <a href="#" class="hover:text-gray-200">Twitter</a>
                <a href="#" class="hover:text-gray-200">Instagram</a>
            </div>
        </div>
    </footer>

       <!-- Modale -->
       <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-lg w-full max-w-md p-6 shadow-lg relative">
            <!-- Titre -->
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Réservation</h2>
            
            <!-- Formulaire -->
            <form action="#" method="POST" class="space-y-4">
                <!-- Nombre de personnes -->
                <div>
                    <label for="nbrPersonnes" class="block text-sm font-medium text-gray-700 mb-1">Nombre de personnes</label>
                    <input type="number" id="nbrPersonnes" name="nbrPersonnes" class="w-full border border-gray-300 rounded-lg p-2 focus:ring-blue-600 focus:border-blue-600" placeholder="Entrez le nombre de personnes" required>
                </div>
                
                <!-- Type de voyage -->
                <div>
                    <label for="typeVoyage" class="block text-sm font-medium text-gray-700 mb-1">Type de voyage</label>
                    <select id="typeVoyage" name="typeVoyage" class="w-full border border-gray-300 rounded-lg p-2 focus:ring-blue-600 focus:border-blue-600" required>
                        <option value="" disabled selected>Choisissez un type</option>
                        <option value="Aventure">Aventure</option>
                        <option value="Culturel">Culturel</option>
                        <option value="Relaxation">Relaxation</option>
                        <option value="Découverte">Découverte</option>
                    </select>
                </div>

                <!-- Boutons -->
                <div class="flex justify-end space-x-4">
                    <button type="button" id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Annuler</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Confirmer</button>
                </div>
            </form>
        </div>
    </div>
<script>
    let allbteResrver=document.querySelectorAll('.resrever');
    let modale=document.querySelector('#modal');
    const closeModalBtn = document.getElementById('closeModal');
    allbteResrver.forEach(bte=>{
        bte.addEventListener('click',()=>{
            modale.classList.remove('hidden');
        })
    })
    closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
</script>
</body>
</html>

