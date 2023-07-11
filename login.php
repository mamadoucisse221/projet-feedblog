<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$base = 'feedblog';
$conn = mysqli_connect($host, $user, $pass, $base);

if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_prenom'] = $row['prenom'];
        $_SESSION['user_nom'] = $row['nom'];
        
        // Redirection vers la page d'accueil après la connexion réussie
        header("Location: accueil.php");
        exit;
    } else {
        $error_message = "Identifiant ou mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - FeedBlog</title>
  <!-- Lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
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
      <a class="nav-link" href="signup.php">S'inscrire</a>
    </div>
  </nav>
  <!-- Formulaire de connexion -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form class="form" id="login-form" action="login.php" method="POST">
          <?php if (isset($error_message)) : ?>
            <div class="alert alert-danger"><?php echo $error_message; ?></div>
          <?php endif; ?>
          <div class="form-group">
            <label for="email">Adresse e-mail :</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Se connecter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
