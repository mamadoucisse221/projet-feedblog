<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter une publication - FeedBlog</title>
  <!-- Lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Ajoute ton CSS personnalisé ici */
  </style>
</head>
<body>
  <?php
    // Inclure le fichier de connexion à la base de données
    require 'conn.php';

    // Vérifier si l'utilisateur est connecté
    session_start();
    if (!isset($_SESSION['utilisateur_id'])) {
      header("Location: login.php");
      exit();
    }

    // Récupérer les informations de l'utilisateur connecté depuis la base de données
    $utilisateur_id = $_SESSION['utilisateur_id'];
    $query = "SELECT * FROM utilisateurs WHERE id = $utilisateur_id";
    $result = mysqli_query($conn, $query);
    $utilisateur = mysqli_fetch_assoc($result);

    // Traitement du formulaire de publication
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $contenu = $_POST['contenu'];
      $media = $_POST['media'];

      // Insérer la publication dans la base de données
      $query_insert = "INSERT INTO posts (utilisateur_id, contenu, media, likes, partages, commentaires) VALUES ('$utilisateur_id', '$contenu', '$media', 0, 0, 0)";
      mysqli_query($conn, $query_insert);

      // Rediriger vers la page d'accueil
      header("Location: home.php");
      exit();
    }
  ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="img/img1.jpg" alt="Logo FeedBlog" height="40">
      <span class="d-block">FeedBlog</span>
    </a>
    <div class="navbar-nav ml-auto">
      <a class="nav-link" href="home.php">Accueil</a>
      <a class="nav-link" href="logout.php">Se déconnecter</a>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Ajouter une publication</h5>
      </div>
      <div class="card-body">
        <form id="post-form" action="post.php" method="POST">
          <div class="form-group">
            <label for="contenu">Contenu :</label>
            <textarea class="form-control" id="contenu" name="contenu" rows="3" required></textarea>
          </div>
          <div class="form-group">
            <label for="media">Lien vers un média :</label>
            <input type="text" class="form-control" id="media" name="media">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Publier</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
