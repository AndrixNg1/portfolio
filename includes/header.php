<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio || Andrix Ng</title>

    <!-- Liens vers les fichiers CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body>
    <!-- Header -->
    <nav class="bg-white border-bottom border-gray-300">
        <div class="container mx-auto px-4">
            <div class="d-flex align-items-center justify-content-between h-16">

                <!-- Bouton pour menu mobile -->
                <button id="mobile-menu-button" type="button" class="btn p-2 d-sm-none text-gray-500 hover-bg-gray-200" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="visually-hidden">Ouvrir le menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                <!-- Logo -->
                <div>
                    <a href="index.php">
                        <img src="assets/img/logo.png" alt="Logo" class="h-8">
                    </a>
                </div>

                <!-- Menu de navigation -->
                <div class="d-none d-sm-block">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-black bg-light rounded">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link text-black hover-bg-gray-200">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link text-black hover-bg-gray-200">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="mobile-menu" class="d-sm-none collapse">
            <ul class="list-unstyled px-3 py-2">
                <li><a href="index.php" class="d-block py-2 text-black bg-gray-200 rounded">Accueil</a></li>
                <li><a href="about.php" class="d-block py-2 text-black hover-bg-gray-200">À propos</a></li>
                <li><a href="contact.php" class="d-block py-2 text-black hover-bg-gray-200">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Gestion du menu mobile
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            if (mobileMenu.classList.contains('collapse')) {
                mobileMenu.classList.remove('collapse');
            } else {
                mobileMenu.classList.add('collapse');
            }
        });
    </script>
</body>

</html>
