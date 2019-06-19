<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Mon application</title>
   <link rel="stylesheet" 
         href="yarn-modules/bootstrap/dist/css/bootstrap.min.css">
   <script src="yarn-modules/jquery/dist/jquery.min.js"></script>
   <script src="yarn-modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid">
   <header class="card-header row">
      <h1 class="col-9">Mon Aplication</h1>

      <!-- Affichage des liens de connexion déconnexion et des infos utilisateur -->
      <div class="col-3">
         <?php if($user): ?>
            <?= $user["userName"] ?>
            <a href="index.php?page=logout">Déconnexion</a>
         <?php else: ?>
            <a href="index.php?page=login">Connexion</a>
            <a href="index.php?page=register">Inscription</a>
         <?php endif ?>
      </div>
   </header>

   <div class="row justify-content-center">
      <div class="col-md-9">

      <!-- Affichage du message flash -->
         <?php
            $message = getFlash();
            if(! empty($message)):
         ?>
            <div class="alert alert-success">
               <?= $message ?>
            </div>
         <?php endif ?>

         <!-- Affichage de la vue --> 
         <?php require getView($page);?>
      </div>
   </div>
   
</body>
</html>