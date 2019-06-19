<?php
$isPosted = filter_has_var(INPUT_POST, "submit");

if($isPosted){
   $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);
   $pass = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

   $user = authenticate($login, $pass);

   if($user){
      $_SESSION["user"]= $user;

      setFlash("Bonjour {$user['userName']}");
      //redirection vers home
      header("location:index.php?page=home");
      exit;
   } else {
      $error = "Echec de l'authentification";
   }
}

require "../src/views/layout.php";