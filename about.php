<?php include 'includes/header.php'; ?>
<main>
  <div>
    <!-- Section About -->
    <section>
      <div class="about-page">
        <div class="about-section">
          <div class="text-content animate__animated animate__fadeInLeft">
            <h1>about.</h1>
            <h2>Andrix Ngoyi. Je suis un développeur résident en R.D. Congo</h2>
            <p>
              Passionné par le développement front-end, je m'efforce de créer des expériences utilisateur
              exceptionnelles qui sont à la fois accessibles, intuitives et performantes. Mon approche se concentre sur
              la qualité du code et l'optimisation des performances, afin d’offrir des sites web et des applications
              fluides qui répondent aux besoins des utilisateurs.

              Mon parcours m’a permis d’acquérir une expertise en HTML, CSS, JavaScript, ainsi qu’en frameworks comme
              vue.js. Je suis constamment à l’affût des dernières tendances et meilleures pratiques du développement
              pour offrir des solutions innovantes et adaptées.

              Je crois fermement en l’importance de la collaboration et de l’amélioration continue. Chaque projet est
              une opportunité d'apprendre, de grandir et de perfectionner mes compétences. Mon objectif est de toujours
              fournir un travail de qualité, en apportant des solutions techniques créatives tout en veillant à
              l’expérience utilisateur.

              N'hésitez pas à consulter mon portfolio pour découvrir mes réalisations et à me contacter pour discuter de
              vos projets !
            </p>
          </div>
          <div class="image-container">
            <img src="assets/img/sudoda.jpg" alt="Andrix Ng" class="animate__animated animate__fadeInRight" />
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section>
    <h4 class="text-center mb-4">laisse parler ton imagination</h4>
    <div class="photo-row">
        <?php
        // Chemins des images
        $photos = [
          "assets/img/WhatsApp Image 2024-11-20 at 20.16.27_29c683f9.jpg",
          "assets/img/1.png",
          "assets/img/and2.jpg",
          "assets/img/2.jpg",
          "assets/img/and3.jpg",
          "assets/img/g.jpg",
          "assets/img/and1.jpg"
        ];

        // Génération dynamique des images
        foreach ($photos as $photo) {
          echo "<img src='$photo' alt='Photo' class='photo-item'>";
        }
        ?>
    </div>
</section>

<style>
  /* Conteneur pour la galerie */
  .photo-row {
    display: flex;
    overflow-x: auto; /* Permet un scroll horizontal */
    scroll-snap-type: x mandatory; /* Scroll fluide */
    gap: 10px; /* Espacement entre les images */
    padding: 10px; /* Ajout de padding autour du contenu */
  }

  /* Style des images */
  .photo-item {
    flex: 0 0 auto; /* Empêche les images de s'étirer */
    width: 20vw; /* Largeur dynamique basée sur la taille de l'écran */
    max-width: 150px; /* Largeur maximale pour éviter les trop grandes tailles */
    height: auto; /* Hauteur automatique pour garder les proportions */
    border-radius: 8px; /* Coins arrondis */
    scroll-snap-align: start; /* Alignement parfait sur le scroll */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transition fluide pour les effets */
  }

  /* Effet au survol des images */
  .photo-item:hover {
    transform: scale(1.1); /* Zoom léger sur l'image au survol */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ombre autour de l'image */
  }

  /* Ajout d'une barre de défilement personnalisée */
  .photo-row::-webkit-scrollbar {
    height: 8px;
  }

  .photo-row::-webkit-scrollbar-thumb {
    background-color: #bbb;
    border-radius: 8px;
  }
</style>


    <!-- Section Part Designer & Part Coder -->
    <section>
      <div class="about-page">
        <div class="about-section">
          <div class="text-content">
            <h2>Part designer</h2>
            <ul>
              <li>UI design</li>
              <li>UX design</li>
              <li>Interaction design</li>
              <li>Conception visuelle</li>
            </ul>
            <h2>Part coder</h2>
            <ul>
              <li>HTML/CSS</li>
              <li>PHP</li>
              <li>JavaScript</li>
              <li>Python</li>
            </ul>
            <h3>i like</h3>
            <ul>
              <li>TailwindCSS</li>
              <li>Vue.js, etc</li>
            </ul>
          </div> 
          <div class="image-container">
            <img src="assets\img\WhatsApp Image 2024-11-20 at 20.16.27_29c683f9.jpg" alt="Andrix Ng"
              class="rounded float-start" />
          </div>
        </div>
      </div>
    </section>

    <!-- Random Facts Section -->
    <section>
      <div class="about-page">
        <div class="about-section">
          <div class="text-content">
            <h2><em>Random Facts</em></h2>
            <p>
              J'ai récemment créé un compte LinkedIn pour étendre mon réseau professionnel. Je suis aussi de près des
              sujets d'actualité comme le manga Naruto Shippuden. Mon ambition est de maîtriser à la fois le
              développement
              web et les outils de design, Celà montre ma volonté d’être polyvalent et de proposer des projets de qualité à
              mes futurs clients. Itachi est mon mentor.
            </p>
          </div>
          <div class="image-container">
            <img src="assets/img/sudo.webp" alt="Andrix Ng" class="animate__animated animate__backInLeft" />
          </div>
        </div>
      </div>
    </section>

    <!-- Mes Services Section -->
    <section>
      <div class="about-page">
        <div class="about-section">
          <div class="text-content">
            <h2>Mes Services</h2>
            <ul>
              <li><strong>Développement Front-End</strong>
                <p>Création d'interfaces réactives et dynamiques avec HTML5, CSS3, JavaScript, TailwindCSS, Vue.js, etc.
                </p>
              </li>
              <li><strong>Sites Web sur Mesure</strong>
                <p>Conception de sites personnalisés adaptés à vos besoins spécifiques.</p>
              </li>
              <li><strong>Design Responsive</strong>
                <p>Optimisation pour tous les appareils (ordinateurs, tablettes, mobiles).</p>
              </li>
              <li><strong>Maintenance & Support</strong>
                <p>Suivi technique et mises à jour après le lancement du site.</p>
              </li>
              <li><strong>Design UI/UX</strong>
                <p>Conception de sites intuitifs et esthétiques, avec une navigation fluide.</p>
              </li>
            </ul>
          </div>
          <div class="image-container">
            <img src="assets/img/trav.jpg" alt="Mes Services" class="animate__animated animate__backInLeft" />
          </div>
        </div>
      </div>
    </section>

    <!-- My Story Section -->
    <section>
      <div class="about-page">
        <div class="about-section">
          <div class="text-content">
            <h2><em>My Story</em></h2>
            <p>
              Passionné par la technologie depuis toujours, mon aventure dans le développement web a commencé par la
              curiosité. Au départ, j’ai appris les bases du HTML et du CSS pour comprendre comment fonctionnaient les
              sites que je visitais. Rapidement, je suis tombé sous le charme de la programmation, captivé par la
              possibilité de créer des expériences interactives sur le web.
            </p>
            <p>
              Mon parcours m’a conduit à créer des sites web personnalisés et à répondre aux besoins uniques de mes
              clients.
              Aujourd'hui, je continue d'évoluer en apprenant de nouvelles technologies pour offrir des produits
              digitaux de haute qualité.
            </p>
            <p><a class="transition" href="https://www.linkedin.com/in/andrix-ngoyi-469662321" target="_blank">Read my
                story</a></p>
          </div>
          <div class="image-container">
            <img src="assets\img\logo.png" alt="My Story"
              class="animate__animated animate__backInLeft" />
          </div>
        </div>
      </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>