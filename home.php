<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - FeedBlog</title>
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
      <a class="nav-link" href="accueil.php">Accueil</a>
    </div>
  </nav>

  <!-- Photo de profil -->
  <div class="text-center mt-3">
    <div class="">
      <img class="rounded-circle bg-secondary d-inline-block p-1" src="img/img1.jpg">
    </div>
    <div>
      <h4><?php echo $utilisateur['prenom'] . ' ' . $utilisateur['nom']; ?></h4>
      <a href="edit.php" class="btn btn-primary">Modifier le profil</a>
    </div>
  </div>

  <!-- Le reste de ton contenu HTML ici -->
  <div class="text-center mt-3">
    <a href="post.php" class="btn btn-primary">Ajouter une publication</a>
  </div>

  <!-- Conteneur des posts -->
  <div class="container mt-4">
    <!-- Post 1 -->
    <div class="card mb-4">
      <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h5 class="mb-0"><?php echo $utilisateur['prenom'] . ' ' . $utilisateur['nom']; ?></h5>
            <img src="img/img1.jpg" class="rounded-circle" height="30" height="30">
          </div>
          <button class="btn btn-link">Modifier</button>
        </div>
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius feugiat ex, vel pulvinar est finibus et.</p>
        <div class="text-center">
          <img src="img/img1.jpg" alt="Image du post" class="img-fluid mb-3">
        </div>
        <div class="text-right">
          <button class="btn btn-primary mr-2">
            <img src="img/like.png" width="40" height="40">
            <span class="badge badge-light">100</span>
          </button>
          <button class="btn btn-secondary mr-2">
            <img src="img/share.png" width="40" height="40">
            <span class="badge badge-light">50</span>
          </button>
        </div>
      </div>
      <div class="card-footer">
        <!-- Nombre de likes, partages et commentaires -->
        <div class="text-right">
          <span class="mr-3">100 likes</span>
          <span class="mr-3">50 partages</span>
          <span>10 commentaires</span>
        </div>
      </div>
      <div class="card-footer">
        <!-- Section des commentaires -->
        <div class="add-comment">
          <h5 class="mb-0">Prenom Nom</h5>
          <img src="img/img1.jpg" alt="Photo de profil" class="rounded-circle" width="30" height="30">
          <input type="text" placeholder="Ajouter un commentaire" class="ml-2">
          <button class="btn btn-primary">Commenter</button>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>
