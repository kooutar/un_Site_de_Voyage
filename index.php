
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site voyage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
 .font-bebas{
            font-family: "Bebas Neue", serif;
        }
        .textlarge{
            font-size: 80px;
        }
        .fontsinista{
            font-family: Sansita Swashed;
        }
    </style>
    
</head>
<body >
    <section class="bg-[url('img/john-matychuk-Af8ZjGMsHKQ-unsplash.jpg')] bg-no-repeat bg-cover  h-screen pl-[100px]">


<div class="flex justify-between items-center p pt-[20px]">
            <a href="#">
                <img src="img/Cendre_moderne_cercle_lignes_café_nova_logo-removebg-preview.png" class="max-w-full h-auto w-[200px] " alt="logo">
            </a>
            <div class="block lg:hidden">
          <button id="menu-button" class="text-emerald-700 focus:outline-none">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
              </svg>
          </button>
      </div>
            <div class="hidden font-bebas lg:flex space-x-8">
                <div>
                <a href="index.php" class="font-bold text-white lg:text-lg p-2 hover:font-bold">Acceuil</a>
                <hr class="border-t-4 border-emerald-700 opacity-80 w-20 "></div><a href="activites.php" class="font-semibold text-white lg:text-lg p-2 hover:font-bold">Activités</a>
                <a href="reservations.php" class="font-semibold text-white lg:text-lg p-2 hover:font-bold">Mes Réservations</a>
                <a href="frontEnd/login.php" class="font-semibold text-white lg:text-lg p-2 hover:font-bold">Se Connecter</a>
                
                <div class="flex space-x-4 pt-2 text-white">
                    <a href="#" class="text-white w-[20px] h-[20px]">
                    <a href="client.php">
                    <img src="./img/User.png" alt="user logo"></a>
                </a>
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    
                </div>
          
            </div>
        </div>
        
        
      
      <div id="menu" class="fixed top-0 left-0 h-screen w-[70%] bg-emerald-700	  px-4 py-2 transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex-col justify-center items-center space-y-4 z-50 hidden pt-[20%]">
        <div class="text-center space-y-8">
        <div><a href="#" class="font-semibold text-white hover:text-[#F7E0A1]">Activités</a></div>
          <div><a href="#" class="font-semibold text-white hover:text-[#F7E0A1]">Mes Réservations</a></div>
          <div><a href="frontEnd/login.php" class="font-semibold text-white hover:text-[#F7E0A1]">Se Connecter</a></div>
          <div><a href="#" class="font-semibold text-white hover:text-[#F7E0A1]">Evolutions</a></div>
          <div><a href="#" class="font-semibold text-white hover:bg-[#F7E0A1] hover:rounded-lg hover:py-2 hover:px-3 hover:shadow-2xl hover:scale-105 transition hover:text-[#7F000F]">Sign in</a></div>
      </div>
      </div>
      
     

    <div class="text-blue-00 text-2xl pt-[250px] flex flex-col space-y-8">
        <h1>Site de voyage</h1>
        <h2 class="font-bebas textlarge pb-[20px]">Découvrez nos</h2>
        <h2 class="font-bebas textlarge "> activités touristiques.</h2>
        <p>Réservez facilement vos activités préférées en ligne.</p>
        <button id="bteInscrire" class="font-bebas w-[180px] text-black text-lg bg-emerald-700  rounded-3xl p-2 px-2">Inscrire</button>
</div>

