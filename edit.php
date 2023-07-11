<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier le profil - FeedBlog</title>
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
      <a class="nav-link" href="home.php">home</a>
    </div>
  </nav>

  <div class="container mt-4">
    <h2>Modifier le profil</h2>
    <form id="edit-form" action="update.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="photo">Photo de profil :</label>
        <input type="file" class="form-control-file" id="photo" name="photo">
      </div>
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
      </div>
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
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
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
      </div>
    </form>
  </div>
  
</body>
</html>
