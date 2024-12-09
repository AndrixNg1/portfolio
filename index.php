<?php include 'includes/header.php' ?>
<main>
  <div>
    <section>
      <div class="about-page">
        <div class="about-section">
          <div class="text-content">
            <h2>Porfolio.</h2>
            <h3>Hello, World! Moi c'est Andrix Ngoyi Passionné par le développement web</h3>
            <p>Je suis un développeur polyvalent spécialisé dans la création de sites internet modernes, interactifs et
              performants. Grâce à une solide maîtrise des technologies telles que HTML, CSS, JavaScript, ainsi que des
              frameworks comme TailwindCSS et Vue.js, je transforme vos idées en solutions web efficaces.</p>
            <p>
              Explorez mes <a>projets</a> et n'hésitez pas à me contacter pour discuter de la façon dont nous pouvons
              collaborer !</p>
          </div>
          <div class="image-container">
            <img src="assets/img/and1.jpg" alt="Andrix Ng" class="animate__animated animate__backInLeft" />
          </div>
          <div class="hrto">
            <div>
              <h2>Ojectif</h2>
              <p>Mon objectif est d'offrir des expériences uniques pour les utilisateurs tout en assurant des
                performances optimales et une accessibilité pour tous les types d'utilisateurs.
                Que ce soit pour des projets personnels ou professionnels, j'aime relever des défis
                techniques et je suis toujours à la recherche de nouvelles opportunités pour apprendre et évoluer.
                Je suis particulièrement motivé par le développement front-end. Mon approche du travail est centrée sur
                la qualité du code, la collaboration, et l'amélioration continue. Lorsque je ne suis pas en train de
                coder,
                j'aime explorer de nouvelles technologies, partager mes connaissances avec la communauté et travailler
                sur
                des
                projets qui ont un impact réel.</p>
            </div>
          </div>
        </div>
      </div>

    </section>




    <h3>Ce que je vous offres</h3>

    <div class="card-group">
      <div class="card animate__animated animate__zoomIn">
        <img src="assets/img/sudo1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Développement Front-End</h5>
          <p class="card-text">Création
            d'interfaces réactives et dynamiques avec HTML5, CSS3, JavaScript, TailwindCSS, et vuejs.
          </p>
          <p class="card-text"><small class="text-muted">"Première règle de tout projet : rendre le code facile à lire
              pour les humains, car les ordinateurs s’en sortent très bien tout seuls."
            </small></p>
        </div>
      </div>
      <div class="card animate__animated animate__fadeInUp">
        <img src="assets/img/1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Design Responsive</h5>
          <p class="card-text">Optimisation
            pour tous les appareils (ordinateurs, tablettes, mobiles).
          </p>
          <p class="card-text"><small class="text-muted">"Un bon programmeur est quelqu’un qui regarde des deux côtés
              avant de traverser une rue à sens unique."</small></p>
        </div>
      </div>
      <div class="card animate__animated animate__fadeInUp">
        <img src="assets/img/2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Développement Web</h5>
          <p class="card-text">
            Je développe en utilisant principalement des technologies comme
            Bootstrap, TailwindCSS, JavaScript, Symfony, etc.
          </p>
          <p class="card-text"><small class="text-muted">"Le code est comme l'humour. Quand tu dois l'expliquer, c'est
              qu'il n'est pas bon."</small></p>
        </div>
      </div>
    </div>

    <section>
      <h4 class="text-center mb-4">Je vous présente mes projets</h4>
      <div class="photo-row">
        <?php
        // Chemins des images
        $photos = [
          ["src" => "assets/img/Screenshot2024-11-27205603.png", "url" => "http://restaurantjoie.42web.io/?i=1"],
          ["src" => "assets/img/''.png", "url" => ""],
          ["src" => "assets/img/''.jpg", "url" => ""],
          ["src" => "assets/img/''.jpg", "url" => ""],
          // Ajoutez d'autres images et liens ici
        ];

        // Génération dynamique des images avec liens
        foreach ($photos as $photo) {
          echo "<a href='" . $photo['url'] . "'><img src='" . $photo['src'] . "' alt='Photo'></a>";
        }
        ?>
      </div>
    </section>

</main>
<?php include 'includes/footer.php'; ?>