</section>
<main class="container mx-auto px-6 py-16">
        
        

        <section class="mb-12">
            <h2 class="text-3xl font-bold fontsinista text-gray-800 uppercase mb-4 text-center">About Us</h2>
            <p class="text-xl text-gray-600 text-center mb-8">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white p-6 rounded shadow-md">
                        <img src="img/arnel-hasanovic-Nl-SXO4FAHw-unsplash.jpg" class="h-[250px] w-[500px]" alt="">
                        <h3 class="text-xl font-bold text-gray-800 uppercase mb-2">Évasion Tropicale</h3>
                        <p class="text-gray-600">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        <button class="text-black flex justify-start content-center mt-3 hover:text-black">
                    <a href="#" class="bg-white border border-black  w-32 h-10 flex items-center justify-center">
                        READ MORE
                    </a>
                </button>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white p-6 rounded shadow-md">
                    <img src="img/jason-cooper-iEJVyyevw-U-unsplash.jpg" class="h-[250px] w-[500px]" alt="">
                        <h3 class="text-xl font-bold text-gray-800 uppercase mb-2">Soleil et Sérénité</h3>
                        <p class="text-gray-600">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        <button class="text-black flex justify-start content-center mt-3 hover:text-black">
                    <a href="#" class="bg-white border border-black  w-32 h-10 flex items-center justify-center">
                        READ MORE
                    </a>
                </button>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white p-6 rounded shadow-md">
                    <img src="img/jared-rice-k3pYa0CDLl0-unsplash.jpg" class="h-[250px] w-[500px]" alt="">
                        <h3 class="text-xl font-bold text-gray-800 uppercase mb-2">Aventure en Montagne</h3>
                        <p class="text-gray-600">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        <button class="text-black flex justify-start content-center mt-3 hover:text-black">
                    <a href="#" class="bg-white border border-black  w-32 h-10 flex items-center justify-center">
                        READ MORE
                    </a>
                </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 fontsinista uppercase mb-4">Our activities</h2>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white p-6 rounded shadow-md">
                        <img src="img/alex-azabache-V83v-MYB_Z8-unsplash.jpg" class="h-[250px] w-[500px]" alt="">
                        <h3 class="text-xl font-bold text-gray-800 uppercase mb-2">Voyage Mystique</h3>
                        <p class="text-gray-600">$589.98</p>
                        <a href="#" class="inline-block mt-4 bg-white  py-2 px-4   bg-white border border-black">MORE</a>
                        
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white p-6 rounded shadow-md">
                        <img src="img/igor-oliyarnik-Uu5aXBI1oLk-unsplash.jpg" class="h-[250px] w-[500px]" alt="">
                        <h3 class="text-xl font-bold text-gray-800 uppercase mb-2">Nuit sous les Étoiles</h3>
                        <p class="text-gray-600">$409.98</p>
                        <a href="#" class="inline-block mt-4 bg-white border border-black  py-2 px-4  ">MORE</a>
                    </div>
                    
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white p-6 rounded shadow-md">
                        <img src="img/denys-nevozhai-guNIjIuUcgY-unsplash.jpg" class="h-[250px] w-[500px]" alt="">
                        <h3 class="text-xl font-bold text-gray-800 uppercase mb-2">Voyage au Cœur du Désert</h3>
                        <p class="text-gray-600">$109.98</p>
                        <a href="#" class="inline-block mt-4 bg-white border border-black py-2 px-4 rounded ">MORE</a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white p-6 rounded shadow-md">
                        <img src="img/edgar-chaparro-6ccJQ5qPFvY-unsplash.jpg" class="h-[250px] w-[500px]" alt="">
                        <h3 class="text-xl font-bold text-gray-800 uppercase mb-2">Escapade Gourmande</h3>
                        <p class="text-gray-600">$309.98</p>
                        <a href="#" class="inline-block mt-4 bg-white border border-black py-2 px-4 rounded ">MORE</a>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-white p-6 rounded shadow-md">
                        <img src="img/gaddafi-rusli-2ueUnL4CkV8-unsplash.jpg" class="h-[250px] w-[500px]" alt="">
                        <h3 class="text-xl font-bold text-gray-800 uppercase mb-2">Rando Sauvage</h3>
                        <p class="text-gray-600">$29.98</p>
                        <a href="#" class="inline-block mt-4 bg-white border border-black py-2 px-4 rounded ">MORE</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="relative bg-customCream">
        <div class="absolute inset-0 bg-cover bg-center " style="background-image: url('image/__.jpeg');">
            <div class="absolute inset-0 backdrop-blur-sm bg-black bg-opacity-30"></div>
        </div>
        <!-- top footer -->
        <section class="relative z-5 flex flex-col md:flex-row items-center justify-between px-8 md:px-40 mb-5">
            <img src="img/Cendre_moderne_cercle_lignes_café_nova_logo-removebg-preview.png" width="100" alt="logo" >
            <div class="text-white">
                <h3 class="text-2xl font-semibold fontsinista">Follow us</h3>
                <div class="flex space-x-4">
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>
        </section>
        <div class="px-10">
            <hr class="border-t border-white opacity-80">
        </div>
    
        <!-- footer-body -->
        <section class="relative z-5  flex flex-col md:flex-row justify-between gap-10 sm:gap-20 px-14 py-10">
            <div class="flex flex-col sm:flex-row gap-10 md:gap-20 w-full">
                <div>
                    <h3 class="text-2xl font-semibold fontsinista mb-3 text-white">BLOC</h3>
                    <div class="text-2xl">
                        <div><a href="#" class="text-gray-700 hover:text-white">Home</a></div>
                        <div><a href="#" class="text-gray-700 hover:text-white">Favoris</a></div>
                        <div><a href="#" class="text-gray-700 hover:text-white">Modéles</a></div>
                        <div><a href="#" class="text-gray-700 hover:text-white">Services</a></div>
                        <div><a href="#" class="text-gray-700 hover:text-white">More</a></div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold fontsinista mb-3 text-white">ABOUT-US</h3>
                    <div class="text-2xl">
                        <p>(123) 456-7891</p>
                        <a href="#" class="text-gray-700 hover:text-white">BITEFOOD@gmail.co</a>
                        <p>Hay jerifate, Safi, Bouzid</p>
                        <div><a href="#" class="text-gray-700 hover:text-white">Careers</a></div>
                        <div><a href="#" class="text-gray-700 hover:text-white">Community</a></div>
                        <div><a href="#" class="text-gray-700 hover:text-white">Company</a></div>
                    </div>
                </div>
                
            </div>
            <div class="flex flex-col sm:flex-row gap-10 md:gap-10 sm:gap-4 w-full">
                <div>
                    <h3 class="text-2xl font-semibold fontsinista mb-3 text-white">DISCLAIMER</h3>
                    <div  class="text-2xl">
                        <p>Acess apps</p>
                        <a href="#" class="text-gray-700 hover:text-white">BITEFOOD@gmail.co</a>
                        <p>Dreaming Desktop</p>
                        <p>On the clouds</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold fontsinista mb-3 text-white">SHOP</h3>
                    <div class="text-2xl">
                        <div><a href="#" class="text-gray-700 hover:text-white">Contact us</a></div>
                        <p>Subscribe</p>
                        <div><a href="#" class="text-gray-700 hover:text-white">Profil</a></div>
                    </div>
                </div>
                
            </div>
            
        </section>
        <div class="px-10">
            <hr class="border-t border-white opacity-80">
        </div>
    
        <!-- footer-bottom -->
        <div class="text-center py-10">
            <p class="relative z-5 text-lg text-gray-700 fontsinista font-semibold">© 2024 Codebenders. All rights reserved.</p>
        </div>
    </footer>
     <script>

document.getElementById('bteInscrire').addEventListener('click',()=>{
  window.location.href = "frontEnd/registre.php";

})
     </script>


</body>
</html>