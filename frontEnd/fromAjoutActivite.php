<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
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
</body>
</html>
