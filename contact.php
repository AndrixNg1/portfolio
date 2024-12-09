
<?php include 'includes/header.php'; ?>
<main class="container my-5">
<div class="container py-5">
    <div class="section-header">
      <h1>Contactez-moi</h1>
      <p>Et collaborons pour concrétiser votre projet futur !</p>
    </div>
    
    <div class="row">
      <!-- Informations de contact -->
      <div class="col-md-6 mb-4 contact-info">
        <h3>Mes coordonnées</h3>
        <p><i class="bi bi-telephone-fill"></i> <strong>Téléphone :</strong> +243 855 356 517</p>
        <p><i class="bi bi-envelope-fill"></i> <strong>Email :</strong> andrixngoyi243@gmail.com</p>
        <p><i class="bi bi-clock-fill"></i> <strong>Disponible sur rendez-vous</strong></p>
      </div>
      
      <!-- Formulaire de contact -->
      <div class="col-md-6">
        <h3>Envoyez-nous un message</h3>
        <form action="process/handle-contact.php" method="POST" class="contact-form">
          <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="sujet" class="form-label">Sujet</label>
            <input type="text" class="form-control" id="sujet" name="sujet" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Envoyer</button>
        </form>
      </div>
    </div>
    
    <!-- Message de motivation -->
    <div class="message-motivation">
      <p>"Chaque projet est une nouvelle opportunité de créer quelque chose d'exceptionnel. N'attendez plus, envoyez-moi votre idée et transformons-la ensemble !"</p>
    </div>
  </div>

</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>



</main>
<?php include 'includes/footer.php' ?>