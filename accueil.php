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

  <!-- Liste des utilisateurs -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-3">
        <div class="users-container">
          <!-- Utilisateur 1 -->
          <div class="card user-card">
            <div class="card-body">
              <div class="user">
                <img src="img/img1.jpg" alt="Photo de profil" class="rounded-circle" width="40" height="40">
                <a href="home.php" class="user-link">Nom Prénom</a>
              </div>
            </div>
          </div>
          <!-- Utilisateur 2 -->
          <div class="card user-card">
            <div class="card-body">
              <div class="user">
                <img src="img/img2.jpg" alt="Photo de profil" class="rounded-circle" width="40" height="40">
                <a href="home.php" class="user-link">Nom Prénom</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <!-- Conteneur des posts -->
        <div class="posts-container">
          <!-- Post 1 -->
          <div class="card post-card">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="mb-0">
                    <a href="home.php" class="user-link">Nom Prénom</a>
                  </h5>
                  <img src="img/img1.jpg" class="rounded-circle" width="30" height="30">
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
                <h5 class="mb-0">
                  <a href="home.php" class="user-link">Prenom Nom</a>
                </h5>
                <img src="img/img1.jpg" alt="Photo de profil" class="rounded-circle" width="30" height="30">
                <input type="text" placeholder="Ajouter un commentaire" class="ml-2">
                <button class="btn btn-primary">Commenter</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>
