<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription - FeedBlog</title>
  <!-- Lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Ajoute ton CSS personnalisé ici */
  </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="img/img1.jpg" alt="Logo FeedBlog" height="40">
      <span class="d-block">FeedBlog</span>
    </a>
    <div class="navbar-nav ml-auto">
      <a class="nav-link" href="login.php">Se connecter</a>
    </div>
  </nav>
  <!-- Formulaire d'inscription -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form class="form" id="signup-form" action="inscription.php" method="POST">
          <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
          </div>
          <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
          </div>
          <div class="form-group">
            <label for="email">Adresse e-mail :</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group">
            <label for="confirm-password">Confirmation du mot de passe :</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">S'inscrire</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    <div>
      <img class="rounded-circle bg-secondary d-inline-block p-0.5" src="img/img1.jpg" width="70" height="70">
    </div>
  </div>
</body>
</html>