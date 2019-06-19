<?php

$isPosted = filter_has_var(INPUT_POST,"submit");

if($isPosted){
   $userName = filter_input(INPUT_POST, "userName", FILTER_SANITIZE_STRING);
   $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);
   $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
   $role = filter_input(INPUT_POST, "role", FILTER_SANITIZE_STRING);

   $valid = ! empty($login) && ! empty($userName) && ! empty($password) && ! empty($role);

   if($valid){
      if(insertUser($userName, $login, $password, $role)){
         setFlash("Vous êtes bien inscrit nous allons vous piquer vos données perso");
         
         header("location:index.php?page=home");
         exit;
      } else {
         $error = "Impossible de sauvegarder vos données";
      }
   } else {
      $error = "Votre saisie est incomplète";
   }
}

require "../src/views/layout.php";